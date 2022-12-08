<?php get_header(); ?>

  <main>
    <nav class="nav">
    <?php echo get_field('test_'); ?>

      <ul class="usage_nav">
        <?php if( have_rows('loop_usage') ): ?>
        <?php while ( have_rows('loop_usage') ) : the_row(); ?>
          <li><a href="<?php echo home_url() ?><?php the_sub_field('loop_usage_link'); ?>"><?php the_sub_field('loop_usage_text'); ?></li></a>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </nav>

  </main>

<?php get_footer(); ?>