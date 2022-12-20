<?php get_header(); ?>

  <main>

    <h1 class="top_ttl">酸素系エコ洗剤（多目的で無公害なエコ洗剤）を作り続けて３０年のタイシン九州です。</h1>
      
    
    <section class="top_fv max_1100">
      <div class="nav">
        <h2>お掃除・お洗濯方法で探す</h2>
        <ul class="usage_nav">
          <?php if( have_rows('loop_usage') ): ?>
            <?php while ( have_rows('loop_usage') ) : the_row(); ?>
            <li><a href="<?php echo home_url() ?><?php the_sub_field('loop_usage_link'); ?>"><?php the_sub_field('loop_usage_text'); ?></li></a>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </section>

      <!-- wp:wp-simple-booking-calendar/single-calendar {"id":"1"} /-->
      
    <section class="recommend">
      <ul class="slider">
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog01.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog02.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog03.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog01.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog02.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog03.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog01.jpg"><span>記事タイトル</span></a></li>
      </ul>
    </section>

    <section class="campaign max_1100">
      <ul class="campaign_bnr">
        <li><a href="">キャンペーンのバナーが入る</a></li>
        <li><a href="">キャンペーンのバナーが入る</a></li>
      </ul>
    </section>

    <section class="max_1100 approach">
      <div class="approach_news">
        <h2>新着情報</h2>
        <ul>
          <li><a href="">2222年2月22日 新着情報、お知らせの記事タイトル</a></li>
          <li><a href="">2222年2月22日 新着情報、お知らせの記事タイトル</a></li>
          <li><a href="">2222年2月22日 新着情報、お知らせの記事タイトル</a></li>
          <li><a href="">2222年2月22日 新着情報、お知らせの記事タイトル</a></li>
        </ul>
      </div>

      <div class="approach_voice">
        <h2>お客様の声</h2>
          <ul>
            <li><a href="">2222年2月22日 お客様の声の記事タイトル</a></li>
            <li><a href="">2222年2月22日 お客様の声の記事タイトル</a></li>
            <li><a href="">2222年2月22日 お客様の声の記事タイトル</a></li>
            <li><a href="">2222年2月22日 お客様の声の記事タイトル</a></li>
        </ul>
      </div>
    </section>

    <section class="max_1100 common_sec">
      <h2>かわゆい花子の汚れが落ちる秘密</h2>
      <div>
        <dl>
          <dt></dt>
          <dd></dd>
        </dl>
      </div>
    </section>

    <section class="recommend">
      <ul class="slider">
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog01.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog02.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog03.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog01.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog02.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog03.jpg"><span>記事タイトル</span></a></li>
        <li><a href=""><img src="https://junpei-sugiyama.com/wp-content/uploads/2021/01/dog01.jpg"><span>記事タイトル</span></a></li>
      </ul>
    </section>


  </main>
  
  <script>
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
        slidesToShow: 6,
        infinite: true,
    })
</script>


<?php get_footer(); ?>