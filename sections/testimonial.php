<?php 
    $title = get_sub_field('title');
    $desc = get_sub_field('description');
    $tes_list = get_sub_field('testimonial_list');
    $bg_icon = get_sub_field('bg_icon');

    if (!empty($bg_icon)) {
        $bg_icon_link = "style='background-image: url(". $bg_icon['url']. ")'";
    }
?>

<section class="testimonial" <?php if(!empty($bg_icon_link)){echo $bg_icon_link;} ?> >
    <div class="wrapper">

        <div class="row">
            <div class="col-smallest-12">
                <div class="testimonial__head">
                    
                    <?php if(!empty($title)): ?>
                            
                            <h3 class="testimonial__title">

                                <?php echo esc_html($title); ?>

                            </h3>

                    <?php endif; ?>

                    <?php if(!empty($desc)): ?>
                            
                            <p class="testimonial__desc">

                                <?php echo esc_html($desc); ?>

                            </p>

                    <?php endif; ?>

                </div>
            </div>
        </div>


        <?php if(!empty($tes_list)): ?>
                    
            <div class="row">
                <div class="testimonial__content col col-smallest-12">
                    <div class="testimonial__cards" id="testimonial__carousel">

                        <?php foreach($tes_list as $item): ?>

                            <?php 
                                $mess_icon = $item['icon'];
                                $content = $item['content'];
                                $author_name = $item['author_name'];
                                $author_position = $item['author_position'];

                                $mess_icon['alt'] === "" ? $mess_icon['alt'] = "QDN" : "";
                            ?>

                            <div class="testimonial__card">

                                <?php if(!empty($desc)): ?>

                                    <div class="testimonial__icon">
                                        <picture>

                                            <img src="<?php echo esc_url($mess_icon['url']) ?>" alt="<?php echo esc_attr($mess_icon['alt']) ?>">

                                        </picture>
                                    </div>

                                <?php endif; ?>

                                <?php if(!empty($content)): ?>
                                
                                    <p class="testimonial__card-desc">
                                        "
                                            <?php echo esc_html($content); ?>
                                        "
                                    </p>

                                <?php endif; ?>

                                <?php if(!empty($author_name)): ?>

                                    <h5 class="testimonial__author">
                                        - <?php echo esc_html($author_name); ?> -
                                    </h5>

                                <?php endif; ?>


                                <?php if(!empty($author_position)): ?>

                                    <span class="testimonial__author-job">

                                        <?php echo esc_html($author_position); ?>

                                    </span>

                                <?php endif; ?>

                            </div>

                        <?php endforeach ;?>

                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>
</section>