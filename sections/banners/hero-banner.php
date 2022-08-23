<?php 
    $title = get_sub_field('hero_title');
    $intro_content = get_sub_field('intro_content');
    $btn_text = get_sub_field('btn_text');
    $btn_link = get_sub_field('btn_link');
    $card_info = get_sub_field('card_info');
    $bg_img = get_sub_field('bg_img');

    $bg_img['alt'] === "" ? $bg_img['alt'] = "QDN" : "";
?>

<section class="hero">
    <div class="wrapper">
        <row class="row row-medium-flex">

            <!-- Content Col -->
            <div class="col col-medium-6">
                <div class="hero__content">

                    <?php if(!empty($title)): ?>
                    
                        <h2 class="hero__heading">
                            <?php echo $title; ?>
                        </h2>

                    <?php endif; ?>

                    <?php if(!empty($intro_content)): ?>

                        <div class="row">
                            <div class="col col-smallest-12 col-wide-10">
                                <div class="hero__intro">

                                    <?php foreach($intro_content as $item): ?>

                                        <?php 
                                            $intro_icon  = $item['icon'];
                                            $intro_title  = $item['title'];
                                            $intro_desc  = $item['description'];

                                            $intro_icon['alt'] === "" ? $intro_icon['alt'] = "QDN" : "";
                                        ?>

                                        <div class="hero__intro-box">
                                            
                                            <?php if(!empty($intro_icon)): ?>

                                                <div class="hero__icon">
                                                    <picture>

                                                        <img src="<?php echo esc_url($intro_icon['url']) ?>" alt="<?php echo esc_attr($intro_icon['alt']) ?>">

                                                    </picture>
                                                </div>
                                                
                                            <?php endif; ?>

                                            <div class="hero__intro-detail">

                                                <?php if(!empty($intro_title)): ?>
                                                    <h3 class="hero__intro-title">
                                                        <?php echo esc_html($intro_title) ?>
                                                    </h3>
                                                <?php endif; ?>


                                                <?php if(!empty($intro_desc)): ?>
                                                    <p class="hero__intro-desc">
                                                        <?php echo esc_html($intro_desc) ?>
                                                    </p>
                                                <?php endif; ?>

                                            </div>
                                        </div>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>

                    <?php endif ?>


                    <?php if(!empty($btn_text) && !empty($btn_link)): ?>

                        <div class="hero__btn">
                            <a href="<?php echo esc_url($btn_link) ?>" class="btn btn--primary btn--sm">
                                <?php echo esc_html($btn_text) ?>
                            </a>
                        </div>

                    <?php endif ?>

                </div>
            </div>
            <!-- End Content Col -->

            
            <!-- Background Image -->
            <div class="col col-medium-6 no-padding">

                <?php if(!empty($bg_img)): ?>

                    <div class="hero__ilustration">
                        <picture>

                            <img src="<?php echo esc_url($bg_img['url']) ?>" alt="<?php echo esc_attr($bg_img['alt']) ?>" />

                        </picture>
                    </div>

                <?php endif ?>

            </div>
            <!-- End Background Image -->

        </row>
    </div>
</section>