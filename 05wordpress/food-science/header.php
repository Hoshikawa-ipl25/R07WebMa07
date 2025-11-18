<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" type="text/css" />
  <!-- bloginfo('name'); 一般設定＞サイトのタイトル　が表示できる -->
  <!-- <title><?php bloginfo('name'); ?></title> -->


  <?php
  // CSSファイルの読み込み
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
  wp_enqueue_style('google-web-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

  // scriptファイルの読み込み
  wp_enqueue_script('jquery');
  wp_enqueue_script('food-science-main', get_template_directory_uri() . '/assets/js/main.js');

  // wp_head() </head>の閉じタグの手前に必ず書く　WPテンプレートに必須の関数のひとつ
  wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header_logo">
      <h1 class="logo"><a href="<?php echo home_url(); ?>">FOOD SCIENCE<span><?php bloginfo('description'); ?></span></a></h1>
    </div>

    <div class="header_nav">
      <div class="header_menu js-menu-icon"><span></span></div>
      <div class="gnav js-menu">
        <!-- <ul>
          <li><a href="concept.html">コンセプト</a></li>
          <li><a href="food.html">メニュー</a></li>
          <li><a href="access.html">アクセス</a></li>
          <li><a href="category.html">最新情報</a></li>
        </ul> -->
        <?php
        $args = [
          'menu' => 'global-navigation',
          'menu_class' => '',
          'container' => false,
        ];
        wp_nav_menu($args);
        ?>

        <div class="header_info">
          <form action="<?php echo home_url('/'); ?>" method="get" class=" header_search">
            <input type="text" name="s" value="<?php the_search_query(); ?>" aria-label="Search">
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>

          <div class="header_contact">
            <div class="header_time">
              <dl>
                <dt>OPEN</dt>
                <dd>09:00〜21:00</dd>
              </dl>
              <dl>
                <dt>CLOSED</dt>
                <dd>Tuesday</dd>
              </dl>
            </div>
            <p>
              <a href="#"><i class="fa-solid fa-envelope"></i><span>ご予約・お問い合わせ</span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>