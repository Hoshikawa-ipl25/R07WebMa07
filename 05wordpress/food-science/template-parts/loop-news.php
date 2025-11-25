<!-- お知らせ・コラムの記事投稿（メイン投稿）の一覧WPループでの表示用の、カードレイアウト部分 -->

<section id="post-<?php the_ID(); ?>" <?php post_class('cardList_item') ?>>
  <a href="<?php the_permalink(); ?>" class="card">
    <!-- <div class="card_label"><span class="label label-black">お知らせ</span></div> -->
    <?php
    $categories = get_the_category();
    if ($categories):
    ?>
      <div class="card_label">
        <?php foreach ($categories as $category): ?>
          <span class="label label-black"><?php echo $category->name; ?></span>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="card_pic">
      <!-- サムネイル画像表示 -->
      <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
      <?php endif; ?>
      <!-- サムネイルここまで -->
    </div>

    <div class="card_body">
      <h2 class="card_title"><?php the_title(); ?></h2>
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日') ?>更新</time>
    </div>
  </a>
</section>