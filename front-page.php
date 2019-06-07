<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="owl-carousel owl-theme banner">
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" alt="">
          <div class="container">
            <div class="caption">
              <div class="container">
              <p>Exclusive Offer - 10% Off This Week</p>
              <h1>Engagement Ring</h1>
              <p>Starting at $2.199.00</p>
              <p><a href="#" class="btn">Explore the collection</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section>
				<div class="container">
					<div class="produts-heading">
					<?php 
			    	$args = array('child_of' => 9);
						$categories = get_categories( $args );
						foreach($categories as $category) { 
						?>
		    		<li class="catlink"><a href="javascript:void(0)"  id="<?php echo $category->name ?>"><?php echo $category->name ?></a></li>
		    			<?php }?>
					</div>

					<div class="product-row" >
						<?php $pestBlogs = new WP_Query('post_type=product&posts_per_page=-1&orderby=date&order=ASC'); ?>
						<?php if ($pestBlogs->have_posts() ) : while ($pestBlogs->have_posts() ) : $pestBlogs->the_post(); ?>
							<?php 
						      $categories = get_the_category();
						      $outputCatName = '';
						      if($categories){
						        foreach ($categories as $category){
						          $outputCatName .= $category->cat_name;
						        }
						      }
						    ?>
						<div class="product-col blogarticlecol" id="<?php echo $outputCatName ?>">
							<img src="<?php the_post_thumbnail_url() ?>" alt="jwellery">
							<div class="product-info">
								<span><?php the_field('women'); ?></span>
								<h4><?php the_field('products_title'); ?></h4>
								<p>
									<span class="old-price"><del><?php the_field('old_price'); ?>&nbsp;&nbsp;</del></span>
									<span class="new-price"><?php the_field('new_price'); ?></span>
								</p>
							</div>
						</div>
						<?php endwhile; endif;  wp_reset_postdata(); ?>
					</div>
				</div>
      </section>



<section class="portfolio section">
  <div class="c<section class="portfolio section">
  <div class="container">
    <div class="top-side">
      <h4 class="title">Marvel Cinematic Universe</h4>
      <h2>CHARACTERS</h2>
    </div>

    <div class="filters">
      <ul>
        <li class="active" data-filter="*">All</li>
        <li data-filter=".corporate">Original Six Avengers</li>
        <li data-filter=".personal">New Avengers</li>
        <li data-filter=".agency">Guardians of the Galaxy</li>
        <li data-filter=".portal">Other</li>
      </ul>
    </div>

    <div class="filters-content">
      <div class="row grid">
        <div class="col-sm-4 all corporate">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Iron Man</h5>
              <div class="cat">Original Six Avengers</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 all personal">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Spider-Man</h5>
              <div class="cat">New Avengers</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 all agency">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>Groot</h5>
              <div class="cat">Guardians of the Galaxy</div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 all portal">
          <div class="item">
            <img src="http://themes.muffingroup.com/betheme/documentation/doc-images/muffin-options/custom-js.png" alt="Work 1">
            <div class="p-inner">
              <h5>The Ancient One</h5>
              <div class="cat">Other</div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
