<?php 
    $title = get_sub_field('title');
    $desc = get_sub_field('description');
    $members = get_sub_field('team_card_list');
    $bg_icon = get_sub_field('bg_icon');

    if (!empty($bg_icon)) {
        $bg_icon_link = "style='background-image: url(". $bg_icon['url']. ")'";
    }
?>

<section class="team padding-bottom" <?php if(!empty($bg_icon_link)){echo $bg_icon_link;} ?> >
    <div class="wrapper">

        <div class="row">
            <div class="col-smallest-12">
                <div class="team__head">
                    
                    <?php if(!empty($title)): ?>

                        <h3 class="team__title">

                            <?php echo esc_html($title); ?>

                        </h3>

                    <?php endif; ?>


                    <?php if(!empty($desc)): ?>

                            <p class="team__desc">

                                <?php echo esc_html($desc); ?>
                            
                            </p>

                    <?php endif; ?>
                    
                </div>
            </div>
        </div>


        <?php if(!empty($members)): ?>

            <div class="row row-medium-flex">

                <?php foreach($members as $member): ?>

                    <?php 
                        $portrait = $member['member_portrait'];
                        $name = $member['name'];
                        $position = $member['member_position'];
                        $social_icons = $member['social_icons'];

                        $portrait['alt'] === "" ? $portrait['alt'] = "QDN" : "";
                    ?>

                    <div class="col col-medium-6 col-wide-4">
                        <div class="team__card">

                            <?php if(!empty($portrait)): ?>
                            
                                <figure class="team__img">

                                    <img src="<?php echo esc_url($portrait['url']) ?>" alt="<?php echo esc_attr($portrait['alt']) ?>" />

                                </figure>

                            <?php endif; ?>

                            <div class="team__card-content">

                                <?php if(!empty($name)): ?>

                                    <h4 class="team__name">

                                        <?php echo esc_html($name); ?>

                                    </h4>

                                <?php endif; ?>

                                <?php if(!empty($position)): ?>

                                    <span class="team__position">

                                        <?php echo esc_html($position); ?>

                                    </span>

                                <?php endif; ?>


                                <?php if(!empty($social_icons)): ?>

                                    <ul class="team__socials">

                                        <?php foreach($social_icons as $item): ?>
                                            <?php 
                                                $social_type = $item['icon_type'];
                                                $social_link = $item['social_link'];
                                            ?>
                                            
                                            <?php if(!empty($social_type) && !empty($social_link)): ?>

                                                <li class="team__social">
                                                    <a href="<?php echo esc_url($social_link) ?>" class="team__social-link">
                                                        <span>
                                                            <i class="fa-brands <?php echo esc_attr($social_type) ?> fa-lg"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                            <?php endif; ?>
                                            
                                        <?php endforeach; ?>
                                    </ul>

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>
</section>