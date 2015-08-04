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
    	<!-- Title row -->
	    <div id="data-title">
			<h1><?php echo $meta["title"]; ?></h1>

			<!-- Print the subtitle if we have it -->
			<?php
			 if($meta["subtitle"]): ?>
			 	<h4><?php echo $meta["subtitle"]; ?></h4>
			<?php endif;?>
		</div>

		<!-- Container for graph content. Replace with tabs if needed. See http://materializecss.com/tabs.html
		     for details about how to set up tabs -->
		<div id="graph">
			<?php echo $content; ?>
			<p>This is the config output. You can use it to initialize your app: </p>
			<p><?php print_r($config); ?></p>
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