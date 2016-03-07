<?php head(array('title'=>'Browse Items')); ?>

	<div id="primary" class="browse">
	    
		<h1>Browse Items (<?php echo total_results(); ?> total)</h1>
		
		<ul class="navigation" id="secondary-nav">
			<?php echo nav(array('Browse All' => uri('items'), 'Browse by Tag' => uri('items/tags'))); ?>
		</ul>
		
		<div class="pagination top"><?php echo pagination_links(); ?></div>
	<!-- sort results plugin -->

<?php $sortBy = new SortBy; // requires Sort Browse Results Plugin ?>
<ul class="sort-options">
    <li>Sort By</li>
    <li class="title <?php echo $sortBy->get_cssclass("title"); ?>"><a href="<?php echo $sortBy->get_link('dc.title'); ?>" title="Sort by title">Title</a></li>
  <!--  <li class="type <?php echo $sortBy->get_cssclass("type"); ?>"><a href="<?php echo $sortBy->get_link('type'); ?>" title="Sort by type">Type</a></li> -->
    <li class="date <?php echo $sortBy->get_cssclass("date"); ?>"><a href="<?php echo $sortBy->get_link('dc.date'); ?>" title="Sort by date">Date</a></li>
</ul>

<!-- end sort results plugin -->


	
		<?php while (loop_items()): ?>
			<div class="item hentry">
				<div class="item-meta">
				    
				<h3><?php echo link_to_item(item('Dublin Core', 'Title'), array('class'=>'permalink')); ?></h3>

				<?php if (item_has_thumbnail()): ?>
    				<div class="item-img">
    				<?php echo link_to_item(item_square_thumbnail()); ?>						
    				</div>
				<?php endif; ?>

	    		<!--	<div class="item-description">
    				<p><?php echo $text; ?></p>
    				</div> -->
				<?php if ($description = item('Dublin Core', 'Description', array('snippet'=>250))): ?>
    				<div class="item-description">
    				<?php echo $description; ?><br /> <br />
    				 Date: <?php echo item('Dublin Core', 'Date'); ?>

				</div>
				<?php endif; ?>

				<?php if (item_has_tags()): ?>
    				<div class="tags"><p><strong>Tags:</strong>
    				<?php echo item_tags_as_string(); ?></p>
    				</div>
				<?php endif; ?>
				
                <?php echo plugin_append_to_items_browse_each(); ?>
                
				</div><!-- end class="item-meta" -->
			</div><!-- end class="item hentry" -->			
		<?php endwhile; ?>
		
		<div class="pagination bottom"><?php echo pagination_links(); ?></div>
		
		<?php echo plugin_append_to_items_browse(); ?>
		
	</div><!-- end primary -->
	
<?php foot(); ?>
