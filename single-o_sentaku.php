<?php get_header(); ?>

<main class="user_voice">
  <section class="user_voice_sec">
    <div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
        <!-- タイトルを表示する -->
        <h1 class="user_voice_ttl"><?php the_title(); ?></h1>
    
  
        <div class="user_voice_sec_box">
          <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>">
          <?php  endif; ?>
          <div>
            <?php the_field('user_voice_detail'); ?>
            <?php the_field('user_voice_text'); ?>
          </div>
        </div>
  
        <?php // 現在の投稿に隣接している前後の投稿を取得する
    $prev_post = get_previous_post(); // 前の投稿を取得
    $next_post = get_next_post(); // 次の投稿を取得
    if( $prev_post || $next_post ): // どちらか一方があれば表示
  ?>
  <nav class="page-nav">
  <?php if( $prev_post ): // 前の投稿があれば表示 ?>
    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="prev-link">
      <span>前の記事へ</span><br /><?php // echo get_the_title( $prev_post->ID ); ?>
    </a>
  <?php endif; ?>
  <?php if( $next_post ): // 次の投稿があれば表示 ?>
    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-link">
      <span>次の記事へ</span><br /><?php // echo get_the_title( $next_post->ID ); ?>
    </a>
  <?php endif; ?>
  </nav>
  <?php endif; ?>
        
        <dl>
          <dt>タイシン九州より</dt>
          <dd><?php the_field('taishin_thanks'); ?></dd>
        </dl>
        <?php endwhile; endif; ?>
      </div>
    </section>

    <section class="side">
      サイド
    </section>
  

</main>

<?php get_footer(); ?>