# POC Visualization Project Template

## Project Purpose
** For your project, replace this description as needed **

This is a starter template for visualization projects. It includes the basic style, module files and structure that we expect of new visualizations as well as instructions for how to write and include content.

## Implementation Overview

** For your project, replace or augment this description as needed **

This project is a complete development package for creating new JavaScript-based visualizations. It is platform-agnostic and assumes the use of flat data files, but you can use the built-in PHP framework to connect to a database if that is preferable for the project.

This starter kit includes a Vagrantfile for a basic LAMP stack, which is close enough to the `pocweb` server to be adequate for development purposes. It also includes Gulp for task management to streamline your development and build processes.

## Get Started

** For your project, replace or augment these instructions as needed **

1. Install software as needed for your OS:
  * [Node.js](https://nodejs.org/download/)
  * [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
  * [Vagrant](http://www.vagrantup.com/downloads)

2. Open up the terminal or command prompt and type:
  * `cd path/to/folder` where you want to store this project
  * `git clone https://github.com/pocdata/project-template.git my-project`
  * `cd my-project/public/assets`
  * `npm install`
  * `cd ../../`
  * `vagrant up`

3. If everything went smoothly, you should now be able to visit the home page for the starter project at http://192.168.33.10/. If you got error messages along the way, please consult the Node, VirtualBox or Vagrant documentation depending on what threw the error.

4. To start writing JavaScript/CSS, `cd` into the `public/assets` directory and type `gulp watch`. Gulp will listen for changes (saves) on your Sass and Jacascript files and bundle the changes into minified files for production.

5. When you are done working, type `vagrant destroy` at the project root and remember to commit your changes!

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