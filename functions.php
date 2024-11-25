<?php
  add_action('wp_enqueue_scripts', 'add_styles');

  function add_styles() {
    // google fonts
    wp_register_style(
      'google-fonts_style',
      'https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap',
      array(),
      '1.0'
    );

    // reset style
    wp_register_style(
      'reset_style',
      'https://unpkg.com/ress/dist/ress.min.css',
      array(),
      '1.0'
    );

    // main style
    wp_enqueue_style(
      'main_style',
      get_template_directory_uri() . '/css/style.css',
      array('reset_style', 'google-fonts_style'),
      '1.0'
    );
  }

  add_action('wp_enqueue_scripts', 'add_scripts');
  function add_scripts()
  {
      // デフォルトのjQueryを削除
      wp_deregister_script('jquery');
  
  
      //JSの読み込み
  
      //jqueryを登録
      wp_register_script(
          'jquery_script',
          'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
          array(),
          '1.0',
          true
      );
  
      // main.jsを最後に実行
      wp_enqueue_script(
          'main_script',
          get_template_directory_uri() . '/js/main.js',
          array('jquery_script'),
          '1.0',
          true
      );
  }

  add_theme_support('post-thumbnails');
