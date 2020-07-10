<?php 
		
		global $coffee;

 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $coffee['favicon']['url']; ?>">


<style>
	.head-main a img{
		width: <?php echo $coffee['logowidth'] ;?>;
	}
	.header ul li a{
		color: <?php echo $coffee['menu_color'] ?> !important; 
		font-size: <?php echo $coffee['menuFontSize'] ?>;
	}
	div.footer-text p{
		color: <?php echo $coffee['copyrightTextColor'] ?>;
		font-size: <?php echo $coffee['copyrightTextSize'] ?>;
	}
	.footer{
		background-color: <?php echo $coffee['footerBgColor'] ?>;
	}

</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="<?php  echo site_url(); ?>">
					<img src="<?php echo $coffee['ulogo']['url']; ?>" alt="" />
				</a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<?php 
						wp_nav_menu(array(
							'theme_locattion' 	=> 'primary',
							'container'		=> '', 
							'menu_class'	=> 'navig'

						));
						
					 ?>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<form action="">
						<input type="text" name="s" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
					</form>

				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h1>Suspendisse potenti</h1>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->