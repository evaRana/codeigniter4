<?= $this->extend('landing_layout/layout_landing') ?>
<?= $this->section('content') ?>

<style>
    .fwheight {
        height: 157px !important;
    }
</style>

<section class="landing-home" id="home">
    <div class="container">
        <div class="landing-center landing-center-responsive title-padding">
            <div class="main-content-home">
                <div class="title-content">
                    <h1>Build Your Future with Our <span class="animation-line">MLM </span> Platform </h1>
                    <p>Join the fastest-growing network and earn daily income through our smart, secure MLM system.
                    </p>
                </div>

            </div>

            <div class="container-fluid">

                <div class="landing_first_section_img">

                    <div class="img-set1"><img class="img-fluid"
                            src="<?= base_url('assets/'); ?>landing-img/screen2.png" alt=""></div>
                    <div class="img-set2"><img class="img-fluid"
                            src="<?= base_url('assets/'); ?>landing-img/screen3.png" alt=""></div>
                    <div class="img-set3"><img class="img-fluid"
                            src="<?= base_url('assets/'); ?>landing-img/screen1.png" alt=""></div>
                </div>
            </div>

            <div class="bottom-img-1"></div>

            <div class="bottom-img-2"></div>
        </div><a class="tap-down" href="#layout"><i class="icon-angle-double-down"> </i></a>

    </div>
    <div class="round-tringle">
        <div class="bg_circle1"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape1.png" alt="">
        </div>

        <div class="bg_circle2"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape2.png
                " alt=""></div>

        <div class="bg_circle3">

            <div class="d-flex"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape3.png" alt="">
                <h4>Trendy</h4>
            </div>
        </div>
        <div class="bg_circle4"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape4.png" alt="">
        </div>
        <div class="bg_circle5"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape5.png" alt="">
        </div>
        <div class="bg_circle6"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape6.png" alt="">
        </div>
        <div class="bg_circle7"><img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/shape7.png" alt="">
        </div>
    </div>
</section>
<!--home-section-end-->
<!--page-section-start-->
<section class="section-py-space landing-page-design" id="mlm-features">
    <div class="title-style wow pulse">
        <h5 class="main-title">Powerful MLM Features
            <span class="description-title">Automated • Transparent • Scalable</span>
        </h5>
    </div>

    <div class="container-fluid fluid-space">
        <div class="row justify-content-center">

            <!-- Feature 1 -->
            <div class="col-lg-4 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.1s">
                <div class="layout-box">
                    <div class="layout-name text-center">
                        <h6>Instant Wallet Withdrawals</h6>
                    </div>
                    <div class="img-wrraper text-center">
                        <img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/instant-wallet.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-lg-4 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.2s">
                <div class="layout-box mt-4 mt-sm-0">
                    <div class="layout-name text-center">
                        <h6>Smart Income Distribution</h6>
                    </div>
                    <div class="img-wrraper text-center">
                        <img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/smartincome.png" alt="">
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-lg-4 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.3s">
                <div class="layout-box mt-4 mt-lg-0">
                    <div class="layout-name text-center">
                        <h6>Automated Payout System</h6>
                    </div>
                    <div class="img-wrraper text-center">
                        <img class="img-fluid" src="<?= base_url('assets/'); ?>landing-img/payout.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--page-section-end-->
<!-- frameworks-section-start-->
<section class="section-py-space framework-section" id="frameworks">
    <div class="container-fluid fluid-space">
        <div class="title-style wow pulse">
            <h5 class="main-title">Explore Our Income Opportunities<span class="description-title">Our Incomes</span>
            </h5>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 framworks">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-tab" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <ul class="framework-list">

                            <li class="wow pulse" data-wow-iteration="5" data-wow-duration="0.15s"
                                style="visibility: visible; animation-duration: 0.15s; animation-iteration-count: 5;">
                                <div class="framework-bg"><img
                                        src="<?= base_url('assets/'); ?>landing-img/direct.png" alt=""></div>
                                <h4>Direct Income</h4>

                            </li>
                            <li class="wow pulse" data-wow-iteration="5" data-wow-duration="0.16s"
                                style="visibility: visible; animation-duration: 0.16s; animation-iteration-count: 5;">
                                <div class="framework-bg"><img src="<?= base_url('assets/'); ?>landing-img/level.png"
                                        alt=""></div>
                                <h4>Level Income </h4>
                            </li>
                            <li class="wow pulse" data-wow-iteration="5" data-wow-duration="0.17s"
                                style="visibility: visible; animation-duration: 0.17s; animation-iteration-count: 5;">
                                <div class="framework-bg"><img src="<?= base_url('assets/'); ?>landing-img/roi.png"
                                        alt=""></div>
                                <h4>ROI Income</h4>
                            </li>
                            <li class="wow pulse" data-wow-iteration="5" data-wow-duration="0.18s" style="visibility: visible; animation-duration: 0.18s; animation-iteration-count: 5;">
                                <div class="framework-bg"><img src="<?= base_url('assets/'); ?>landing-img/teams.png"
                                        alt=""></div>
                                <h4>Team Bonus</h4>
                            </li>

                            <li class="wow pulse d-none" data-wow-iteration="5" data-wow-duration="0.18s" style="visibility: visible; animation-duration: 0.18s; animation-iteration-count: 5;">
                                <div class="framework-bg fwheight"><img src="<?= base_url('assets/'); ?>landing-img/pug.png"
                                        alt=""></div>
                                <h4>Rewards & Ranks</h4>
                            </li>


                            <!-- <li class="wow pulse" data-wow-ite r ation="5" data-wow-duration="0.19s"
                                style="visibility: visible; animation-duration: 0.19s; animation-iteration-count: 5;">
                                <div class="framework-bg fwheight"><img src="<?= base_url('assets/'); ?>landing-img/npm.png"
                                        alt=""></div>
                                <h4>Rewards & Ranks</h4>
                            </li> -->

                            <li class="wow pulse" data-wow-iteration="5" data-wow-duration="0.20s"
                                style="visibility: visible; animation-duration: 0.20s; animation-iteration-count: 5;">
                                <div class="framework-bg"><img src="<?= base_url('assets/'); ?>landing-img/boost.png"
                                        alt=""></div>
                                <h4>Boost Income</h4>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--frameworks-section-end-->

