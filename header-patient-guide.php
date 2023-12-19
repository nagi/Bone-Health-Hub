<?php
global $bone_health_product;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo $bone_health_product ?>-patient-page">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicon-16x16.png">
	<?php
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--=== Start Wrapper ===-->
<div id="hcps-only" class="wrapper" style="<?php echo isHCP() ? '' : 'filter: blur(10px);' ?>">

    <!--=== Start Navbar Area ===-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand c-navbar-brand p-0" href="/">
                <img class="d-md-none " src="<?php echo img_dir(); ?>/h-<?php echo $bone_health_product?>-logo.png" alt="logo-2">
                <img class="d-none d-md-block" src="<?php echo img_dir(); ?>/h-<?php echo $bone_health_product?>-logo.png" alt="logo">
            </a>
            <button id="burger" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<img src="<?php echo svg_path( "burger.svg" ) ?>" alt="toggle menu"/>
				</span>
            </button>

            <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- Disabled <?php wp_nav_menu( array(
						'theme_location' => 'menu-main',
						'menu_id'        => 'menu-main'
					) ); ?> -->

                    <li class="nav-item">
                        <a class="nav-link patient-guide-link" href="<?php echo docs_dir (); ?><?php echo ucfirst($bone_health_product) ?>-Patient-Download-Guide.pdf" target="_blank">
                            Patient guide download
                        </a>
                    </li>

                    <li class="dropdown nav-item">
                        <a class="nav-link d-flex align-items-center dropdown-toggle no-after" href="#" role="button"
                           id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Useful links</span>
                            <svg class="ms-3 chevron-down c-chevron-down" xmlns="http://www.w3.org/2000/svg"
                                 width="19.332" height="33.141" viewBox="0 0 19.332 33.141">
                                <path id="Path_435" data-name="Path 435" d="M-853,5251.3l14.537-15.712L-824.1,5251.3"
                                      transform="translate(5253.417 855.12) rotate(90)" fill="none" stroke="#000"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                            </svg>
                        </a>

                        <ul class="resources dropdown-menu c-dropdown-menu dropdown-menu-end"
                            aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item outbound" href="https://theros.org.uk/" target="_blank">Royal
                                    Osteoporosis Society</a></li>
                            <li><a class="dropdown-item border-0"
                                   href="https://www.stadahcp.co.uk/webinars?topic=Bone%20Health" target="_blank">NHS
                                    Osteoporosis Information</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Healthcare Professionals</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=== End Navbar Area ===-->
