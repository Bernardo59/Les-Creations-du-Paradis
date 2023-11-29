<?php get_header(); ?>

<section class="highlight">
    <div class="highlight__carousel">
        <?php
        // Récupération de la page Highlight
        $query = new WP_Query([
            'post_type' => 'page',
            'name' => 'highlight',
            'has_password' => true,
            'post_password' => 'paradis',
        ]);
        // Récupération des médias attachés à la page
        while ($query->have_posts()) : $query->the_post();
            $images = get_attached_media('image', get_post());
        ?>
            <?php foreach ($images as $image) : ?>
                <div class="highlight__carousel-slide">
                    <img src="<?= wp_get_attachment_image_url($image->ID, 'full') ?>" alt="">
                </div>
            <?php endforeach; ?>
        <?php endwhile ?>
        <?php wp_reset_query() ?>
    </div>
</section>

<section class="content">
    <section class="products">
        <h1 class="products__title">Les produits</h1>
        <div class="products__slct">
            <?php wp_nav_menu([
                'theme_location' => 'products',
                'container' => false,
                'menu_class' => 'products__menus',
            ]);
            ?>
        </div>


        <?php
        $products = wc_get_products([
            'limit' => 10,
            'orderby' => 'date',
            'order' => 'DESC',
            'return' => 'object',
        ]);
        ?>
        <div class="products__grid">
            <?php foreach ($products as $product) : ?>
                <a href="<?= $product->get_permalink() ?>" class="products__card">
                    <div class="high_card__content">
                        <div class="high_card__product-img">
                            <img src="<?= woocommerce_get_product_thumbnail() ?>" alt="" class="">
                        </div>
                        <div class="high_card__product-price"><?= $product->get_price() ?> €</div>
                    </div>
                    <div class="high_card__infos">
                        <div class="high_card__infos-description"><?= $product->get_short_description() ?></div>
                    </div>
                </a>
            <?php endforeach ?>
            <?php wp_reset_query() ?>
        </div>
    </section>

    <section class="services">
        <h1 class="services__title">Nos services</h1>
        <div class="services__container">
            <div class="services__house">
                <div class="services__icon">
                    <img src="<?= get_template_directory_uri() . '/assets/svg/icon_house.svg' ?>" class="services__svg" alt="">
                </div>
                <div class="services__content">
                    <h4 class="service__content-title">Fait maison</h4>
                </div>
            </div>
            <div class="services__local">
                <div class="services__icon">
                    <img src="<?= get_template_directory_uri() . '/assets/svg/icon_local.svg' ?>" class="services__svg" alt="">
                </div>
                <div class="services__content">
                    <h4 class="service__content-title">Produits locaux</h4>
                </div>
            </div>
            <div class="services__hand">
                <div class="services__icon">
                    <img src="<?= get_template_directory_uri() . '/assets/svg/icon_hand.svg' ?>" class="services__svg" alt="">
                </div>
                <div class="services__content">
                    <h4 class="service__content-title">Fabriqué à la main</h4>
                </div>
            </div>
        </div>
    </section>

    <?php
    $query = new WP_Query([
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
    ]);
    ?>

    <section class="blog">
        <h1 class="blog__title">Les derniers articles du blog</h1>
        <div class="blog__grid">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <div class="blog__card">
                    <a href="<?= the_permalink() ?>">
                        <div class="blog__card-content">
                            <div class="blog__card-thumbnail">
                                <?php the_post_thumbnail('post-thumbnail'); ?>
                            </div>
                            <div class="blog__card-title"><?= get_the_title() ?></div>
                        </div>
                        <div class="blog__card-infos">
                            <div class="blog__card-date">
                                <?php
                                $day = get_the_date('d');
                                $month = get_the_date('M');
                                $year = get_the_date('Y');
                                ?>
                                <div class="blog__card-date-day"><?= $day ?></div>
                                <div class="blog__card-date-month-year">
                                    <p class="blog__card-date-month"><?= $month ?></p>
                                    <p class="blog__card-date-year"><?= $year ?></p>
                                </div>

                            </div>
                            <div class="blog__card-infos-border">
                                <p class="blog__card__infos-description"><?= get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
    </section>
</section>

</section>

<?php get_footer(); ?>