<?php
/**
 * The front-page.php template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package svgtheme
 */

get_header(); ?>

<?php get_template_part('components/navigation'); ?>

<h1>Dashboard</h1>

<div class="cards">
	<div class="card">
		<div class="graph-container">
			<?php

			 /*
			 * Get full SVG file instead of <use>
			 */

				echo file_get_contents(
					get_template_directory() . '/assets/dist/svg/icon-graph.svg'
				);

			?>
			<div class="graph-roses">
				75%<br>
				<span>Mobile</span>
			</div>
			<div class="graph-poppies">
				25%<br>
				<span>Desktop</span>
			</div>
		</div>
		<h2 class="text-center">Device Breakdown</h2>
	</div>
	<div class="card">
		<div class="graph-container">
			<?php

			 /*
			 * Get full SVG file instead of <use>
			 */

				echo file_get_contents(
					get_template_directory() . '/assets/dist/svg/icon-graph.svg'
				);

			?>
			<div class="graph-roses">
				75%<br>
				<span>Roses</span>
			</div>
			<div class="graph-poppies">
				25%<br>
				<span>Poppies</span>
			</div>
		</div>
		<h2 class="text-center">Total Sales</h2>
	</div>
</div>


<?php get_footer(); ?>
