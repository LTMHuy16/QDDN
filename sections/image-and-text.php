<?php 
    $title = get_sub_field('title');
    $desc = get_sub_field('description');
    $intro_content = get_sub_field('description');
    $btn_text = get_sub_field('btn_text');
    $btn_link = get_sub_field('btn_link');
    $is_accordion = get_sub_field('use_accordion');
    $bg_img = get_sub_field('bg_img');
    $img_alignment = get_sub_field('img_align');

    $bg_img['alt'] === "" ? $bg_img['alt'] = "QDN" : "";
?>

<section class="about padding-bottom padding-top">
    <div class="wrapper">
        <div class="row row-wide-flex <?php if(!empty($img_alignment)) {echo esc_attr($img_alignment);}  ?>">

            <!-- Background Image -->
            <div class="col col-wide-7">
                
                <?php if(!empty($bg_img)): ?>    

                    <div class="about__ilustration">
                        <picture>

                            <img src="<?php echo esc_url($bg_img['url']) ?>" alt="<?php echo esc_attr($bg_img['alt']) ?>" />

                        </picture>
                    </div>

                <?php endif; ?>
            </div>
            <!-- End Background Image -->
            

            <!-- Content -->
            <div class="col col-wide-5">
                <div class="about__content">


                    <?php if(!empty($title)): ?>

                        <h3 class="about__title">

                            <?php echo $title; ?>

                        </h3>

                    <?php endif; ?>

                    <?php if(!empty($desc)): ?>

                        <p class="about__desc">
                            
                            <?php echo esc_html($desc); ?>

                        </p>

                    <?php endif; ?>
                    
                    <!-- Accordion -->
                    <?php if($is_accordion): ?>
                    
                    <?php  

                        $faq = get_sub_field('faq');

                        if(!empty($faq)):

                            foreach($faq as $item):
                        
                                $question = $item['question'];
                                $answer = $item['answer'];

                                if(!empty($question) && !empty($answer)):
                    ?>
                    
                                    <div class="about__accordion" role="tablist">

                                        
                                        <div class="about__panel">
                                            <h4 class="about__question">
                                                <a class="about__toggle" role="button">
                                                    <span class="about__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 384 512"><path d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"/></svg>
                                                    </span>
                                                    <span>

                                                        <?php echo esc_html($question); ?>

                                                    </span>
                                                </a>
                                            </h4>
                                            <div class="about__answer">
                                                <p class="about__answer-text">

                                                    <?php echo esc_html($answer); ?>

                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                <?php endif; ?>
                    
                            <?php endforeach; ?>

                        <?php endif; ?>

                    <?php endif; ?>
                    <!-- End Accordion -->


                    <?php if(!empty($btn_text) && !empty($btn_link)): ?>
                    
                        <div class="intro__btn">
                            <a href="<?php echo esc_url($btn_link); ?>" class="btn btn--sm btn--primary">

                                <?php echo esc_html($btn_text); ?>

                            </a>
                        </div>  
                    
                    <?php endif; ?>

                </div>
            </div>
            <!-- End Content -->

        </div>
    </div>
</section>