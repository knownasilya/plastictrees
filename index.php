<?php get_header(); ?>
   <body>
		<header class="site_name">
      	<h1><?php bloginfo('name'); ?></h1>
		</header>

      <!-- Main Content-->
      <section class="content">
         <?php while ( have_posts() ) : the_post() ?>
            <h1><?php the_title(); ?></h1>
            <article>
               <?php the_content(); ?>
               <?php wp_link_pages(); ?>
            </article>
         <?php endwhile; ?>
      </section>

      <nav class="primary">
         <?php get_sidebar(); ?>
      </nav>

		<section class="call-to-action">
			<a class="order_now" href="#" alt="Place your order now!">Order Now!</a>
		</section>
      <?php get_footer(); ?>

