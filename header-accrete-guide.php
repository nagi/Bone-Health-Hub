<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php get_template_directory_uri() ?>/site.webmanifest">
	<?php
	wp_head();
	global $bone_health_job_number;
	$bone_health_job_number = "UK-MULT-130(1)";
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
                <img class="d-md-none " src="<?php echo img_dir(); ?>/h-accrete-logo.png" alt="logo-2">
                <img class="d-none d-md-block" src="<?php echo img_dir(); ?>/h-accrete-logo.png" alt="logo">
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
                        <a class="nav-link" href="http://bone-health-dev.nagisystems.com/accrete-treatment-guide/">Patient guide download</a>
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
                            <li><a class="dropdown-item" href="https://bonehealth.rxdetail.io/" target="_blank">Royal
                                    Osteoporosis Society</a></li>
                            <li><a class="dropdown-item border-0"
                                   href="https://www.stadahcp.co.uk/webinars?topic=Bone%20Health" target="_blank">NHS
                                    Osteoporosis Information</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://bone-health-dev.nagisystems.com/fultium-treatment-guide/">Healthcare Professionals</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=== End Navbar Area ===-->


    <div class="c-popup-section" id="c-popup-section-1">
        <div class="c-popup-overlay"></div>
        <div class="c-popup-wrapper">
            <div class="c-popup-content">
                <div class="c-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                    </svg>
                </div>
                <div class="p-logo">
                    <img src="<?php echo img_dir(); ?>/h-accrete-logo.png" alt="logo">
                </div>
                <div class="item">
                    <div class="text">
                        <p>
                            The information on our patient website is solely intended for UK patients prescribed this
                            medicine
                            by a UK Healthcare Professional.
                        </p>
                    </div>
                    <div class="read-more">
                        <a href="#">I confirm I am a UK patient</a>
                    </div>
                </div>
                <div class="item">
                    <div class="text">
                        <p>
                            Information for Healthcare Professionals is found on our dedicated Healthcare Professional
                            site which is solely intended for UK Healthcare Professionals and contains promotional
                            information.
                        </p>
                    </div>
                    <div class="read-more">
                        <a href="#">I confirm I am a UK Healthcare Professional</a>
                    </div>
                </div>
                <div class="info">
                    <p>All other visitors: Please view the Summary of Product Characteristics</p>
                    <p>UK-BINO-37a | Date of Preparation December 2023</p>
                </div>
            </div>
        </div>
    </div>

    <div class="c-popup-section" id="c-popup-section-2">
        <div class="c-popup-overlay"></div>
        <div class="c-popup-wrapper">
            <div class="c-popup-content">
                <div class="c-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                    </svg>
                </div>
                <div class="content-2">
                    <h4>You Are Now Leaving This Website</h4>
                    <p>
                        The website you are going to is maintained by a third party over whom Thornton & Ross Limited
                        has no control or responsibility. We have provided this link as an appropriate resource to our
                        visitors but Thornton & Ross Limited is not responsible for the content or information on this
                        site.
                    </p>
                    <div class="read-more">
                        <a href="#">
                            Continue to site
                            <svg xmlns="http://www.w3.org/2000/svg" width="103.633" height="32.2"
                                 viewBox="0 0 103.633 32.2">
                                <g id="Group_705" data-name="Group 705" transform="translate(-10799.698 -4740.176)">
                                    <line id="Line_11" data-name="Line 11" x2="94.132"
                                          transform="translate(10801.698 4756.277)" fill="none" stroke="#fff"
                                          stroke-linecap="round" stroke-width="4"/>
                                    <path id="Path_436" data-name="Path 436" d="M0,0,13.175,15,26.554,0"
                                          transform="translate(10886.331 4769.554) rotate(-90)" fill="none"
                                          stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="4"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>