<!-- 教科書通りのif文↓ -->
<!-- bcn_display()関数が定義されている＝breadcrumbNavがインストールされている時 -->
<?php /* if (function_exists('bcn_display'): */ ?>

<!-- 教科書のif文からアレンジ -->
<!-- 関数があり、なおかつ、!is_home()=トップページ!じゃない!とき -->
<!-- 頭に!をつけると、否定がtrueになる  -->
<?php if (function_exists('bcn_display') && !is_home()): ?>
    <div class="breadcrumb">
        <div class="breadcrumb_inner">
            <?php bcn_display(); ?>
        </div>

    </div>

<?php endif; ?>