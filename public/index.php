<?php
/**
 * Index.php
 * 
 * This application uses the Slim microframework as a simple router that will
 * ingest content and generate a page per content file. Do NOT remove the next
 * three lines: they require the necessary files and instantiate the application.
 */
require 'router/autoload.php';
require 'router/parsedown.php';

$app = new Slim\Slim();

/**
 *  Resource Paths and Helper Methods
 *
 *  This section defines where the application will find the templates and content
 *  for visualizations. Change the visualization.path value to the name of the folder
 *  that will store your content. This path will be reflected in the URL and should be
 *  unique to the project.
 */

$app->config(array(
   'templates.path' => './templates',
   'visualization.path' => './content'
));

/**
 *  parseFileContents looks for a specific file and parses the content of that file
 *  into metadata, config, and content using json_decode for the meta/config info 
 *  and Parsedown to read the content as markdown and return it as HTML.
 *
 *  @param $handle - The directory where the application will find the content.
 */
$parseFileContents = function($path, $filename) {
    $Parsedown = new Parsedown();
    $content = file_get_contents($path . '/' . $filename);
    $content = explode("\n\n", $content);
    $rawMeta = array_shift($content);
    $meta    = json_decode($rawMeta,true);
    $config  = json_encode($meta["config"], true);
    $content = implode("\n\n", $content);
    $content = $Parsedown->text($content);
    $arr = array('meta' => $meta, 'config' => $config, 'content' => $content);
    return $arr;
};

/**
 *  Page Request Routes
 *  
 *  These are routes that define visualization pages.
 */

// INDEX lists the visualizations in the content directory for development
// purposes. Recommend removing this route for production.
$app->get('/', function () use ($app, $parseFileContents) {
	$path    = $app->config('visualization.path');
    $dir = new DirectoryIterator($path);
    $graphs = array();
    foreach($dir as $file){
        if($file->isFile()){
            $handle  = fopen($path . '/' . $file->getFilename(), 'r');
            $graphs[$file->getFilename()] = $parseFileContents($path, $file->getFilename());
        }
    }
    $app->render('index.php',array('graphs' => $graphs));
});

// VISUALIZATION route matches the URL path to a filename and returns the contents
// to instantiate an instance. Remember to change the GET route if you change the name
// of the content folder.
$app->get('/content/:visualization', function ($visualization) use ($app, $parseFileContents) {
    $path    = $app->config('visualization.path');
    $visualizationFile = $visualization . '.md';
    $visualization = $parseFileContents($path, $visualizationFile);
    $app->render('content.php', $visualization);
});

/**
 * Run the application
 *
 * This method should be called last. This executes the Slim application.
 */
$app->run();