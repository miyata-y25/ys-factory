<?php get_header(); ?>

<section class="top-main anim fadein">
    <h1 class="top-main__ttl">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_red_txt.svg" alt="">
    </h1>
    <p class="top-main__txt">
        Driven by experience.<br>
        Focused on quality.
        <span>技術と経験で、あなたのクルマを最高の状態に。</span>
    </p>
</section>

<div class="sec-news">
    <div class="sec-news__inner">
        <div class="news-area">
            <div class="news-area__ttl">
                <h2 class="news-area__ttl__ttl anim fadein">NEWS & <br>TOPICS</h2>
                <a href="<?php echo esc_url(home_url()); ?>/news/" class="news-btn anim fadein">一覧を見る</a>
            </div>
              <?php
              $current_term = get_queried_object();

              $args = array(
                'post_type'      => 'news',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
              );

              if (is_tax('news_cate') && isset($current_term->slug)) {
                $args['tax_query'] = array(
                  array(
                    'taxonomy' => 'news_cate',
                    'field'    => 'slug',
                    'terms'    => $current_term->slug,
                  ),
                );
              }

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) {
            ?>
            <ul class="news-area__ul anim fadeincont">
                <?php while ($the_query->have_posts()) { 
                  $the_query->the_post(); ?>
                <li>
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <?php
                      $terms = get_the_terms(get_the_ID(), 'news_cate');
                      if ($terms && !is_wp_error($terms)) {
                        $term = $terms[0];
                        echo '<span class="cate --' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</span>';
                      }
                    ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
                <?php } ?>
            </ul>
            <?php
              }
              wp_reset_postdata();
            ?>
        </div>
        <div class="news-bnr anim fadein">
            <a href="https://www.instagram.com/ysfactory0228/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnr_insta.png" alt=""></a>
        </div>
    </div>
</div>

<div class="sec-cont">
    <section class="sec-area --about anim fadein">
        <a href="<?php echo esc_url(home_url()); ?>/about/">
            <h2 class="sec-area__ttl anim fadein">
                <span class="main en">ABOUT US</span>
                <span class="sub jp">Y’s Factoryについて</span>
            </h2>
            <p class="sec-area__txt anim fadein">
                当社は、お客様の大切な愛車を最高の状態に修復するため、<br>
                確かな技術と最新設備を駆使し、<br>
                高品質な鈑金・塗装サービスを提供しております。<br>
                事故等による傷、へこみの鈑金塗装だけでなく<br>
                ヴィンテージカーのリメイク等も行っています。<br>
                一台一台を大切にお取り扱いします。
            </p>
        </a>
    </section>
    <section class="sec-area --service anim fadein">
        <a href="<?php echo esc_url(home_url()); ?>/service/">
            <h2 class="sec-area__ttl anim fadein">
                <span class="main en">SERVICE</span>
                <span class="sub jp">Y’s Factoryの技術</span>
            </h2>
            <p class="sec-area__txt anim fadein">
                当社は、お客様の大切な愛車を最高の状態に修復するため、<br>
                確かな技術と最新設備を駆使し、<br>
                高品質な鈑金・塗装サービスを提供しております
            </p>
        </a>
    </section>
</div>

<?php get_footer(); ?>