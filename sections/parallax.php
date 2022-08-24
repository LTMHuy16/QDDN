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

                            <span class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg>
                            </span>
                        </a>
                    </div>

                <?php endif; ?>


            </div>
        </div>
    </div>
</section>