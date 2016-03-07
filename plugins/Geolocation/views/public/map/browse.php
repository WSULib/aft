<?php head(); ?>
<?php echo js('default'); ?>
<?php geolocation_scripts(); ?>

<div id="primary">

<style type="text/css" media="screen">
#map_browse { width: 600px; height: 500px; margin-bottom: 30px;}
#map-links li {overflow:hidden; border-bottom:1px dotted #ccc;}
#map-links li a {float:right; width:50%; text-decoration:none; }
</style>

<h1>Browse Items on the Map (<?php echo $totalItems; ?> items total)</h1>


<div class="pagination">
    <?php echo pagination_links(); ?>
</div><!-- end pagination -->

<div id="map_block">
    <?php echo geolocation_google_map('map_browse', array('loadKml'=>true, 'list'=>'map-links'));?>
</div><!-- end map_block -->


<div id="link_block">
    <h2>Find An Item on the Map</h2> 
    <div id="map-links"></div> 
</div> <!-- end link_block -->

<div id="search_block">
            <?php echo items_search_form(array('id'=>'search'), $_SERVER['REQUEST_URI']); ?>
        </div><!-- end search_block -->


</div><!-- end primary -->

<?php foot(); ?>
