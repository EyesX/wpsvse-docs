<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WPSV Dokumentation
 */

get_header(); ?>

    <section id="page-header" class="section">
		<div class="container">
			<div class="row">
        <div class="col-md-12">
        	<h1 class="page-title">Dokumentation</h1>
        </div>
      </div>
    </div>
    </section>
    <!-- Start Page Header -->

    <!-- Start Page Content -->
	<section id="page-full" class="section">
		<div class="container">
			<div class="row">
        <div class="col-md-9 blog-listings docs-listings doc-cat-listings">
          <h1 class="doc-heading"><?php the_archive_title(); ?></h1>
          <hr/>

          <?php if ( have_posts() ) : ?>

            <h2>Artiklar</h2>

              <div class="doc-col">
               	<ul>
                <?php while ( have_posts() ) : the_post(); ?>

                 	<li><a class="doc-permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                <?php endwhile; ?>
                </ul>
              </div>

            <?php else : ?>

              <div class="doc-col">
                <p><em><small>Det finns för närvarande inga artiklar under <strong><?php the_archive_title(); ?></strong>. Varför inte <a href="#">skapa en</a></small></em></p>
              </div>

            <?php endif; ?>

        </div>
        <div id="sidebar" class="col-md-3 widget-area" role="complementary">
          <?php
					// Load default widgets
					include ( plugin_dir_path(__FILE__) . '/default-widgets.php');
					// Dynamic widgets
					if ( ! dynamic_sidebar( 'docs-widgets' ) ) : endif; ?>
      	</div>
			</div>
		</div>
	</section>
	<!-- End Page Content -->

<?php get_footer(); ?>
