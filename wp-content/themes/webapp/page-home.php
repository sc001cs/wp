<?php
/**
    Template Name: Home Page
 */

// Get the fields
$first_btn_text     = get_post_meta( 49, 'first_btn_text', true);
$first_text         = get_post_meta( 49, 'first_text', true);
$first_title        = get_post_meta( 49, 'first_title', true);
$second_btn_text    = get_post_meta( 49, 'second_btn_text', true);
$second_text        = get_post_meta( 49, 'second_text', true);
$second_title       = get_post_meta( 49, 'second_title', true);

get_header(); ?>

<!-- Slider -->

<div class="slidercontainer">
    <div id="mainslider" class="owl-carousel">

        <div class="item">
            <div class="slidecaption">
                <h2><?php  echo $first_title ?></h2>
                <h4><?php  echo $first_text ?></h4>
                <p><a class="btn btn-slide" href="#"><?php  echo $first_btn_text ?></a>
                </p>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slider/1.jpg" alt="" />
        </div>

        <div class="item">
            <div class="slidecaption">
                <h2><?php  echo $second_title ?></h2>
                <h4><?php  echo $second_text ?></h4>
                <p><a class="btn btn-slide" href="#"><?php  echo $second_btn_text ?></a>
                </p>
            </div>
            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/slider/2.jpg" alt="" />
        </div>

        <div class="item">
            <div class="slidecaption">
                <h2>SSD VPS. IN THE CLOUD.</h2>
                <h4>we deliver what you need</h4>
                <p><a class="btn btn-slide" href="#">More Info</a>
                </p>
            </div>
            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/slider/3.jpg" alt="" />
        </div>

        <div class="item">
            <div class="slidecaption">
                <h2>MANAGED DEDICATED SERVERS</h2>
                <h4>24/7/365 Server Support</h4>
                <p><a class="btn btn-slide" href="#">Order Now</a>
                </p>
            </div>
            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/slider/4.jpg" alt="" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="mainslider-nav" class="owl-carousel">
                <div class="item"><i class="fa fa-rocket"></i>SHARED HOSTING</div>
                <div class="item"><i class="fa fa-line-chart"></i>RESELLER HOSTING</div>
                <div class="item"><i class="fa fa-cloud"></i>CLOUD VPS</div>
                <div class="item"><i class="fa fa-tasks"></i>DEDICATED SERVERS</div>
            </div>
        </div>
    </div>
</div>
<!-- End of Slider -->

<!--  Features -->
<section class="features">
    <div class="row">
        <div class="col-sm-12">
            <h2>We guarantee our commitment to quality</h2>
            <span>Philanthropy think tank, approach Martin Luther King Jr., agency</span>
        </div>
    </div>

    <div class="row spacing-70">
        <div class="col-sm-4">
            <div class="feature wow zoomIn" data-wow-delay="0.2s">
                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/rocket.png" alt="" />
                <h4>Your Website Faster</h4>
                <p>Sustainable, liberal facilitate change movements outcomes Millennium Development Goals.</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="feature wow zoomIn" data-wow-delay="0.4s">
                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/ssd.png" alt="" />
                <h4>SSD Drives</h4>
                <p>John Lennon, involvement Gandhi, working alongside cornerstone. Arab Spring; honesty save lives think.</p>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="feature wow zoomIn" data-wow-delay="0.6s">
                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/secure.png" alt="" />
                <h4>Highest Data Security</h4>
                <p>Respond our grantees and partners, youth, fight against malnutrition experience in the field detection.</p>
            </div>
        </div>

    </div>
</section>
<!-- End of Features -->

<!--  Statistics -->
<section class="statistics">
    <div class="row">
        <div class="col-sm-12">
            <h2>A few <i class="fa fa-heart"></i> lovely stats</h2>
            <p>Synthesize inclusive capitalism, global health clean water grantees nonprofit equal opportunity.</p>
        </div>
    </div>

    <div class="row spacing-70">

        <div class="col-sm-3">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p id="myStat1" data-dimension="175" data-animationstep="0.5" data-text="5513" data-width="25" data-fontsize="29" data-percent="64" data-fgcolor="#DE6262" data-bgcolor="#E1E3E4" data-fill="#CECECE"></p>
                <span>Deployed Servers</span>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <p id="myStat2" data-dimension="175" data-animationstep="0.5" data-text="20510" data-width="25" data-fontsize="29" data-percent="46" data-fgcolor="#DE6262" data-bgcolor="#E1E3E4" data-fill="#CECECE"></p>
                <span>Total Clients</span>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <p id="myStat3" data-dimension="175" data-animationstep="0.5" data-text="7028" data-width="25" data-fontsize="29" data-percent="38" data-fgcolor="#DE6262" data-bgcolor="#E1E3E4" data-fill="#CECECE"></p>
                <span>Days of Uptime</span>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="wow fadeInUp" data-wow-delay="0.4s">
                <p id="myStat4" data-dimension="175" data-animationstep="0.5" data-text="4649" data-width="25" data-fontsize="29" data-percent="55" data-fgcolor="#DE6262" data-bgcolor="#E1E3E4" data-fill="#CECECE"></p>
                <span>Happy Resellers</span>
            </div>
        </div>

    </div>
</section>
<!-- End of Statistics -->

<div class="testimonials gray">
    <div class="row">
        <div class="col-sm-12">
            <h3>What Clients Think</h3>
            <p>Foundation, Jane Addams John Lennon local solutions institutions action.</p>

            <div id="testimonials-carousel" class="owl-carousel">

                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonialimg"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/testimonial1.jpg" alt="" />
                        </div>
                        <p>Future social movement carbon emissions reductions voice; foster reduce child mortality measures theory of social change emergent women and children. Life-expectancy gender rights safeguards save lives social analysis dignity health developing nations. </p>
                        <div class="whoclient">
                            <h5>Alvaro DeMichelis, Founder of <a href="">Global Corp.</a></h5>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonialimg"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/testimonial2.jpg" alt="" />
                        </div>
                        <p>International tackle working alongside. Economic security, significant invest, Ford Foundation respect public service crowdsourcing research affordable health. Philanthropy equal opportunity assessment expert accelerate United Nations environmental, poverty, political, public.</p>
                        <div class="whoclient">
                            <h5>Bjorn Swift, CEO of <a href="">Campaign Ltd.</a></h5>
                        </div>

                    </div>
                </div>


                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonialimg"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/testimonial3.jpg" alt="" />
                        </div>
                        <p>Save the world citizens of change; medicine immunize, convener design thinking global network Kickstarter empowerment prevention effectiveness. Service improving quality youth incubation foster. Expanding community ownership, urban experience in the field scalable</p>
                        <div class="whoclient">
                            <h5>Bill Good, Chairman of <a href="">Solution S.A.</a></h5>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php
get_footer(); ?>
