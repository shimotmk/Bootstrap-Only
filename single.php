<?php get_header(); ?>
	<header itemscope="itemscope" itemtype="http://schema.org/WPHeader" >
		<div class="container">
			<div class="h1 py-3">
				<a class="text-dark" href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a>
			</div>
		</div>
	</header>
	<!--グローバルナビ-->
	<?php require "gloval-navi.php";?>
	<!-- コンテンツエリア -->
	<main class="bg-light" id="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
		<div class="container">

			<div class="row pt-3">
				<div class="col-md-8 col-xs-12">
					<!-- articleタグのマークアップ -->
					<article itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
					<!-- 記事の概要を表示-->
					<meta itemprop="about" content="<?php echo get_post_meta($post->ID, _aioseop_description, true); ?>">
						<section>
	            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="bg-white  mb-5 py-5">
								<!-- 日にち -->
								<div class="pb-3 text-center text-secondary">
	                最終更新日：<?php the_time('Y/m/d'); ?>
								</div>
								<!-- タイトル表示 -->
								<h1 class="entry-title text-center px-5 pb-3 font-weight-bolder" itemprop="name headline">
									<?php the_title(); ?>
								</h1>
								<!-- カテゴリー表示 -->
								<div class="pb-3 text-center">
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
	              <!-- 本文-->
								<div class="single px-4"  itemprop="articleBody">
									<div class="overflow-auto">
										<?php $content = get_the_content();
													$content = apply_filters( 'the_content', $content );
													$content = str_replace( ']]>', ']]&gt;', $content );
													$content = str_replace( '<p'  , '<p class="mb-5" ',$content);
													$content = str_replace( '<h2' , '<h2 class="border-left border-primary px-5 py-3 my-3 bg-light text-break" ',$content);
													$content = str_replace( '<h3' , '<h3 class="border-left border-primary px-3 mb-5 font-weight-bolder text-break" ',$content);
													$content = str_replace( '<img', '<img class="img-fluid my-3" ',$content);
													echo $content;
										  ?>
										</div>
										<p itemprop="keywords"><i class="fa fa-tags"></i><?php the_tags(); ?></p>
								</div>
								<!--SNSシェアボタン-->
								<div class="container">
									<div class="row py-5">
										<div class="col-md-4 col-6 ">
											<a class="text-decoration-none text-white" href="https://www.facebook.com/sharer.php?src=bm&u=<?php the_permalink(); ?>&t=<?php the_title(); ?>">
												<div class="bg-primary p-3 mb-2 rounded">
													<i class="fab fa-facebook-f fa-fw"></i>facebook
												</div>
											</a>
										</div>
										<div class="col-md-4 col-6 text-white ">
											<a class="text-decoration-none text-white" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>">
												<div class="bg-primary p-3 mb-2 rounded">
													<i class="fab fa-twitter fa-fw"></i>Twitter
												</div>
											</a>
										</div>
										<div class="col-md-4 col-6 text-white">
											<a class="text-decoration-none text-white" href="//b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>">
												<div class="bg-info p-3 mb-2 rounded">
													<i class="fab fa-blogger-b fa-fw"></i>hatebu
												</div>
											</a>
										</div>
										<div class="col-md-4 col-6 text-white">
											<a class="text-decoration-none text-white" href="//plus.google.com/share?url=<?php the_permalink(); ?>">
												<div class="bg-danger p-3 mb-2 rounded">
													<i class="fab fa-google-plus-g fa-fw"></i>Share
												</div>
											</a>
										</div>
										<div class="col-md-4 col-6 text-white">
											<a class="text-decoration-none text-white" href="//getpocket.com/edit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>">
												<div class="bg-danger p-3 mb-2 rounded">
													<i class="fas fa-clipboard-check fa-fw"></i>Read Later
												</div>
											</a>
										</div>
										<div class="col-md-4 col-6 text-white">
											<a class="text-decoration-none text-white" href="#">
												<div class="bg-light p-3 mb-2 rounded">
													<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=72&layout=button&action=like&size=small&show_faces=true&share=false&height=65&appId" width="106" height="21"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!--関連記事-->
								<div class="container">
									<h4 class="border-left border-primary px-3 my-3">RELATED</h4>
									  <?php if(has_category() ) {
									    $cats =get_the_category();
									    $catkwds = array();
									    foreach($cats as $cat){
									      $catkwds[] = $cat->term_id;
									    }
									  }?>
									  <?php $args = array(
									    'post_type' => 'post',
									    'posts_per_page' => '8',
									    'post__not_in' =>array( $post->ID ),
									    'category__in' => $catkwds,
									    'orderby' => 'rand'
									  );
									  $my_query = new WP_Query( $args );?>
									  <div class="row px-3 pt-5">
									    <?php if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
									      <div class="col-md-3 col-xs-12 p-1">
									        <div class="pb-5">
									          <a href="<?php the_permalink();?>">
									            <?php if (has_post_thumbnail()) : ?>
									            	<?php the_post_thumbnail('', array('class' => 'img-fluid') ); ?>
									            <?php else: ?>
									              <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/no-image.jpg">
									            <?php endif; ?>
									          </a>
									          <a href="<?php the_permalink();?>">
									            <h6><?php the_title(); ?></h6>
									          </a>
									        </div>
									      </div>
									    <?php endwhile; else : ?>
									      <p>関連記事がありません。</p>
									    <?php endif; ?>
									  </div>
									  <?php wp_reset_postdata(); ?>
								</div>
							</div>
	            <?php endwhile; else : ?>
	              <p>記事がありません。</p>
	            <?php endif; ?>
							<!--パンくず表示-->
					    <div class="breadcrumb bg-transparent">
					    	<span class="" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					    		<a href="<?php echo home_url(); ?>" itemprop="url">
					    			<span itemprop="title">HOME</span>
					    		</a>&gt;&nbsp;
					    	</span>
					    	<?php if ( is_single() ) { ?>
					    		<span class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					    			<a href="<?php $cat = get_the_category(); echo get_category_link($cat[0]->cat_ID); ?>" itemprop="url">
					    				<span itemprop="title"><?php echo $cat[0]->name; ?></span>
					    			</a>&gt;&nbsp;
					    		</span>
					    	<?php } else { ?>
					    	<?php } ?>
					    	<span><?php the_title(); ?></span>
					    </div>
						</section>
					</article>
				</div>
	      <?php get_sidebar(); ?>
	    </div>
	  </div>
	</main>
	<?php get_footer(); ?>
