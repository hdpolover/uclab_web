<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">List Gallery</h2>
    </div>
    <div class="col-4">
        <a href="<?= site_url('dashboard/add-new-gallery'); ?>" class="btn btn-primary float-right">Add new gallery</a>
    </div>
</div>
<!-- Content
    ============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container-fluid clearfix">

            <div class="grid-filter-wrap">

                <!-- Portfolio Filter
                    ============================================= -->
                <ul class="grid-filter" data-container="#portfolio">
                    <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                    <li><a href="#" data-filter=".pf-abstract-art">Abstract Art</a></li>
                </ul><!-- .grid-filter end -->

            </div>

            <!-- Portfolio Items
                ============================================= -->
            <div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">

                <article class="portfolio-item col-lg-1-5 col-md-4 col-sm-6 col-12 pf-music-instrument pf-abstract-art">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="<?= base_url(); ?>assets/images/portfolio/4/1.jpg" alt="Open Imagination">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                    <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                        </div>
                    </div>
                </article>

            </div><!-- #portfolio end -->

        </div>
    </div>
</section><!-- #content end -->