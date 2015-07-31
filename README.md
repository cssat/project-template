# POC Visualization Project Template

## Project Purpose
This is a starter template for visualization projects. It includes the basic style, module files and structure that we expect of new visualizations as well as instructions for how to write and include content.

## Implementation Overview
Use this section to describe briefly how the project is put together

## Get Started

1. Install [Node.js](https://nodejs.org/download/) if you haven't already

2. Clone the repo

3. Fire up the terminal, cd to the project structure and then into the /assets folder. Type "npm install" to install the modules you'll need to manage Sass and JavaScript.

4. Type "gulp watch," hit Enter and away you go!

## Assets
* CSS
	* styles.css and styles.min.css are built from the files in the sass folder

* JS
	* app.min.js is build from app.js, which requires and initializes the modules in the `modules` folder. This is preferable to putting all of the functions in one file because it maintains separation of different parts of the app.

* Sass
	* Stylesheets are organized into `base`, `components` and `theme` folders to keep CSS simple and separated. These files are included into `styles.scss`; comment out the lines of any files you don't need for your project.

## Data
Use this section to describe what data is consumed by the application and how.

## Data Generation
Use this section to describe how the data is generated, including any dependencies.