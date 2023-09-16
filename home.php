
<?php 
/*
* Template Name: Homepage
*/
get_header(); 
?>
 <section class="banner__section" style="background-image: url(<?php echo get_bloginfo('template_directory')?>/src/img/bgd.png);">
            <div class="container">
            <div class="banner_details">
                    <div class="left__detail col-lg-6">
                        <h2 class="banner__box-uptitle"><?php the_field('title_bann'); ?></h2>
                        <div class="banner__box-text">
                        <?php the_field('sub_bann'); ?>
                        </div>
                    </div>
                    <div class="right__detail-pdg col-lg-6"  id="anchor-direct">
                        <div class="right__detail">
                        <?php the_field('contactform'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="resources__section" id="services">
            <div class="container">
                <h2 class="resources__title"><?php the_field('title_res'); ?></h2>
                <p class="resources__text"><?php the_field('subtitle_res'); ?></p>
                <div class="resources__wrapper">
                    <div class="resources__box-content">
                        <div class="resources__box-width">
                        <div class="resources__image">
                            <img src="<?php echo get_bloginfo('template_directory')?>/src/img/res_icon.png" alt="">
                        </div>
                        
                        <h2 class="resources__box-title"><?php echo ( get_field('boxs-group')['boxone-title'] );?></h2>
                        <p class="resources__box-text"><?php echo ( get_field('boxs-group')['boxone-sub'] );?></p>
                        </div>
                    </div>
                    <div class="resources__box-content">
                        <div class="resources__box-width">
                        <div class="resources__image">
                            <img src="<?php echo get_bloginfo('template_directory')?>/src/img/res_icon_gr.png" alt="">
                        </div>
                        <h2 class="resources__box-title"><?php echo ( get_field('boxs-group')['boxtwo-title'] );?></h2>
                        <p class="resources__box-text"><?php echo ( get_field('boxs-group')['boxtwo-sub'] );?></p>
                        </div>
                    </div>
                    <div class="resources__box-content">
                        <div class="resources__box-width">
                        <div class="resources__image">
                            <img src="<?php echo get_bloginfo('template_directory')?>/src/img/res_icon_custom.png" alt="">
                        </div>
                        <h2 class="resources__box-title"><?php echo ( get_field('boxs-group')['boxthree-title'] );?></h2>
                        <p class="resources__box-text"><?php echo ( get_field('boxs-group')['boxthree-sub'] );?></p>
                        </div>
                    </div>
                    <div class="resources__box-content">
                        <div class="resources__box-width">
                        <div class="resources__image">
                            <img src="<?php echo get_bloginfo('template_directory')?>/src/img/res_iconn.png" alt="">
                        </div>
                        <h2 class="resources__box-title"><?php echo ( get_field('boxs-group')['boxfour-title'] );?></h2>
                        <p class="resources__box-text"><?php echo ( get_field('boxs-group')['boxfour-sub'] );?></p>
                        </div>
                    </div>
                    <div class="resources__box-content">
                        <div class="resources__box-width">
                        <div class="resources__image">
                            <img src="<?php echo get_bloginfo('template_directory')?>/src/img/res_icon_deal.png" alt="">
                        </div>
                        <h2 class="resources__box-title"><?php echo ( get_field('boxs-group')['boxfive-title'] );?></h2>
                        <p class="resources__box-text"><?php echo ( get_field('boxs-group')['boxfive-sub'] );?></p>
                        </div>
                    </div>
                    <div class="resources__box-content">
                        <div class="resources__box-width">
                        <div class="resources__image">
                            <img src="<?php echo get_bloginfo('template_directory')?>/src/img/res_icon_security.png" alt="">
                        </div>
                        <h2 class="resources__box-title"><?php echo ( get_field('boxs-group')['boxsix-title'] );?></h2>
                        <p class="resources__box-text"><?php echo ( get_field('boxs-group')['boxsix-sub'] );?></p>
                        </div>
                    </div>
                </div>
                <div class="resources__button">
                    <?php dynamic_sidebar('jetztbuttons');?>
                </div>
            </div>
        </section>

        <section id="technologies" class="techno__section" style="background-image: url(<?php echo get_bloginfo('template_directory')?>/src/img/technoss.png);">
            <div class="container">
                <h2 class="techno__title"><?php the_field('title_tech'); ?></h2>
                <p class="techno__text"><?php the_field('subtitle_tech'); ?></p>
                    <div class="techno__wrapper">
                        <div class="techno__nav-buttons">
                            <ul class="listbtn">
                                <li>
                                    <a data-type="item-1" class="active_accordion">Frontend</a>
                                </li>
                                <li>
                                    <a data-type="item-2">Backend</a>
                                </li>
                                <li>
                                    <a data-type="item-3">Mobile</a>
                                </li>
                                <li>
                                    <a data-type="item-4">Database</a>
                                </li>
                                <li>
                                    <a data-type="item-5">CMS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="wrapper_date">
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['fontend-oneimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['fontend-onetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['fontend-twoimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['fontend-twotxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['fontend-threeimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['fontend-threetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['fontend-fourimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['fontend-fourtxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['fontend-fiveimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['fontend-fivetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-1 active col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['fontend-siximg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['fontend-sixtxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['backend-oneimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['backend-onetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['backend-twoimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['backend-twotxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['backend-threeimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['backend-threetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['backend-fourimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['backend-fourtxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-3 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['mobile-oneimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['mobile-onetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-4 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['database-oneimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['database-onetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-4 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['database-twoimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['database-twotxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-4 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['database-threeimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['database-threetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-4 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['database-fourimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['database-fourtxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['cms-oneimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['cms-onetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['cms-twoimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['cms-twotxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['cms-threeimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['cms-threetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['cms-fourimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['cms-fourtxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['cms-fiveimg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['cms-fivetxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="item item-5 col-lg-2 col-md-4 col-sm-6">
                            <div class="wdth">
                            <div class="content_banner">
                                <div class="col-sm-12">
                                    <div class="paragraph-section">
                                    <img src="<?php echo ( get_field('technologien')['cms-siximg'] );?>" alt="">
                                    <h2 class="techno__box-title"><?php echo ( get_field('technologien')['cms-sixtxt'] );?></h2>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="techno__button">
            <?php dynamic_sidebar('jetztbuttons');?>
            </div>
        </div>
    </section>

    <section class="client-wrapper" id="fallstudie"> 
        <div class="container">
            <div class="row-custom">
                <div class="col-lg-5 leftside_clientw">
                    <h1><?php the_field('title_client'); ?></h1>
                    <p><?php the_field('subtitle_client'); ?></p>
                    <h3><?php the_field('under_subc'); ?></h3>
                </div>
                <div class="col-lg-7 rightside_clientw">
                    <div class="image desktopvv">
                        <img src="<?php the_field('rightside_img'); ?>" alt="">
                    </div>
                    <div class="image mobilevv">
                        <img src="<?php the_field('rightside_img-mobile'); ?>" alt="">
                    </div>
                    <div class="box_overimg" id="projekte">
                        <?php dynamic_sidebar('button-overimg');?>
                        <h3><?php the_field('over_imgtwo'); ?></h3>
                        <?php the_field('over_imgthree'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="slide_section">
        <div class="container">
            <div class="slide__partner">
                <div class="swiper mySwiper mySwiper1">
                    <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner1'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner2'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner3'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner4'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner5'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner6'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner7'); ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__details">
                            <img src="<?php the_field('partner8'); ?>" alt="">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="funktioniert" class="funktion__section" style="background-image: url(<?php echo get_bloginfo('template_directory')?>/src/img/technoss-rot.png);">
        <div class="container">
            <h2 class="funktion__title"><?php the_field('title_funk'); ?></h2>
            <p class="funktion__text"><?php the_field('subtitle_funk'); ?></p>
            <div class="funktion__wrapper">
                <div class="funktion__box-width">
                <h1 class="funktion__number">1</p></h1>
                <div class="mobile-wrapp">
                <h2 class="funktion__box-title"><?php the_field('box1_title'); ?></h2>
                <p class="funktion__box-text"><?php the_field('box1_sub'); ?></p>
                </div>
                </div>
                <div class="funktion__box-width">
                <h1 class="funktion__number">2</p></h1>
                <div class="mobile-wrapp">
                <h2 class="funktion__box-title"><?php the_field('box2_title'); ?></h2>
                <p class="funktion__box-text"><?php the_field('box2_sub'); ?></p>
                </div>
                </div>
                <div class="funktion__box-width">
                <h1 class="funktion__number">3</p></h1>
                <div class="mobile-wrapp">
                <h2 class="funktion__box-title"><?php the_field('box3_title'); ?></h2>
                <p class="funktion__box-text"><?php the_field('box3_sub'); ?></p>
                </div>
                </div>
                <div class="funktion__box-width">
                <h1 class="funktion__number">4</p></h1>
                <div class="mobile-wrapp">
                <h2 class="funktion__box-title"><?php the_field('box4_title'); ?></h2>
                <p class="funktion__box-text"><?php the_field('box4_sub'); ?></p>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="we__section" id="about">
        <div class="container">
            <div class="we__wrapper">
                <div class="we_leftside">
                    <div class="desktopv"><img src="<?php the_field('we_sectionimg'); ?>" alt=""></div>
                    <div class="mobilev"><img src="<?php the_field('we_img_mobile'); ?>" alt=""></div>
                </div>
                <div class="we_rightside">
                    <h2 class="we__box-title"><?php the_field('we_rightp'); ?></h2>
                    <h3><?php the_field('we_rightcont'); ?></h3>
                </div>
            </div>
        </div>
    </section>

    <section id="contactusf" class="freee__section" style="background-image: url(<?php echo get_bloginfo('template_directory')?>/src/img/bgd.png);">
        <div class="container">
            <div class="free__wrapper">
                <div class="free_leftside col-lg-6">
                <h2 class="free__box-title"><?php the_field('free_stitle'); ?></h2>
                    <p class="free__box-text"><?php the_field('free_ssub'); ?></p>
                </div>
                <div class="free_rightside-pdg col-lg-6">
                    <div class="free_rightside">
                    <?php the_field('contactform'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>