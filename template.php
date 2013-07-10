<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		Theme by Free CSS Templates for GetSimple adapted by Arnav Gupta
*
*****************************************************/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : PavementCafe renamed to PebblestoneCafe
Description: A two-column, responsive theme
Version    : 3.1
Released   : 20130711

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php get_header(); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php get_theme_url(); ?>/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<script src="<?php get_theme_url(); ?>/js/jquery-1.3.2.min.js"></script>
</head>
<body>
<div id="wrapper" class="container">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<?php get_nested_navigation(return_page_slug()); ?>
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
		<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
		<p><?php get_component('tagline'); ?></p>
	</div>
	<div class="divider">&nbsp;</div>
	<div id="page" class="container">
		<div id="content">
			<div class="post">
				<h2 class="title"><?php get_page_title(); ?></h2>
				<div class="entry">
					<?php get_page_content(); ?>
				</div>
				<div id="external_comments">
				<?php get_external_comments(); ?>
				</div>

			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<div>
				<?php get_component('sidebar');	?>
			</div>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
	<div class="divider">&nbsp;</div>
<script>
function sidebar_noscroll() {
  var window_top = $(window).scrollTop();
  var div_top = $('#page').offset().top;
  if ((window_top + 30) > div_top) {
    $('#sidebar').addClass('noscroll');
  } else {
    $('#sidebar').removeClass('noscroll');
  }
}

$(function() {
  $(window).scroll(sidebar_noscroll);
  sidebar_noscroll();
});
</script>

<div id="footer">
	<p>Copyright &copy; <?php echo date('Y'); ?> <?php get_site_name(); ?>.
	<br> Powered by PebblestoneCafe for GetSimple by Arnav Gupta</p>
</div>
</div>
<!-- end #footer -->
<?php get_footer(); ?>
</body>
</html>
