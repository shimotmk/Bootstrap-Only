<!--グローバルナビ-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
    <a class="navbar-brand text-white mr-3" href="#"><i class="fas fa-home"></i>Home</a>
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php
        wp_nav_menu(
          array(
            //カスタムメニュー名
            'theme_location' => 'header-navi',
            //コンテナを表示しない
            'container' => false,
            //メニューを構成する ul 要素に適用するCSS クラス名。にnavbar-navを入れる
            'menu_class' => 'navbar-nav',
            'link_before' => '<span class="nav-item mr-3 nav-link text-white">',
            'link_after' => '</span>',
          )
        );
        ?>
    </div>
  </div>
</nav>
