<?php get_header(); 
/*
	Template name: Queer index template
*/
?>

<div id="Table_01">
	<div id="Slice-01 ABOUT" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Slice_01.png');">
		2
	</div>
	<div id="Slice-02">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_02.png" width="404" height="113" alt="" />
	</div>
	<div id="Slice-03 WORK" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Slice_03.png');">
		3
	</div>
	<div id="Slice-04">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_04.png" width="321" height="113" alt="" />
	</div>
	<div id="Slice-05 HOME" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Slice_05.png');">
		1
	</div>
	<div id="Slice-06 NEWS" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Slice_06.png');">
		4
	</div>
	<div id="Slice-07">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_07.png" width="36" height="132" alt="" />
	</div>
	<div id="Slice-08">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_08.png" width="460" height="139" alt="" />
	</div>
	<div id="Slice-09">
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		~~~
	</div>
	<div id="Slice-10">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_10.png" width="112" height="139" alt="" />
	</div>
	<div id="Slice-11">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_11.png" width="35" height="379" alt="" />
	</div>
	<div id="Slice-12">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_12.png" width="207" height="240" alt="" />
	</div>
	<div id="Slice-13 LINKS" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Slice_13.png');">
		5
	</div>

	<div id="Slice-14 entry content post">
	<?php 
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>

        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
        <p><?php the_content(); ?></p>

        <?php endwhile;
    endif;     
    ?>

	</div>
	<div id="Slice-15 STALK" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/Slice_15.png');">
		6
	</div>
	<div id="Slice-16">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_16.png" width="254" height="155" alt="" />
	</div>
	<div id="Slice-17">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_17.png" width="1" height="1" alt="" />
	</div>
	<div id="Slice-18">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_18.png" width="110" height="155" alt="" />
	</div>
	<div id="Slice-19">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_19.png" width="1" height="1" alt="" />
	</div>
	<div id="Slice-20">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_20.png" width="1" height="154" alt="" />
	</div>
	<div id="Slice-21">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Slice_21.png" width="1" height="154" alt="" />
	</div>
</div>
<!-- End ImageReady Slices -->

<br />
<?php get_footer(); ?>