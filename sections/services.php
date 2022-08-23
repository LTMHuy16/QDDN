<?php 
    $title = get_sub_field('title');
    $desc = get_sub_field('description');
    $service_cards = get_sub_field('service_cards');
    $bg_icon = get_sub_field('bg_icon');


    if (!empty($bg_icon)) {
        $bg_icon_link = "style='background-image: url(". $bg_icon['url']. ")'";
    }

    $bg_img['alt'] === "" ? $bg_img['alt'] = "QDN" : "";
?>

<section class="service padding-bottom" <?php if(!empty($bg_icon_link)){echo $bg_icon_link;} ?> >
    <div class="wrapper">
        <div class="service__head">

            <?php if(!empty($title)): ?>

                <h3 class="service__title">

                    <?php echo esc_html($title); ?>

                </h3>

            <?php endif; ?>


            <?php if(!empty($desc)): ?>

                <p class="service__desc">

                    <?php echo esc_html($desc); ?>
                
                </p>

            <?php endif; ?>

        </div>

        <?php if(!empty($service_cards)): ?>

            <?php 
                $card_1 = $service_cards['cards_1'];
                $card_2 = $service_cards['cards_2'];
                $card_3 = $service_cards['cards_3'];
                $card_4 = $service_cards['cards_4'];
            ?>
            
            <div class="service__container">
                <div class="row row-medium-flex">

                    <!-- Card 1 -->
                    <?php if(!empty($card_1)): ?>

                        <?php 
                            $icon = $card_1['icon'];
                            $card_title = $card_1['title'];
                            $card_desc = $card_1['description'];
                        ?>

                        <div class="col col-medium-4">
                            <div class="service__content service__content--single">

                                <?php if(!empty($icon)): ?>

                                    <picture class="service__img">

                                        <img src="<?php echo esc_url($icon); ?>" alt="card-icon" />

                                    </picture>

                                <?php endif; ?>

                                <?php if(!empty($card_title)): ?>

                                    <h3 class="service__content-title">

                                        <?php echo esc_html($card_title); ?>

                                    </h3>

                                    <?php endif; ?>


                                <?php if(!empty($card_desc)): ?>

                                    <p class="sercice__content-desc">

                                        <?php echo esc_html($card_desc); ?>

                                    </p>

                                <?php endif; ?>

                            </div>
                        </div>

                        <?php endif; ?>
                    <!-- End Card 1 -->

                    <div class="col col-medium-4">

                    <!-- Card 2 -->
                    <?php if(!empty($card_2)): ?>

                        <?php 
                            $icon = $card_2['icon'];
                            $card_title = $card_2['title'];
                            $card_desc = $card_2['description'];
                        ?>

                            <div class="service__content">

                                <?php if(!empty($icon)): ?>

                                    <picture class="service__img">

                                        <img src="<?php echo esc_url($icon); ?>" alt="card-iconcard-icon" />

                                    </picture>

                                <?php endif; ?>

                                <?php if(!empty($card_title)): ?>

                                    <h3 class="service__content-title">

                                        <?php echo esc_html($card_title); ?>

                                    </h3>

                                    <?php endif; ?>


                                <?php if(!empty($card_desc)): ?>

                                    <p class="sercice__content-desc">

                                        <?php echo esc_html($card_desc); ?>

                                    </p>

                                <?php endif; ?>

                            </div>

                        <?php endif; ?>
                    <!-- End Card 2 -->

                    <!-- Card 3 -->
                    <?php if(!empty($card_3)): ?>

                        <?php 
                            $icon = $card_3['icon'];
                            $card_title = $card_3['title'];
                            $card_desc = $card_3['description'];
                        ?>

                            <div class="service__content service__content--double">

                                <?php if(!empty($icon)): ?>

                                    <picture class="service__img">

                                        <img src="<?php echo esc_url($icon); ?>" alt="card-icon" />

                                    </picture>

                                <?php endif; ?>

                                <?php if(!empty($card_title)): ?>

                                    <h3 class="service__content-title">

                                        <?php echo esc_html($card_title); ?>

                                    </h3>

                                    <?php endif; ?>


                                <?php if(!empty($card_desc)): ?>

                                    <p class="sercice__content-desc">

                                        <?php echo esc_html($card_desc); ?>

                                    </p>

                                <?php endif; ?>

                            </div>

                        <?php endif; ?>
                    <!-- End Card 3 -->

                    </div>

                    <!-- Card 4 -->
                    <?php if(!empty($card_4)): ?>

                        <?php 
                            $icon = $card_4['icon'];
                            $card_title = $card_4['title'];
                            $card_desc = $card_4['description'];
                        ?>

                        <div class="col col-medium-4">
                            <div class="service__content service__content--single">

                                <?php if(!empty($icon)): ?>

                                    <picture class="service__img">

                                        <img src="<?php echo esc_url($icon); ?>" alt="card-icon" />

                                    </picture>

                                <?php endif; ?>

                                <?php if(!empty($card_title)): ?>

                                    <h3 class="service__content-title">

                                        <?php echo esc_html($card_title); ?>

                                    </h3>

                                    <?php endif; ?>


                                <?php if(!empty($card_desc)): ?>

                                    <p class="sercice__content-desc">

                                        <?php echo esc_html($card_desc); ?>

                                    </p>

                                <?php endif; ?>

                            </div>
                        </div>

                        <?php endif; ?>
                    <!-- End Card 4 -->

                </div>
            </div>

        <?php endif; ?>

    </div>
</section>