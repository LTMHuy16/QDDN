<?php 
    $title = get_sub_field('title');
    $desc = get_sub_field('description');
?>

<section class="info-2">
    <div class="wrapper">
        <div class="row">
            <div class="col col-smallest-12">

                <?php if(!empty($title)): ?>

                    <h3 class="info-2__title">

                        <?php echo esc_html($title); ?>

                    </h3>
                            
                <?php endif; ?>

                
                <?php if(!empty($desc)): ?>

                    <p class="info-2__desc">
                        
                        <?php echo esc_html($desc); ?>

                    </p>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>