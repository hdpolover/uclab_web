<!-- Header
		============================================= -->
<header id="header" class="transparent-header floating-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
						============================================= -->
                <div id="logo">
                    <a href="<?= base_url(); ?>" class="standard-logo" data-dark-logo="<?= base_url(); ?>assets/images/logo-dark.png"><img src="<?= base_url(); ?>assets/images/logo.png" alt="Canvas Logo"></a>
                    <a href="<?= base_url(); ?>" class="retina-logo" data-dark-logo="<?= base_url(); ?>assets/images/logo-dark@2x.png"><img src="<?= base_url(); ?>assets/images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Search
							============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                    <!-- Top Cart
							============================================= -->
                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                        <a href="<?= site_url('login'); ?>"><i class="icon-signin"></i></a>
                    </div><!-- #top-cart end -->

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <!-- Primary Navigation
						============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">

                        <li class="menu-item">
                            <a class="menu-link <?= !$this->uri->segment(1) ? 'active' : ''; ?>" href="<?= base_url(); ?>">
                                <div>Home</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?= $this->uri->segment(1) == 'about' ? 'active' : ''; ?>" href="<?= site_url('about'); ?>">
                                <div>About</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?= $this->uri->segment(1) == 'gallery' ? 'active' : ''; ?>" href="<?= site_url('gallery'); ?>">
                                <div>Gallery</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?= $this->uri->segment(1) == 'new-collection' ? 'active' : ''; ?>" href="<?= site_url('new-collection'); ?>">
                                <div>New collection</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?= $this->uri->segment(1) == 'foundation' ? 'active' : ''; ?>">
                                <div>Fondation</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link <?= $this->uri->segment(1) == 'needy-people' ? 'active' : ''; ?>" href="<?= site_url('foundation/needy-people'); ?>">
                                        <div>Needy people</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= $this->uri->segment(1) == 'orphan' ? 'active' : ''; ?>" href="<?= site_url('foundation/orphan'); ?>">
                                        <div>Orphan</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= $this->uri->segment(1) == 'health' ? 'active' : ''; ?>" href="<?= site_url('foundation/health'); ?>">
                                        <div>Health</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= $this->uri->segment(1) == 'education' ? 'active' : ''; ?>" href="<?= site_url('foundation/education'); ?>">
                                        <div>Education</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= $this->uri->segment(1) == 'clean-water' ? 'active' : ''; ?>" href="<?= site_url('foundation/clean-water'); ?>">
                                        <div>Clean Water</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->

                <form class="top-search-form" action="<?= site_url('search'); ?>" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->