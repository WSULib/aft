<?php head(array('title' => item('Dublin Core', 'Title'))); ?>
<div id="primary" class="show">

	<h1 class="item-title"><?php echo item('Dublin Core', 'Title'); ?></h1>
	<p><h2 class="maininfo"><?php echo item('Dublin Core', 'Creator'); ?> (<?php echo item('Dublin Core', 'Date');?>)</h2></p>
<div id="download"><?php while(loop_files_for_item()): ?>
	<?php 
	$item_file_id=item_file('id');
	if (item_file('MIME Type') == 'image/jpeg') echo
	"";
	else echo
	"<h4 class=\"file\"><a href=\"/aft/files/download/$item_file_id/fullsize\">Download PDF</a></h4>"; ?>
<?php endwhile; ?>
</div> <!-- end download -->

<?php if (item_has_tags()): ?>
        <p class="tags" class="element">
                <b>Tags:</b>
<?php echo item_tags_as_string(); ?>       
        </p> <!-- tags div end -->
        <?php endif;?>
    
    <!-- Google Docs Viewer -->
	<?php
		if (class_exists('DocsViewerPlugin')):
   			$docsViewer = new DocsViewerPlugin;
   			$docsViewer->embed();
		endif;
	?>
	<!-- end Google Docs Viewer -->

	<!--  The following function prints all the the metadata associated with an item: Dublin Core, extra element sets, etc. See http://omeka.org/codex or the examples on items/browse for information on how to print only select metadata fields. -->
<h2>Item Metadata (#<?php echo item('Dublin Core', 'Identifier'); ?>)</h2>
<div id="meta">
<br />
<br />
<p id="item-identifier"><b>ID:</b> <?php echo item('Dublin Core', 'Identifier'); ?></p>
<p id="item-title"><b>Title:</b> <?php echo item ('Dublin Core', 'Title'); ?> </p> 
<p id="item-creator"><b>Creator:</b> <?php echo item('Dublin Core', 'Creator'); ?></p>
<p id="item-date"><b>Date:</b> <?php echo item('Dublin Core', 'Date'); ?></p>
<p id="item-description"><b>Description:</b> <?php echo item('Dublin Core', 'Description'); ?></p>
<p id="item-subject"><b>Subjects:</b> <?php echo item('Dublin Core', 'Subject'); ?></p>
<p id="item-coverage"><b>Location:</b>  <?php echo item('Dublin Core', 'Coverage'); ?></p>
<p id="item-format"><b>Original Format:</b> <?php echo item('Item Type Metadata', 'Original Format'); ?></p>
<p id="item-source"><b>Source:</b> <?php echo item('Dublin Core', 'Source'); ?></p>
<p id="item-publisher"><b>Publisher:</b> <?php echo item('Dublin Core', 'Publisher'); ?></p>
 <!-- The following prints a list of all tags associated with the item -->
        <?php if (item_has_tags()): ?>
       <p class="tags" class="element"><b>Tags:</b>
            <?php echo item_tags_as_string(); ?>       
        </p> <!-- tags div end -->
        <?php endif;?>

<h2><a href="#fulltext" id="show">View Document as HTML</a></h2>
<div id="fulltext">
<h2><a href="#fulltext" id="hide">Hide Document</a></h2>
<p id="item-text"><?php echo item('Item Type Metadata', 'Text'); ?></p>
<h2><a href="#fulltext" id="hide">Hide Document</a></h2>
</div> <!-- fulltext div end -->

	</div> <!-- meta div end -->


	<!-- The following prints a citation for this item. -->
	<div id="citation" class="element">
    	<h2>Citation</h2>
    	<div id="citation-text" class="element-text"><?php echo item_citation(); ?></div>
	</div> <!-- citation -->
	<!--</div>-->
	
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
