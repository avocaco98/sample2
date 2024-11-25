<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boab leather works</title>
  
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header id="header">
    <div class="wrapper">
      <h1 class="logo">
        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-yl.png' ); ?>" alt="Boab leather works"></a>
      </h1>
      <div class="top-link">
        <a class="instagram" href="https://www.instagram.com/boab_leather_works/?hl=en"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/instagtam-yl.png' ); ?>"
            alt="インスタグラム"></a>
        <a class="cart" href=""><img src="<?php echo esc_url( get_template_directory_uri() . '/img/cart-yl.png'); ?>" alt="カートを見る"></a>
      </div>

      <!--- スマホ版ハンバーガーメニュー --->
      <nav id="nav" class="accordion-area">
        <ul>
          <li>
            <section>
              <h3 class="title accordion bgright">wallet</h3>
              <ul class="box">
                <li>
                  <a href="#">money clip</a>
                </li>
                <li>
                  <a href="#">minimal</a>
                </li>
                <li>
                  <a href="#">long wallet</a>
                </li>
                <li>
                  <a href="#">coin case</a>
                </li>
              </ul>
            </section>
          </li>
          <li>
            <section>
              <a href="bag.html">
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

        <ul class="menu-bottom">
          <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">about</a></li>
          <li><a href="<?php echo esc_url( home_url( '/access' ) ); ?>">access</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">contact</a></li>
        </ul>
      </nav>

      <!--- humberger btn --->
      <div class="toggle-btn">
        <span></span>
        <span></span>
      </div>

      <!--- mask --->
      <div id="mask"></div>
    </div>
  </header>