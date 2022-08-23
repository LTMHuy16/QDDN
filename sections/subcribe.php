<?php 
    $title = get_sub_field('title');
    $desc = get_sub_field('description');
    $form = get_sub_field('subcribe_form');
?>

<section class="contact">
    <div class="wrapper">
        <div class="row">
            <div class="col col-smallest-12">

                <div class="contact__head">

                    <?php if(!empty($title)): ?>

                        <h3 class="contact__title">

                            <?php echo esc_html($title); ?>

                        </h3>

                    <?php endif; ?>

                    <?php if(!empty($desc)): ?>

                        <p class="contact__desc">

                            <?php echo esc_html($desc); ?>
                        
                        </p>

                    <?php endif; ?>

                </div>

                <!-- Form -->
                <div class="contact__form">

                    <?php 

                        if(!empty($form)) {

                            $form_id = $form->id;
                            $form_title = $form->title;

                            if(!empty($form_id) && !empty($form_title)) {
                                echo do_shortcode( '[contact-form-7 id="'.$form_id.'" title="'.$form_title.'"]' ); 
                            };
                        }

                    ?>

                </div>
                <!-- End Form -->

            </div>
        </div>
    </div>
</section>