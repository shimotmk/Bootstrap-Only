<!--検索結果の表示-->
<?php get_header(); ?>
		<header itemscope="itemscope" itemtype="http://schema.org/WPHeader" >
			<div class="container">
				<div class="h1 py-3">
					<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a>
				</div>
			</div>
		</header>
		<!--グローバルナビ-->
		<?php require "gloval-navi.php";?>
		<!-- コンテンツエリア -->
		<main class="bg-light" id="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
			<div class="container">
				<!-- メインコンテンツ -->
				<div class="row pt-3">
					<div class="col-md-8 col-xs-12">
						<!-- articleタグのマークアップ -->
						<article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
              <!--検索したキーワードを表示-->
              <div class="py-5">
                <h1 class="h3 font-weight-bolder" itemprop="name headline">
                  <?php printf ( __( '<span class="pb-3 border-bottom border-info">'.'検索キーワー'.'</span>'.'ド： %s' ,'altitude' ), '<span class="border-bottom-0">' . get_search_query() . '</span>' ); ?>
                </h1>
              </div>
							<!-- 記事の概要を表示-->
							<meta itemprop="about" content="<?php echo get_post_meta($post->ID, _aioseop_description, true); ?>">
								<section>
	                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<div class="bg-white text-center mb-5 py-5">
										<!-- 日にち -->
										<div class="pb-3 text-secondary">
	                    最終更新日：<?php the_time('Y/m/d'); ?>
										</div>
										<!-- タイトル表示 -->
										<h2 class="entry-title px-5 pb-3 font-weight-bolder" itemprop="name headline">
											<a class="text-secondary" href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url">
												<?php the_title(); ?>
											</a>
										</h2>
										<!-- カテゴリー表示 -->
										<div class="pb-3">
											<a href="<?php echo esc_url( $category_link ); ?>"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a>
										</div>
										<!-- サムネイルの表示 -->
										<figure class="pb-3">
											<span itemscope itemtype='http://schema.org/ImageObject' itemprop="image" >
												<a href="<?php echo get_permalink(); ?>" itemprop='contentUrl'>
	                        <?php if (has_post_thumbnail()) : ?>
	                          <?php the_post_thumbnail('', array('class' => 'card-img-top') ); ?>
	                          <?php else: ?>
	                            <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/no-image.jpg">
	                        <?php endif; ?>
												</a>
											</span>
										</figure>
	                  <!-- 本文の抜粋 -->
	    							<p itemprop="description" class="description px-5 pb-3 text-secondary">
											<?php if (!empty(get_post_custom()['_aioseop_description'][0])) : ?>
												<?php echo ''.get_post_custom()['_aioseop_description'][0].'';?>
											<?php else:?>
												<?php the_excerpt();?>
											<?php endif; ?>
	    							</p>
										<!-- READ MORE -->
										<div  itemprop="articleBody">
											<a href="<?php the_permalink();?>">
												<div class="d-inline-block border p-3 text-secondary">
													READ MORE
												</div>
											</a>
										</div>
									</div>
	                <?php endwhile; else : ?>
	                  <p>記事がありません。</p>
	                <?php endif; ?>
									<!-- 前のページ -->
									<div class="float-left pb-5">
	                  <?php previous_posts_link('<div class="d-inline-block border p-3 text-secondary">前のページ</div>'); ?>
									</div>
									<!-- 次のページ -->
									<div class="float-right pb-5">
	                  <?php next_posts_link('<div class="d-inline-block border p-3 text-secondary">次のページ</div>'); ?>
									</div>
								</section>
						</article>
					</div>

          <?php get_sidebar(); ?>
        </div>
      </div>
    </main>
    <?php get_footer(); ?>
