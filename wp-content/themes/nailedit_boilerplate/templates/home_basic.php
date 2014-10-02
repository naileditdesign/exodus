<?php /* Template Name: Home - Basic */ ?>
<?php get_header(); ?>

<div class="row">
	
<div class="content large-12 columns">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
     <?php if( have_rows('home_basic') ): ?>

		<div class="home_basic">

			<div class="slider adaptive">
 
			<?php while( have_rows('home_basic') ): the_row(); 
		 
				// vars
				$image = get_sub_field('image');
				$title = get_sub_field('title');
				$description = get_sub_field('description');
				$link = get_sub_field('link');
				?>
		 
				<div>
				<div class="captions">
				<h2><?php echo $title; ?></h2>
				<p><?php echo $description; ?></p>
				</div>
					

				<?php if( $image ): ?>
				<div class="image">
				<img src="<?php echo $image; ?>" />
				</div>
				
				<?php else : ?>
				<div class="image">
				<img src="http://placehold.it/1800x500/000000" />
			    </div>
			    <?php endif ?>
				</div>
		 
			<?php endwhile; ?>
 
 			</div>

		</div>
	
	<?php endif; ?>	
    
    </div>
	
  <?php endwhile; endif; ?>

</div>

</div>


<?php get_footer(); ?>