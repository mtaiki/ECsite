<?php 
/**
 * 
 * Template Name: page-about
 * 
 */
?>

<?php get_header(); ?>

        <section class="page-about-company">
            <div class="container">
                <div class="about-company-inner">
                    <div class="company-item-wrap">

                    <!--CFSカスタムフィールドのループ -->
                    <?php $fields01 = CFS()->get( 'group' );
                        if ($fields01):
                        foreach ( $fields01 as $fields ):
                    ?>

                        <div class="company-item">
                            <div class="company-item-head">
                                <div class="company-item-img">
                                    <div class="bg-img-pc">
                                        <img src="<?php echo $fields['img-pc']; ?>" alt="">
                                    </div>
                                    <div class="bg-img-sp">
                                        <img src="<?php echo $fields['img-sp']; ?>" alt="">
                                    </div>
                                </div>
                                <h3 class="company-item-title">
                                    <p class="title">
                                        <?php echo $fields['title-en']; ?>
                                    </p>
                                    <p class="title-jp">
                                        <?php echo $fields['title-jp']; ?>
                                    </p>
                                </h3>
                            </div>
                            <div class="company-item-content">
                                <h4 class="content-title">
                                    <?php echo $fields['textarea-title']; ?>
                                </h4>
                                <p class="content-text">
                                    <?php echo $fields['textarea']; ?>
                                </p>
                            </div>
                        </div>

                    <?php 
                        endforeach;
                        endif;
                    ?><!-- ループ終わり -->

                    </div>
                </div>
            </div>
        </section>

        <section class="page-about-prof">
            <div class="container">
                <div class="about-prof-inner">
                    <h2 class="about-prof-title">会社概要</h2>
                    <dl class="prof-item-wrap">
                        <dt class="prof-item-dt">代表</dt>
                        <dd class="prof-item-dd">
                            <?php echo $cfs->get('name'); ?>
                        </dd>
                        <dt class="prof-item-dt">事業内容</dt>
                        <dd class="prof-item-dd">
                            <ul>
                                <li><?php echo $cfs->get('business-content1'); ?></li>
                                <li><?php echo $cfs->get('business-content2'); ?></li>
                                <li><?php echo $cfs->get('business-content3'); ?></li>
                            </ul>
                        </dd>
                        <dt class="prof-item-dt">設立</dt>
                        <dd class="prof-item-dd">
                            <?php echo $cfs->get('founded'); ?>
                        </dd>
                        <dt class="prof-item-dt">所在地</dt>
                        <dd class="prof-item-dd">
                            <?php echo $cfs->get('location'); ?>
                        </dd>
                        <dt class="prof-item-dt">TEL</dt>
                        <dd class="prof-item-dd">
                            <?php echo $cfs->get('tel'); ?>
                        </dd>
                        <dt class="prof-item-dt">FAX</dt>
                        <dd class="prof-item-dd">
                            <?php echo $cfs->get('fax'); ?>
                        </dd>
                        <dt class="prof-item-dt">E-mail</dt>
                        <dd class="prof-item-dd">
                            <?php echo $cfs->get('mail'); ?>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>

        <section class="page-about-staff">
            <div class="container">
                <div class="about-staff-inner">
                    <h2 class="about-staff-title">役員紹介</h2>

                    <!--CFSカスタムフィールドのループ -->
                    <?php $fields02 = CFS()->get( 'staff-loop' );
                        if ($fields02):
                        foreach ( $fields02 as $fields ):
                    ?>

                    <div class="staff-item">
                        <div class="staff-item-img">
                            <img src="<?php echo $fields['staff-img']; ?>" alt="">
                        </div>
                        <div class="staff-item-prof">
                            <p class="staff-name">
                            <?php echo $fields['staff-position']; ?>
                                <span class="name"><?php echo $fields['staff-name']; ?></span>
                            </p>
                            <p class="staff-item-text">
                                <?php echo $fields['staff-textarea']; ?>
                            </p>
                            <div class="staff-sns">
                                <?php echo $fields['twitter']; ?>
                                <?php echo $fields['facebook']; ?>
                                <?php echo $fields['instagram']; ?>
                            </div>
                        </div>
                    </div>

                    <?php 
                        endforeach;
                        endif;
                    ?><!-- ループ終わり -->

                </div>
            </div>
        </section>

<?php get_footer(); ?>