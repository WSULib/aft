<?php head(array('title' => item('Dublin Core', 'Title'))); ?>

<div id="primary" class="show">

	<h1 class="item-title"><?php echo item('Dublin Core', 'Title'); ?></h1>
	
    <!-- Google Docs Viewer / Image Viewer -->
	<?php
		if (class_exists('DocsViewerPlugin')):
   			$docsViewer = new DocsViewerPlugin;
   			$docsViewer->embed();
	
		endif;
	?>
	<!-- end Google Docs Viewer -->

	<!-- Item Files + Metadata -->
    
    	<div id="show-item-meta">
        
       <!--  The following function prints all the the metadata associated with an item: Dublin Core, extra element sets, etc. See http://omeka.org/codex or the examples on items/browse for information on how to print only select metadata fields. -->
	<?php  echo show_item_metadata(); ?>	
    
			<div class="element-set">

				<?php if ($description = item('Dublin Core', 'Description')): ?>
    				<div class="item-description">
                    <h3>Description</h3>
    				<?php echo $description; ?>
    				</div>
				<?php endif; ?>
                
                <?php if ($creator = item('Dublin Core', 'Creator', array('snippet'=>250))): ?>
	    			<div class="item-description">
                    <h3>Creator</h3>
    				<p><?php echo $creator; ?></p>
    				</div>
				<?php endif; ?>
                
                 <?php if ($source = item('Dublin Core', 'Source', array('snippet'=>250))): ?>
	    			<div class="item-description">
                    <h3>Source</h3>
    				<p><?php echo $source; ?></p>
    				</div>
				<?php endif; ?>
                
                <?php if (item_has_publisher()) {
					$source = item('Dublin Core', 'Publisher', array('snippet'=>250)); ?>
	    			<div class="item-description">
    				<p><?php echo "<h3>Publisher</h3>";					
							 echo $publisher; }
					  else { echo "";} 
					?></p>
    				</div>
				<?php endif; ?>
                
                
				<?php if (item_has_tags()): ?>
    				<div class="tags"><p><strong>Tags:</strong>
    				<?php echo item_tags_as_string(); ?></p>
    				</div>
				<?php endif; ?>
        	</div> <!-- item-meta -->
    	</div><!-- show-item-meta -->
    
    <!-- end Item Files + Metadata -->


	

    <!-- The following returns all of the files associated with an item. -->
	<div id="itemfiles" class="element">
	    <h3>Files</h3>
		<div class="element-text"><?php //echo display_files_for_item(); ?></div>
	</div>
	
	<!-- If the item belongs to a collection, the following creates a link to that collection. -->
	<?php if ( item_belongs_to_collection() ): ?>
        <div id="collection" class="element">
            <h2>Collection</h2>
            <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
        </div>
    <?php endif; ?>

    <!-- The following prints a list of all tags associated with the item -->
	<?php if (item_has_tags()): ?>
	<div class="tags" class="element">
		<h3>Tags:</h3>
	    <div class="element-text"><?php echo item_tags_as_string(); ?></div>	
	</div>
	<?php endif;?>
	
	<!-- The following prints a citation for this item. -->
	<div id="citation" class="element">
    	<h2>Citation</h2>
    	<div id="citation-text" class="element-text"><?php echo item_citation(); ?></div>
	</div>
	
	<ul class="item-pagination navigation">
	<li id="previous-item" class="previous">
		<?php echo link_to_previous_item('Previous Item'); ?>
	</li>
	<li id="next-item" class="next">
		<?php echo link_to_next_item('Next Item'); ?>
	</li>
	</ul>
	
	<?php echo plugin_append_to_items_show(); ?>
</div><!-- end primary -->

<?php foot(); ?>
