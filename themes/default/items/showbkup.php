<?php head(array('title' => item('Dublin Core', 'Title'))); ?>

<div id="primary" class="show">

	<h1 class="item-title"><?php echo item('Dublin Core', 'Title'); ?></h1>
	
    
	<div id="doc">
    <!-- Google Docs Viewer -->
	<?php
		if (class_exists('DocsViewerPlugin')):
   			$docsViewer = new DocsViewerPlugin;
   			$docsViewer->embed();
		endif;
	?>
	<!-- end Google Docs Viewer -->
	</div>

	<!--  The following function prints all the the metadata associated with an item: Dublin Core, extra element sets, etc. See http://omeka.org/codex or the examples on items/browse for information on how to print only select metadata fields. -->
<h3>Creator</h3>
<p id="item-creator"><?php echo item('Dublin Core', 'Creator'); ?></p>
<h3>Date</h3>
<p id="item-date"><?php echo item('Dublin Core', 'Date'); ?></p>
<h3>Description</h3>
<p id="item-description"> <?php echo item('Dublin Core', 'Description'); ?></p>
<h3>Subjects</h3>
<p id="item-subject"><?php echo item('Dublin Core', 'Subject'); ?></p>
<h3>Source</h3>
<p id="item-source"><?php echo item('Dublin Core', 'Source'); ?></p>
<h3>Publisher</h3>
<p id="item-publisher"><?php echo item('Dublin Core', 'Publisher'); ?></p>
    <!-- The following returns all of the files associated with an item. -->

	<div id="itemfiles" class="element">
	            <h3>Files</h3>
                <div class="element-text"><?php echo display_files_for_item(); ?></div>

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
