<?php get_header(); ?>
        <section class="news-post page-news">
            <div class="container">
                <div class="news-post-inner page-news-inner">
                    <div class="news-post-content page-news-content">
                        <div class="post-content-wrap">
                            <div class="post-content-data">
                                <label class="post-content-label">
                                    <!-- カテゴリー名を表示 -->
                                    <?php $category = get_the_category(); $cat_name = $category[0]->cat_name; echo $cat_name; ?>
                                </label>       
                                <time class="post-content-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                            </div>
                            <h1 class="title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="post-content-img">
                            <?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                };
                            ?> 
                            </div>
                            <div class="post-content-body">
                                <?php the_content(); ?>
                                <div class="content-text-quote">
                                    <p class="quote-text">
                                        <?php echo $cfs->get('post-quote'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="post-pagenation">
                            <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
                            <a href="<?php echo get_permalink($nextpost->ID); ?>" class="prev-btn">
                                < 前の記事へ
                            </a>
                            <?php endif; ?>

                            <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
                            <a href="<?php echo get_permalink($prevpost->ID); ?>" class="next-btn">
                                次の記事へ >
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- サイドバー -->
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>