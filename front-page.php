<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package svgtheme
 */

 get_header(); ?>

 <h1 class="text-center" style="margin-top: 2em; margin-bottom: 1em;">
   Let's demo some SVGs!
 </h1>
 <div class="text-center">
   <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/meme.jpg">
 </div>
 <?php // Social Media via <use> ?>
























 <!-- <ul class="social-list">
   <li>
     <svg class="icon icon-social">
       <use xlink:href="#facebook"></use>
     </svg>
   </li>
   <li>
     <svg class="icon icon-social">
       <use xlink:href="#twitter"></use>
     </svg>
   </li>
   <li>
     <svg class="icon icon-social">
       <use xlink:href="#instagram"></use>
     </svg>
   </li>
 </ul> -->




 <!-- <svg class="icon icon-social">
   <use xlink:href="#facebook"></use>
 </svg>

 <svg class="icon icon-social">
   <use xlink:href="#twitter"></use>
 </svg>

 <svg class="icon icon-social">
   <use xlink:href="#instagram"></use>
 </svg> -->


 <?php

 // Flower Icon
 // echo file_get_contents( get_template_directory() .
 // '/assets/dist/svg/icon-flower.svg' );


 // Graph Icon
 // echo file_get_contents( get_template_directory() .
 // '/assets/dist/svg/icon-graph.svg' );


 ?>









 <?php get_footer(); ?>
