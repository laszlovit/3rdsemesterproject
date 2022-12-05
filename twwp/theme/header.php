<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package twwp
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<nav class=" bg-transparent">
    <div class="container px-6 py-3 mx-auto  ">
        <div class="md:flex justify-between items-center">
            <!-- left section -->
            <div class="flex justify-between items-center">
                <a href="/" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Design Forge</a>
                <div class="md:hidden">
                    <button id="nav-button" type="button" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>  
                    </button>
                </div>
            </div>
            <!-- right section -->
            <div id="nav-menu" class="flex flex-col mt-3 hidden md:flex-row md:mt-0 md:block">
                <a href="#about" class="text-gray-800 text-sm hover:font-medium md:mx-4">About</a>
                <a href="#features" class="text-gray-800 text-sm hover:font-medium md:mx-4">Features</a>
                <a href="#plans" class="text-gray-800 text-sm hover:font-medium md:mx-4">Plans</a>
                <a href="#recent" class="text-gray-800 text-sm hover:font-medium md:mx-4">Recent work</a>
                <a href="#contact" class="text-gray-800 text-sm hover:font-medium md:mx-4">Contact</a>
                
            </div>
        </div>
    </div>
</nav>

<script>
let button = document.getElementById('nav-button');
let menu = document.getElementById('nav-menu');

button.addEventListener('click', () => {
    menu.classList.toggle("hidden");
});

</script>