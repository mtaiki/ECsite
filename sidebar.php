                    
                    
                    
                    <aside id="sidebar" class="page-news-sidebar">
                        <h3 class="news-sidebar-title">
                            新着記事
                        </h3>
                        <div class="sidebar-item-wrap">

                            <?php
                                $args = array (
                                    'post_type'      => 'post', // 投稿タイプ
                                    'posts_per_page' => 5, // 取得する投稿数
                                );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ):
                                setup_postdata($post); //　グローバル変数$postを書き換え
                            ?>

                            <a href="<?php the_permalink(); ?>" class="sidebar-item-link">
                                <div class="sidebar-item">
                                    <div class="sidebar-item-img-wrap">
                                        <div class="sidebar-item-img">
                                            <?php 
                                            if(has_post_thumbnail()) {
                                                the_post_thumbnail('large');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="sidebar-item-content">
                                        <div class="sidebar-item-data">
                                            <label class="sidebar-item-label">
                                                <!-- カテゴリー名の表示 -->
                                                <?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?>
                                            </label>
                                            <time class="sidebar-item-time" datetime="<?php the_time('c'); ?>">
                                                <?php the_time('Y.n.j'); ?>
                                            </time>
                                        </div>
                                        <h4 class="sidebar-item-title">
                                            <?php the_title(); ?>
                                        </h4>
                                    </div>
                                </div>
                            </a>

                            <?php
                                endforeach;
                                wp_reset_postdata(); 
                            ?>
                        </div>
                        <div class="sidebar-list">
                            <h3 class="sidebar-list-title">
                                カテゴリ
                            </h3>
                            <ul class="list-item-wrap">

                            <?php
                                // 親カテゴリーのものだけを一覧で取得
                                $args = array(
                                    'parent' => 0,
                                    'orderby' => 'term_order',
                                    'order' => 'ASC'
                                );
                                $categories = get_categories( $args );
                            ?>
                                <?php foreach( $categories as $category ) : ?>

                                <li class="list-item">
                                    <!-- カテゴリー一覧ページのリンク -->
                                    <a href="<?php echo get_category_link( $category->term_id ); ?>" class="list-item-link">
                                        <div class="list-item-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/image/icon-chevron-right02.png" alt="アイコン画像">
                                        </div>
                                        <!-- カテゴリー名 -->
                                        <label class="list-item-text">
                                            <?php echo $category->name; ?>
                                        </label>
                                    </a>
                                </li>

                            <?php endforeach; ?>

                            </ul>
                        </div>
                    </aside>