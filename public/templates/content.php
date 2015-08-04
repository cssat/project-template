<?php

include_once('header.php');

?>

<main class="main">
    <!-- Filters go in the sidebar to the left of the visualization -->
    <div id="filters-slideout" class="side-nav fixed">
      <div>
        <a href="" class="filters-header"><i class="fa fa-filter"></i> Filters</a>
      </div>
      <div class="row filter-buttons">
          <span id="update" alt="Update" class="waves-effect waves-light btn red">Update</span>
          <span id="reset" alt="Reset Defaults" class="waves-effect waves-light btn red lighten-2">Reset</span>     
      </div>
      <ul id="filters" class="collapsible" data-collapsible="accordion"></ul>
      <a id="#js-filter-help" data-target="filter-help" class="modal-trigger">Filter Definitions</a>
    </div>

    <!-- Visualization content goes in the main content area to the right. You will generally
         want to use tabs unless there is no text content at all. -->
    <div id="visualization-content">
	    <div id="data-title">
			<h1>Hello, World</h1>
		</div>
		<div id="graph">
			<p>Start setting up your project!</p>
			<p>Content and metadata are available on this page using the $content, $meta and $config
			   variables. $Meta includes basic page information and $config includes an array of 
			   options particular to this visualization.</p>
	   </div>
	</div>

     <!-- Modal content -->
      <div id="share" class="modal">
        <div class="modal-content">
          <h4>Share Your Findings</h4>
          <ul>              
            <li><a href="" id="email" target="_blank">Email</a></li>
            <li><a href="" id="twitter" target="_blank">Twitter</a></li>
            <li><a href="" id="facebook" target="_blank">Facebook</a></li>       
          </ul>     
       </div>
      </div>
      <div id="filter-help" class="modal">
        <div class="modal-content">
          <h4>What do these filters mean?</h4>
          <dl></dl>
        </div>
      </div>
</main>

<?php include_once('footer.php'); ?>