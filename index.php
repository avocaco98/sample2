<?php get_header(); ?>

<!-- main -->
<main>
  <!-- top page -->
  <div id="top">
    <div class="scroll">
      <div class="scrolldown4"><span>Scroll</span></div>
    </div>
  </div>
  <div id="main">
    <!-- menu -->
    <div class="menu">
      <div class="inner">
        <ul class="accordion-area">
          <li>
            <section>
              <h3 class="title accordion bgright">wallet</h3>
              <ul class="box">

              <?php
              $mclip = get_category_by_slug("money-clip");
              $mclip_id = $mclip->term_id;
              $mclip_link = get_category_link($mclip_id);
              ?>
              <?php
              $minimal = get_category_by_slug("minimal");
              $minimal_id = $minimal->term_id;
              $minimal_link = get_category_link($minimal_id);
              ?>

              <?php
              $lwallet = get_category_by_slug("long-wallet");
              $lwallet_id = $lwallet->term_id;
              $lwallet_link = get_category_link($lwallet_id);
              ?>

              <?php
              $coincase = get_category_by_slug("coin-case");
              $coincase_id = $coincase->term_id;
              $coincase_link = get_category_link($coincase_id);
              ?>

                <li>
                  <a href="<?php echo esc_url($mclip_link);?>">money clip</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($minimal_link);?>">minimal</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($lwallet_link);?>">long wallet</a>
                </li>
                <li>
                  <a href="<?php echo esc_url($coincase_link);?>">coin case</a>
                </li>
              </ul>
            </section>
          </li>

          <li>
            <section>
              <a href="<?php echo esc_url("/bag.php");?>">
                <h3 class="title">Bag</h3>
              </a>
            </section>
          </li>

          <li>
            <section>
              <h3 class="title accordion">komono</h3>
              <ul class="box">
                <li>
                  <a href="#">komono</a>
                </li>
                <li>
                  <a href="#">Key holder</a>
                </li>
                <li>
                  <a href="#">others</a>
                </li>
              </ul>
            </section>
          </li>

          <li>
            <section>
              <h3 class="title accordion">outdoor</h3>
              <ul class="box">
                <li>
                  <a href="#">Hunting chair</a>
                </li>
                <li>
                  <a href="#">Mosquite coil stand</a>
                </li>
                <li>
                  <a href="#">OD can cover</a>
                </li>
                <li>
                  <a href="#">CB can cover</a>
                </li>
                <li>
                  <a href="#">others</a>
                </li>
              </ul>
            </section>
          </li>
        </ul>

        <div class="menu-bottom">
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">about</a></li>
            <li><a href="<?php echo esc_url(home_url('/access')); ?>">access</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">contact</a></li>
          </ul>

        </div>
      </div>
    </div>

    <!-- right -->
    <div class="right">
      <h2 class="section-title">wallet</h2>
      <ul class="items">
        <!-- メインループ -->
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>

            <li class="item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(null, array('class' => 'post-thumb')); ?>
                <div class="item-text">
                  <p class="item-title">
                    <?php the_title(); ?>
                  </p>
                  <p class="price">
                    <?php
                    $price = get_post_meta(get_the_ID(), 'price', true); ?>
                    ¥<?php echo number_format($price); ?>
                  </p>
                </div>
              </a>
              <ul class="color">
                <li><img src="<?php the_field('color-white'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-camel'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-yellow'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-brown'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-green'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-blue'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-purple'); ?>" alt=""></li>
                <li><img src="<?php the_field('color-black'); ?>" alt=""></li>
              </ul>
            </li>
          <?php
          endwhile;
        else :
          ?>
          <p>投稿データがありませんでした</p>
        <?php endif; ?>

      </ul>

      <ul class="pagenav">
        <li><a href="#" class="prev"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/pagenation-icon.png'); ?>" alt=""></a></li>
        <li>1</li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#" class="next"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/pagenation-icon.png'); ?>" alt=""></a></li>
      </ul>

      <!-- footer -->
      <div id="footer">
        <p>© 2016 Boab leather works. All Rights Reserved.</p>
      </div>
    </div>
  </div>
  </div>

</main>

<?php get_footer(); ?>