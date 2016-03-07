<?php head(array('bodyid'=>'home')); ?>

<div id="primary">
    <!-- Collection Description -->
    <div id="collection_description">
    <p>When <a href="http://www2.ed.gov/pubs/NatAtRisk/index.html" title="A Nation At Risk Report" target="_blank"><em>A Nation At Risk</em></a> report was released in 1983, the <a href="http://www.aft.org/" title="American Federation of Teachers" target="_blank">American Federation of Teachers</a> (AFT) embraced the thrust of the report that said that the United States education system needed to be fixed and saved, not destroyed.  Almost immediately the AFT became the leader in developing new education reform initiatives throughout the country.</p>
<p>
This website, a joint project between the Walter P. Reuther library and the Wayne State University Library, will host primary resources from the AFT historical collections that will document various education reform initiatives that union and school boards have collaborated on, from pre-<em>Nation at Risk</em> to the present.  This will be a continually growing project with the intentions to assist in the debate of US education reform.
</p>

    </div>
    
    <!-- Featured Item -->
	<div id="featured-item">
		<?php echo display_random_featured_item(); ?>
	<p><a href="items" title="View All Items">View All Items</a></p>
	</div><!--end featured-item-->
	
	<!-- Featured Collection 
	<div id="featured-collection">
	    <?php // echo display_random_featured_collection(); ?>
	</div> end featured collection -->
	
	<!-- Recent Items -->		
	<div id="recent-items">
    	<h2>Recently Added Items</h2>
	
    		<?php set_items_for_loop(recent_items(3)); ?>
    		<?php if (has_items_for_loop()): ?>
		    
    		<ul class="items-list">
    			<?php while (loop_items()): ?>
			   
    			<li class="item">
    				<h3><?php echo link_to_item(); ?></h3>
				
        			<?php // if($desc = item('Dublin Core', 'Description', array('snippet'=>150))): ?>
        				<!--<div class="item-description"><?php // echo $desc; ?></div>-->
        			<?php // endif; ?>						
    			</li>
			
    			<?php endwhile; ?>
    		</ul>
		
    		<?php else: ?>
    			<p>No recent items available.</p>
			
    		<?php endif; ?>
		
    		
	
	</div><!-- end recent-items -->
	
   
    	
	<!-- <div id="recent-collections">
	    <h2>Recent Collections</h2>
	    
	    <?php // if (has_collections()): ?>
	    <?php //  set_collections_for_loop(recent_collections(2)); ?>
	        
	    <ul class="collections-list">
	        <?php // while (loop_collections()): ?>
	            
                <li class="collection">
                    <h3><?php // echo link_to_collection(); ?></h3>
                    <p class="collection-description"><?php // echo collection('Description', array('snippet'=>150)); ?></p>
                </li>
	                    
	        <?php // endwhile; ?>
	    </ul>
	    
	    <?php // else: ?>
			<p>No recent collections available.</p>	
				        
	    <?php // endif; ?>
	</div> end recent-collections -->
		
</div><!-- end primary -->

<?php foot(); ?>
