<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="<?php echo html_escape(css('screen')); ?>" />
<link rel="stylesheet" media="print" href="<?php echo html_escape(css('print')); ?>" />

<!-- JavaScripts -->
<!-- Older versions of jQuery and UI commented out 
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</script>
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
-->

<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>


<?php // breaks jQuery UI, commented out -- loaded in map browse 
// echo js('default'); ?>

<script type="text/javascript">
  $(document).ready(function(){

        $('#fulltext').hide();

          $('a#show').click(function(){
             $('#fulltext').show('fold', {}, 'fast');
   });

   $('a#hide').click(function(){
                $('#fulltext').hide('fold', {}, 'fast');
                });

          });
</script>


<!-- Plugin Stuff -->
<?php echo plugin_header(); ?>

</head>
<body<?php echo $bodyid ? ' id="'.$bodyid.'"' : ''; ?><?php echo $bodyclass ? ' class="'.$bodyclass.'"' : ''; ?>>
	<div id="wrap">

		<div id="header">
		<div id="site-title"><a href="http://dlxs.lib.wayne.edu/aft" >American Federation of Teachers</a></div>
        <div id="site-byline">Antecedents to Education Reform Historical Collection</div>
		</div>
		
		<div id="content">
		    
			<div id="primary-nav">
				<div id="search-wrap">
				    <h2>Search</h2>
				    <?php echo simple_search(); ?>
				    <?php echo link_to_advanced_search(); ?>
    			</div>
    			
    			<ul class="navigation">
    			    <?php echo public_nav_main(array('Browse Items' => uri('items'), 'Browse Subjects'=>uri('subjects'), 
//'Browse Map'=>uri('geolocation/map/browse'), 
'About' => uri('about'), 'Rights' => uri('rights') )); ?>
    			</ul>


			</div>
