<?php 
    $logo_list = get_sub_field('logo_list');
?>

<?php if(!empty($logo_list)): ?>

    <section class="client">
        <div class="wrapper">
            <div class="row">

                <ul class="client__inner">

                    <?php foreach($logo_list as $item): ?>
                        
                        <?php 
                            $image = $item['image'];

                            $image['alt'] === "" ? $image['alt'] = "QDN" : "";
                        ?>

                        <?php if(!empty($image)): ?>

                            <li class="client__logo">
                                <picture>

                                    <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>">

                                </picture>
                            </li>
                    
                        <?php endif; ?>
                    
                    <?php endforeach; ?>

                </ul>

            </div>
        </div>
    </section>

<?php endif; ?>