<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<!--=== Start Wrapper ===-->
	<div id="hcps-only" class="wrapper" style="<?php echo isHCP() ? '' : 'filter: blur(10px);' ?>">

	<!--=== Start Navbar Area ===-->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand p-0" href="/">
				<img class="d-md-none " src="<?php echo img_dir (); ?>/logo-2.png" alt="logo-2">
				<img class="d-none d-md-block" src="<?php echo img_dir (); ?>/logo.png" alt="logo">
			</a>
			<button id="burger" class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<img src="<?php echo svg_path("burger.svg") ?>" alt="toggle menu"/>
				</span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto">
					<!-- Disabled <?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?> -->

					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="fultium">Fultium</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/accrete">Accrete</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/binosto">Binosto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/movymia">Movymia</a>
					</li> 
					<li class="dropdown nav-item">
						<a class="nav-link d-flex align-items-center dropdown-toggle no-after" href="#" role="button"
							id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
							<span>Resources</span>
							<img src="<?php echo img_dir (); ?>/polygon.png" class="ms-3 chevron-down" alt="polygon">
						</a>

						<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
							<li><a class="dropdown-item" href="#">Bone Health Algorithm</a></li>
							<li><a class="dropdown-item border-0" href="#">Webinar Platform</a></li> 
						</ul>
					</li>
				</ul>

				<div class="others-option d-none d-xl-block" role="search">
					<img src="<?php echo img_dir (); ?>/logo-2.png" alt="logo-2">
				</div>
			</div>
		</div>
	</nav>
	<!--=== End Navbar Area ===-->