<!-- features-section-start-->
<section class="section-py-space features-section" id="core-feature">
    <div class="container-fluid fluid-space">
        <div class="row">
            <div class="col-sm-12 wow pulse">
                <div class="title-style wow pulse">
                    <h5 class="main-title">Why Choose Our Platform?<span class="description-title">Unique
                            Features</span></h5>
                </div>
            </div>
        </div>
        <div class="row g-4 g-md-5 feature-content">
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.1s"
                style="visibility: visible;-webkit-animation-duration: 0.1s; -moz-animation-duration: 0.1s; animation-duration: 0.1s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/11.svg" alt="feature-icon"></div>
                    </div>
                    <h5>100% Decentralized Smart Contract</h5>
                    <p class="mb-0">The system runs on blockchain code with no manual control or manipulation.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.2s"
                style="visibility: visible;-webkit-animation-duration: 0.0.2s; -moz-animation-duration: 0.0.2s; animation-duration: 0.0.2s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/21.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Instant Wallet Withdrawals</h5>
                    <p class="mb-0">All earnings are transferred directly to your wallet without any delay or approval.
                    </p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.3s"
                style="visibility: visible;-webkit-animation-duration: 0.3s; -moz-animation-duration: 0.3s; animation-duration: 0.3s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/31.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Global Team Building</h5>
                    <p class="mb-0">Build your network from anywhere in the world with no geographic limits.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.4s"
                style="visibility: visible;-webkit-animation-duration: 0.4s; -moz-animation-duration: 0.4s; animation-duration: 0.4s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/41.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Transparent & Secure System</h5>
                    <p class="mb-0">All transactions are visible on the blockchain, ensuring trust and security.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.5s"
                style="visibility: visible;-webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/51.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Fast Registration</h5>
                    <p class="mb-0">Join within seconds using your wallet – no paperwork, no delays.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.6s"
                style="visibility: visible;-webkit-animation-duration: 0.6s; -moz-animation-duration: 0.6s; animation-duration: 0.6s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/61.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Referral Tracking</h5>
                    <p class="mb-0"> Real-time tracking of your direct and team referrals with detailed stats.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.7s"
                style="visibility: visible;-webkit-animation-duration: 0.7s; -moz-animation-duration: 0.7s; animation-duration: 0.7s;">
                <div class="feature-box common-card bg-feature
                    ">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/71.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Mobile Friendly</h5>
                    <p class="mb-0">Access your dashboard and earnings on any device, anytime.</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 wow fadeInUp animated" data-wow-duration="0.8s"
                style="visibility: visible;-webkit-animation-duration: 8s; -moz-animation-duration: 8s; animation-duration: 8s;">
                <div class="feature-box common-card bg-feature">
                    <div class="feature-icon bg-white">
                        <div><img src="<?= base_url('assets/'); ?>landing-img/81.svg" alt="feature-icon"></div>
                    </div>
                    <h5>Real-Time Reports</h5>
                    <p class="mb-0">View earnings, team structure, and transactions live on your dashboard.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-section-end-->
<!-- support-section-start-->
<section class="section-py-space support-section">
    <div class="support-title">
        <h2 class="text-end">We believe trust, transparency, and support are the pillars of success</h2>
        <p class="text-end">“24/7 smart contract-powered system with community-driven assistance”</p>
        <div class="text-end"> <a class="btn bg-primary f-w-700 support-button" href="#" target="_blank">Smart Contract
                Verified</a></div>
    </div>

    <div class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-12 support-img">
                    <h3>Smart Contract Verified</h3><img class="img-fluid"
                        src="<?= base_url('assets/'); ?>landing-img/unique.png" alt="">
                    <h4>Blockchain-Backed Support</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="marquee d-none">
        <div class="marquee-name">
            <!-- <p class="big-title">Verified Smart Contract</p>
            <p class="big-title">24/7 Support</p> -->
            <p class="big-title">Trusted by Thousands</p>
        </div>
    </div>
</section>

<!-- support-section-end-->
<?= $this->endSection() ?>