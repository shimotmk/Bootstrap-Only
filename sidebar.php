<div class="col-md-4 col-xs-12">
	<!-- sidebar -->
	<aside id="sidebar"  role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
		<!--ウィジェットで設定したサイトバー-->
		<?php if(is_active_sidebar('widget_id001')) : ?>
			<div class="container">
			<?php dynamic_sidebar('widget_id001'); ?>
			</div>
			<div class="container">
			<?php dynamic_sidebar('my_sample_widget_id002'); ?>
			</div>
		<?php endif; ?>
		<!-- プロフィール -->
		<div class="container bg-white mb-5 py-5">
			<div class="mx-5">
				<img class="img-fluid rounded-circle" src="https://shimotmk.com/Portfolio/img/profile.jpg" alt="">
			</div>
			<div class="text-center">
				<h4 class="d-inline-block py-3 border-bottom border-info">しもむらともき</h4>
			</div>
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
		<!-- 検索 -->
		<div class="container bg-white mb-5 py-5">
			<?php get_search_form(); ?>
		</div>
		<!-- よく読まれている記事 -->
		<div class="container bg-white mb-5">
			<div class="text-center py-5">
				<h4 class="d-inline-block pb-3 border-bottom border-info">よく読まれている記事</h4>
			</div>
			<div class="pb-5">
				<a href="#">
					<img class="img-fluid mb-3" src="https://nabla72.com/wp-content/uploads/2019/06/solitude-1148983_1920.jpg" alt="">
				</a>
				<a class="text-secondary" href="#">
					<h5 class="h5">
						よく読まれている記事1よく読まれている記事1よく読まれている記事1よく読まれている記事1
					</h5>
				</a>
			</div>
			<div class="pb-5">
				<a href="#">
					<img class="img-fluid mb-3" src="https://nabla72.com/wp-content/uploads/2019/06/solitude-1148983_1920.jpg" alt="">
				</a>
				<a class="text-secondary" href="#">
					<h5 class="h5">
						よく読まれている記事1よく読まれている記事1よく読まれている記事1よく読まれている記事1
					</h5>
				</a>
			</div>
		</div>
	</aside>
</div>
