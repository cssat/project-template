<?php
/**
 * Index.php
 *
 * Lists all of the graphs in the content folder for easy reference
 * during development. Remove in production.
 */
foreach($graphs as $graph){ ?>

<html>
<head>
    <title>All Visualizations</title>
</head>
<body>
	<?php echo '... <a href="content/' . $graph['meta']['slug'] . '">'
			. "<h1> ". $graph['meta']['title'] ." </h1></a> "; ?>
	<?php     echo substr(strip_tags($graph['content']), 0,200) ?>
</body>
</html>
<?php } ?>