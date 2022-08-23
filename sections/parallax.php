<?php 
    $title = get_sub_field('title');
    $btn_text = get_sub_field('btn_text');
    $btn_link = get_sub_field('btn_link');

    $bg_img['alt'] === "" ? $bg_img['alt'] = "QDN" : "";
?>

<section class="parallax">
    <div class="wrapper">
        <div class="row row-flex">

            <div class="col col-wide-8">

                <?php if(!empty($title)): ?>
                        
                    <h4 class="parallax__title">

                        <?php echo esc_html($title); ?>

                    </h4>

                <?php endif; ?>

            </div>
            <div class="col col-wide-4">

                <?php if(!empty($btn_link) && !empty($btn_text)): ?>

                    <div class="parallax__btn">
                        <a href="<?php echo esc_url($btn_link); ?>" class="btn btn--sm btn--second btn--icon">
                            
                            <?php echo esc_html($btn_text); ?>

                            <span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>

                <?php endif; ?>


            </div>
        </div>
    </div>
</section>