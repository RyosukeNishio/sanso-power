<?php get_header(); ?>

<main class="single_main">


  <section class="side">
      サイドバー
  </section>

  <section class="single_sec">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <?php // タイトルを表示する start ?>
        <h1 class="blog-detail__title"><?php the_title(); ?></h1>
        <?php // タイトルを表示する end ?>
    
        <?php // アイキャッチ画像を表示する start ?>
        <?php if(has_post_thumbnail()): ?>
        <div class="blog-detail__image">
            <img src="<?php the_post_thumbnail_url('large'); ?>">
        </div>
        <?php endif; ?>
        <?php // アイキャッチ画像を表示する end ?>
    
        <?php // 本文を表示する start ?>
        <div class="blog-detail__body">
            <div class="blog-content"><?php echo the_content(); ?></div>
        </div>
        <?php // 本文を表示する end ?>
    
    <?php endwhile; endif; ?>




    <?php if( have_rows('single_sec') ): //柔軟コンテンツフィールドの値を持っているかどうかをチェック ?>
    <?php while ( have_rows('single_sec') ) : the_row(); //値のループ ?>
    <?php if( get_row_layout() == 'single_sec_editor' ): ?>
    <?php the_sub_field('detail_editor'); ?>

    <?php elseif( get_row_layout() == 'single_sec_loop' ): ?>
    <!-- レイアウト名2にリピーターフィールドがあるかの判別 -->
    <?php if( have_rows('loop_step') ): //リピーターフィールドの値を持っているかどうかをチェック ?>
    <?php while ( have_rows('loop_step') ) : the_row(); //値のループ ?>
    <img src="<?php the_sub_field('single_step_img'); ?>">
    <?php the_sub_field('single_step_ttl'); ?>
    <?php the_sub_field('single_step_editor'); ?>

    <?php endwhile; ?>
    <?php endif; ?>

    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>

  </section>
  
</main>



<?php get_footer(); ?>