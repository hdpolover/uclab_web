<?php if (!empty($hero)) : ?>
    <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <?php foreach ($hero as $key) : ?>
                        <div class="swiper-slide light">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp"><?= $key->name; ?></h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"><?= $key->value; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('<?= base_url(); ?>berkas/hero/<?= $key->image; ?>');"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div class="slide-number">
                    <div class="slide-number-current"></div><span>/</span>
                    <div class="slide-number-total"></div>
                </div>
            </div>

        </div>
    </section>
<?php endif; ?>

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">

        <?php if (!empty($featured_hero)) : ?>
            <div class="promo promo-full promo-border p-5 header-stick bottommargin-lg">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3><?= $featured_hero->name; ?></h3>
                            <span><?= $featured_hero->value; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($featured_list)) : ?>
            <div class="container clearfix">

                <div class="row col-mb-50">
                    <?php foreach ($featured_list as $key) : ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-effect">
                                <div class="fbox-icon">
                                    <a href="#"><i class="<?= $key->image; ?> i-alt"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3><?= $key->name; ?></h3>
                                    <p><?= $key->value; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        <?php endif; ?>
        <div class="clear"></div>
        <div class="line"></div>

        <div class="section mt-0 border-top-0">
            <div class="container clearfix">
                <div class="heading-block center m-0">
                    <h3>Latest from us</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row posts-md col-mb-30">

                <?php if (!empty($collection)) : ?>
                    <?php foreach ($collection as $key) : ?>
                        <?php if (empty($key['primary_asset_contracts'])) : ?>
                            <div class="product col-md-3 col-sm-6 sf-dress">
                                <div class="grid-inner">
                                    <div class="product-image photo">
                                        <a href="#"><img src="<?= !empty($key['featured_image_url']) ? $key['featured_image_url'] : $key['image_url']; ?>" alt="<?= $key['name']; ?>"></a>
                                        <div class="sale-flash badge badge-secondary p-2"><?= $key['stats']['count']; ?> Items</div>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                                <a href="<?= site_url('home/item-detail/' . $key['slug']); ?>" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                            </div>
                                            <div class="bg-overlay-bg bg-transparent"></div>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="<?= site_url('home/item-detail/' . $key['slug']); ?>" data-lightbox="ajax"><?= $key['name']; ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section><!-- #content end -->