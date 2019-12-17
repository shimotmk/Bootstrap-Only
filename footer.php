<footer id="footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
  <div class="container py-5">
    <div class="row bg-white">
      <div class="col-md-4 col-xs-12">
        <h4 class="d-inline-block pb-3 border-bottom border-info">About</h4>
        <div class="text-center">
          <p>
            大学4年21歳 プログラミング、ブログにコミット | 大学生向けやお金や貯金のコツ節約方法を発信中  | デザイナーと共にお仕事受注！｜webサイト制作、SEO、
          </p>
          <p class="text-right">
            <a href="#">
              »Web制作依頼はこちら
            </a>
          </p>
          <p class="text-right">
            <a href="#">
              » お問い合わせはこちら
            </a>
          </p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="pb-5">
            <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
          </div>
          <?php
          wp_nav_menu(
            array(
              //カスタムメニュー名
              'theme_location' => 'header-navi',
              //コンテナを表示しない
              'container' => false,
              //メニューを構成する ul 要素に適用するCSS クラス名。にnavbar-navを入れる
              'menu_class' => 'list-unstyled',
              'before' => '<div class="p-3 border-top border-bottom border-secondary">',
              'after' => '</div>',
              'link_before' => '<span class="text-secondary">',
              'link_after' => '</span>',
            )
          );
          ?>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <h4 class="d-inline-block pb-3 border-bottom border-info">Twitter</h4>
        <a class="twitter-timeline" data-lang="ja" data-height="600" data-dnt="true" href="https://twitter.com/shimo_tmk?ref_src=twsrc%5Etfw">Tweets by shimo_tmk</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
  <div class="bg-dark text-white text-center p-3">
    Copyright - Tomoki Shimomura, 2019 All Rights Reserved.
  </div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
