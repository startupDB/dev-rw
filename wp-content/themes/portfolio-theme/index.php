<?php
get_header(); ?>

        <div class="fixed-action-btn right-align">
            <a class="btn-large red btn-floating"> <i class="fa fa-send fa-2x white-text fa-stack-1x transparent"></i> </a>
        </div>
        <a href="#nav-mobile" data-activates="nav-mobile" class="button-collapse left-align flexcolumn hide-on-med-and-up flexcenter flextop blue" style="padding-left:2rem; width:100%; position:fixed; Z-index:999" data-pg-collapsed><i class="mdi-navigation-menu white-text small"></i></a>
        <div class="blue flexcenter flexrow" style="position:fixed; max-height:3rem; width:100%; z-index:999" data-pg-collapsed>
            <div class="blue container flexrow flexcenter" style="margin-right:0rem; margin-left:0rem">
                <div class="row flexrow flexend" style="width:100%">
                    <div class="col s12 m4 l12">
                        <div class="nav-wrapper flexrow flexcenter hide-on-small-only flexmiddle" style="height:3rem; width:100%;" data-pg-collapsed>
                            <ul class="hide-on-small-only transparent flexrow flexend flexmiddle" style="width:100%; height:3rem; margin-bottom:0; margin-top:0" data-pg-collapsed>
                                <li class="hide-on-small-only" style="height:3rem;">
                                    <h4 class="white-text hide-on-small-only left-align" style="line-height:3rem;"><?php _e( 'dirk@wolthuis.nl', 'portfolio' ); ?></h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-container navbar-fixed">
            <nav class="flexrow flexbottom flexcenter" data-nav-status="toggle" style="height:9rem">
                <div class="container flexrow flexcenter">
                    <div class="row flexrow flexcenter" style="width:100%; ">
                        <div class="col s12 l12 flexcolumn m12 flexmiddle">
                            <ul id="nav-mobile" class="side-nav hide-on-med-and-up fixed left-align light-blue" style="width:100%; background-color:@ceruleas;">
                                <li class="logo center-align">
</li>
                                <li class="bold">
                                    <a href="#" class="waves-effect waves-teal white-text">
                                        <?php _e( 'First Link', 'portfolio' ); ?>
                                    </a>
                                </li>
                                <li class="bold" data-pg-collapsed>
                                    <a href="#" class="waves-effect waves-teal white-text">
                                        <?php _e( 'Second Link', 'portfolio' ); ?>
                                    </a>
                                </li>
                            </ul>
                            <h4 style="line-height:0.2; margin-left:1.6rem; font-size:2rem; font-weight:400;" class="white-text" href="<?php echo esc_url( get_bloginfo( 'url' ) ); ?>"><?php bloginfo( 'name' ); ?></h4>
                            <div class="nav-wrapper flexrow flexcenter flextop" style="height:3.6rem">
                                <ul class="left hide-on-small-only transparent flexrow in-between" style="width:100%">
                                    <li>
                                        <a href="#">
                                            <?php _e( 'competenties', 'portfolio' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <?php _e( 'werk', 'portfolio' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <?php _e( 'studie', 'portfolio' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <?php _e( 'partners', 'portfolio' ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <?php _e( 'curriculum', 'portfolio' ); ?>
                                        </a>
                                    </li>
                                    <li class="hide-on-small-only">
                                        <a href="#">
                                            <?php _e( 'contact', 'portfolio' ); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="section grey section-overflow-visible flexrow flexcenter">
            <div class="row">
                <div class="container">
                    <div class="flexrow flexcenter" data-pg-name="flexrow">
                        <div class="col m11 s12 l12">
                            <div class="card overflow-visible z-depth-1 darken-1 blue-grey">
                                <div class="card-content white blue-grey-text overflow-visible">
                                    <div class="flexrow flexcenter flexmiddle position-overflow" data-pg-name="flexrow">
                                        <div class="col s12 l10 m10">
                                            <div class="flexcolumn flexmiddle" data-pg-name="flexcolumn">
                                                <img width="151" class="responsive-img image-position" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Dirk%20Hoofd.png">
                                                <span class="card-title image-position"><?php _e( 'Dirk Wolthuis&nbsp;', 'portfolio' ); ?></span>
                                                <p class="image-position"><?php bloginfo( 'description' ); ?></p>
                                                <div class="flexrow image-position padding-flexrow-dw flexcenter">
                                                    <a class="btn waves-effect blue waves-light">
                                                        <?php _e( 'Stuff', 'portfolio' ); ?>
                                                    </a>
                                                    <a class="btn red waves-effect waves-light">
                                                        <?php _e( 'Stuff', 'portfolio' ); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section light-blue section-dw-height flexrow">
            <div class="container flexrow flexcenter">
                <div class="row flexrow flexgrow">
                    <div class="col s12 m6 l3 flexcolumn">
                        <div class="card darken-1 small blue z-depth-2">
                            <div class="card-content card-content red flexcenter flexmiddle flexrow">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-ondernemend.svg" class="responsive-img">
                            </div>
                            <div class="card-image lochmara card-background-image flexrow flexcenter flex-vert-bottom">
                                <div class="caption-transparancy flexrow flexcenter flexmiddle">
                                    <p class="white-text center-text"><?php _e( 'ondernemend', 'portfolio' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 flexcolumn">
                        <div class="card darken-1 small blue z-depth-2">
                            <div class="card-content card-content flexcenter flexmiddle flexrow @sycamore sycamore">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-onderzoekend.svg" class="responsive-img">
                            </div>
                            <div class="card-image waves-light lochmara card-image-background-onderzoekend flexrow flex-vert-bottom flexcenter">
                                <div class="caption-transparancy flexrow flexcenter flexmiddle">
                                    <p class="white-text center-text"><?php _e( 'onderzoekend', 'portfolio' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 flexcolumn">
                        <div class="card darken-1 small blue z-depth-2">
                            <div class="card-content card-content flexcenter flexmiddle flexrow electric-violet">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-creatief.svg" class="responsive-img">
                            </div>
                            <div class="card-image waves-light lochmara card-background-image-crearief flexrow flexcenter flex-vert-bottom">
                                <div class="caption-transparancy flexrow flexcenter flexmiddle center-text">
                                    <p class="white-text"><?php _e( 'creatief', 'portfolio' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3 flexcolumn">
                        <div class="card darken-1 small blue z-depth-2">
                            <div class="card-content card-content flexcenter flexmiddle flexrow golden-fizz">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-verbindend.svg" class="responsive-img">
                            </div>
                            <div class="card-image waves-light lochmara card-image-background-verbindend flexrow flexcenter flex-vert-bottom">
                                <div class="caption-transparancy flexrow flexmiddle flexcenter center-text" data-pg-collapsed>
                                    <p class="white-text"><?php _e( 'verbindend', 'portfolio' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-up-17rem">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="file:///Users/bert/Nitrous/green-tornado-100/www/wordpress/wp-content/themes/portfolio-theme/assets/img/paralax1.jpg">
                </div>
            </div>
        </div>
        <div class="section section-up-17rem pomegranate section-padding-3rem" data-pg-collapsed>
            <div class="container flexrow flexcenter">
                <div class="row flexrow flexcenter" data-pg-collapsed>
                    <div class="col l6 m6 s9 flexcolumn flexmiddle flexcenter">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white blue-grey-text">
                                <div class="flexrow flexcenter flexmiddle" data-pg-name="flexrow">
                                    <div class="col s12 l10 m10">
                                        <div class="flexcolumn flexmiddle" data-pg-name="flexcolumn">
                                            <span class="card-title image-position"><?php _e( 'WERK', 'portfolio' ); ?></span>
                                            <p class="image-position"></p>
                                            <p class="p1"><span class="s1"><?php _e( 'Ik bied creativiteit gecombineerd met een lust voor onderzoek. We kunnen samen het onderste uit de kan halen en gaan niet akkoord met middelmatigheid. Benieuwd wat ik allemaal gemaakt heb? Bekijk mijn portfolio.&nbsp;', 'portfolio' ); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container section-padding-3rem flexcolumn flexmiddle">
                <div class="row flexrow flexcenter">
                    <div class="col s12 l4 m6 flexcolumn">
                        <div class="card darken-1 medium red z-depth-2">
                            <div class="card-image waves-effect red background-image-project1 activator waves-teal">
</div>
                            <div class="card-content white flexrow flexmiddle">
                                <div class="align-left">
                                    <span class="card-title"><?php _e( 'Gameview', 'portfolio' ); ?></span>
                                    <h4><?php _e( 'Nintendo', 'portfolio' ); ?></h4>
                                    <h4><?php _e( '3S', 'portfolio' ); ?></h4>
                                </div>
                            </div>
                            <div class="blue card-reveal-dw white-text" data-pg-collapsed>
                                <span class="card-title text-darken-4 white-text"><?php _e( 'Card Title', 'portfolio' ); ?> <i class="mdi-navigation-close right"></i></span>
                                <p class="white-text"><?php _e( 'Here is some more information about this product that is only revealed once clicked on.', 'portfolio' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 m6">
                        <div class="card darken-1 medium red z-depth-2">
                            <div class="card-image waves-effect red background-image-project1 activator waves-teal">
</div>
                            <div class="card-content white flexcolumn">
                                <div class="align-left">
                                    <span class="card-title"><?php _e( 'Gameview', 'portfolio' ); ?></span>
                                    <h4><?php _e( 'Nintendo', 'portfolio' ); ?></h4>
                                    <h4><?php _e( '3S', 'portfolio' ); ?></h4>
                                </div>
                            </div>
                            <div class="blue card-reveal-dw white-text">
                                <span class="card-title text-darken-4 white-text"><?php _e( 'Card Title', 'portfolio' ); ?> <i class="mdi-navigation-close right"></i></span>
                                <p class="white-text"><?php _e( 'Here is some more information about this product that is only revealed once clicked on.', 'portfolio' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 m6">
                        <div class="card darken-1 medium red z-depth-2" data-pg-collapsed>
                            <div class="card-image waves-effect red background-image-project1 activator waves-teal">
</div>
                            <div class="card-content white flexcolumn flexcenter">
                                <div class="align-left">
                                    <span class="card-title"><?php _e( 'Gameview', 'portfolio' ); ?></span>
                                    <h4><?php _e( 'Nintendo', 'portfolio' ); ?></h4>
                                    <h4><?php _e( '3S', 'portfolio' ); ?></h4>
                                </div>
                            </div>
                            <div class="blue card-reveal-dw white-text">
                                <span class="card-title text-darken-4 white-text"><?php _e( 'Card Title', 'portfolio' ); ?> <i class="mdi-navigation-close right"></i></span>
                                <p class="white-text"><?php _e( 'Here is some more information about this product that is only revealed once clicked on.', 'portfolio' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 m6">
                        <div class="card darken-1 medium red z-depth-2" data-pg-collapsed>
                            <div class="card-image waves-effect red background-image-project1 activator waves-teal">
</div>
                            <div class="card-content white flexcolumn flexcenter">
                                <div class="align-left">
                                    <span class="card-title"><?php _e( 'Gameview', 'portfolio' ); ?></span>
                                    <h4><?php _e( 'Nintendo', 'portfolio' ); ?></h4>
                                    <h4><?php _e( '3S', 'portfolio' ); ?></h4>
                                </div>
                            </div>
                            <div class="blue card-reveal-dw white-text">
                                <span class="card-title text-darken-4 white-text"><?php _e( 'Card Title', 'portfolio' ); ?> <i class="mdi-navigation-close right"></i></span>
                                <p class="white-text"><?php _e( 'Here is some more information about this product that is only revealed once clicked on.', 'portfolio' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 m6" data-pg-collapsed>
                        <div class="card darken-1 medium red z-depth-2">
                            <div class="card-image waves-effect red background-image-project1 activator waves-teal">
</div>
                            <div class="card-content white flexcolumn flexcenter">
                                <div class="align-left">
                                    <span class="card-title"><?php _e( 'Gameview', 'portfolio' ); ?></span>
                                    <h4><?php _e( 'Nintendo', 'portfolio' ); ?></h4>
                                    <h4><?php _e( '3S', 'portfolio' ); ?></h4>
                                </div>
                            </div>
                            <div class="blue card-reveal-dw white-text">
                                <span class="card-title text-darken-4 white-text"><?php _e( 'Card Title', 'portfolio' ); ?> <i class="mdi-navigation-close right"></i></span>
                                <p class="white-text"><?php _e( 'Here is some more information about this product that is only revealed once clicked on.', 'portfolio' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l4 m6" data-pg-collapsed>
                        <div class="card darken-1 medium red z-depth-2">
                            <div class="card-image waves-effect red background-image-project1 activator waves-teal">
</div>
                            <div class="card-content white flexcolumn flexcenter">
                                <div class="align-left">
                                    <span class="card-title"><?php _e( 'Gameview', 'portfolio' ); ?></span>
                                    <h4><?php _e( 'Nintendo', 'portfolio' ); ?></h4>
                                    <h4><?php _e( '3S', 'portfolio' ); ?></h4>
                                </div>
                            </div>
                            <div class="blue card-reveal-dw white-text">
                                <span class="card-title text-darken-4 white-text"><?php _e( 'Card Title', 'portfolio' ); ?> <i class="mdi-navigation-close right"></i></span>
                                <p class="white-text"><?php _e( 'Here is some more information about this product that is only revealed once clicked on.', 'portfolio' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flexrow flexcenter">
</div>
            </div>
        </div>
        <div class="section section-up-17rem">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/DSC00964.jpg">
                </div>
            </div>
        </div>
        <div class="section section-up-17rem section-padding-3rem light-blue" data-pg-collapsed>
            <div class="container">
                <div class="row row-max-height flexrow flexcenter flexmiddle" data-pg-collapsed>
                    <div class="col s9 flexcolumn flexmiddle flexcenter m8 l8" data-pg-collapsed>
                        <div class="card blue-grey darken-1">
                            <div class="card-content white blue-grey-text">
                                <div class="flexrow flexcenter flexmiddle" data-pg-name="flexrow">
                                    <div class="col s12 l10 m10">
                                        <div class="flexcolumn flexmiddle" data-pg-name="flexcolumn">
                                            <span class="card-title image-position"><?php _e( 'WERK', 'portfolio' ); ?></span>
                                            <p class="image-position"></p>
                                            <p class="p1"><span class="s1"><?php _e( 'Ik bied creativiteit gecombineerd met een lust voor onderzoek. We kunnen samen het onderste uit de kan halen en gaan niet akkoord met middelmatigheid. Benieuwd wat ik allemaal gemaakt heb? Bekijk mijn portfolio.&nbsp;', 'portfolio' ); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row flexrow flexcenter flexbottom" style="margin-left:0">
                    <div class="col s12 l5 m6">
                        <div class="modal-container" data-pg-collapsed>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h4><?php _e( 'Modal Header', 'portfolio' ); ?></h4>
                                    <p><?php _e( 'A bunch of text', 'portfolio' ); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                        <?php _e( 'Agree', 'portfolio' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card darken-1 medium card-studie light-blue" style="height:15rem; margin:2rem auto; overflow:visible; max-width:88%">
                            <a class="waves-effect waves-light modal-trigger btn-large red btn-floating studie-modal-button z-depth-4" href="#modal1" data-pg-collapsed><i class="large mdi-editor-mode-edit"></i></a>
                            <div class="card-image waves-effect background-image-project1 activator waves-teal light-blue darken-1 z-depth-2" style="top:-5rem; height:16rem">
</div>
                        </div>
                    </div>
                    <div class="col s12 l5 m6">
                        <div class="modal-container" data-pg-collapsed>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h4><?php _e( 'Modal Header', 'portfolio' ); ?></h4>
                                    <p><?php _e( 'A bunch of text', 'portfolio' ); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                        <?php _e( 'Agree', 'portfolio' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card darken-1 medium card-studie light-blue" style="height:15rem; margin:2rem auto; overflow:visible; max-width:88%">
                            <a class="waves-effect waves-light modal-trigger btn-large red btn-floating studie-modal-button z-depth-4" href="#modal1" data-pg-collapsed><i class="large mdi-editor-mode-edit"></i></a>
                            <div class="card-image waves-effect background-image-project1 activator waves-teal light-blue darken-1 z-depth-2" style="top:-5rem; height:16rem">
</div>
                        </div>
                    </div>
                    <div class="col s12 l5 m6">
                        <div class="modal-container" data-pg-collapsed>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h4><?php _e( 'Modal Header', 'portfolio' ); ?></h4>
                                    <p><?php _e( 'A bunch of text', 'portfolio' ); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                        <?php _e( 'Agree', 'portfolio' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card darken-1 medium card-studie light-blue" style="height:15rem; margin:2rem auto; overflow:visible; max-width:88%">
                            <a class="waves-effect waves-light modal-trigger btn-large red btn-floating studie-modal-button z-depth-4" href="#modal1" data-pg-collapsed><i class="large mdi-editor-mode-edit"></i></a>
                            <div class="card-image waves-effect background-image-project1 activator waves-teal light-blue darken-1 z-depth-2" style="top:-5rem; height:16rem">
</div>
                        </div>
                    </div>
                    <div class="col s12 l5 m6">
                        <div class="modal-container" data-pg-collapsed>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h4><?php _e( 'Modal Header', 'portfolio' ); ?></h4>
                                    <p><?php _e( 'A bunch of text', 'portfolio' ); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                        <?php _e( 'Agree', 'portfolio' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card darken-1 medium card-studie light-blue" style="height:15rem; margin:2rem auto; overflow:visible; max-width:88%">
                            <a class="waves-effect waves-light modal-trigger btn-large red btn-floating studie-modal-button z-depth-4" href="#modal1" data-pg-collapsed><i class="large mdi-editor-mode-edit"></i></a>
                            <div class="card-image waves-effect background-image-project1 activator waves-teal light-blue darken-1 z-depth-2" style="top:-5rem; height:16rem">
</div>
                        </div>
                    </div>
                    <div class="col s12 l5 m6">
                        <div class="modal-container" data-pg-collapsed>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h4><?php _e( 'Modal Header', 'portfolio' ); ?></h4>
                                    <p><?php _e( 'A bunch of text', 'portfolio' ); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                        <?php _e( 'Agree', 'portfolio' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card darken-1 medium card-studie light-blue" style="height:15rem; margin:2rem auto; overflow:visible; max-width:88%">
                            <a class="waves-effect waves-light modal-trigger btn-large red btn-floating studie-modal-button z-depth-4" href="#modal1" data-pg-collapsed><i class="large mdi-editor-mode-edit"></i></a>
                            <div class="card-image waves-effect background-image-project1 activator waves-teal light-blue darken-1 z-depth-2" style="top:-5rem; height:16rem">
</div>
                        </div>
                    </div>
                    <div class="col s12 l5 m6">
                        <div class="modal-container" data-pg-collapsed>
                            <div id="modal1" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h4><?php _e( 'Modal Header', 'portfolio' ); ?></h4>
                                    <p><?php _e( 'A bunch of text', 'portfolio' ); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">
                                        <?php _e( 'Agree', 'portfolio' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card darken-1 medium card-studie light-blue" style="height:15rem; margin:2rem auto; overflow:visible; max-width:88%">
                            <a class="waves-effect waves-light modal-trigger btn-large red btn-floating studie-modal-button z-depth-4" href="#modal1" data-pg-collapsed><i class="large mdi-editor-mode-edit"></i></a>
                            <div class="card-image waves-effect background-image-project1 activator waves-teal light-blue darken-1 z-depth-2" style="top:-5rem; height:16rem">
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-up-17rem" style="top:-17rem; z-index:1;" data-pg-collapsed>
            <div class="parallax-container">
                <div class="parallax">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Foto's%20MILKads.jpg">
                </div>
            </div>
        </div>
        <div class="section section-up-17rem" style="top:-17rem; z-index:1;" data-pg-collapsed>
            <div class="pg-empty-placeholder row flexcolumn flexcenter" style="height:40rem; " data-pg-collapsed>
                <div class="pg-empty-placeholder" style="width:5rem;  height:5rem;"></div>
                <div class="pg-empty-placeholder" style="width:5rem;  height:5rem;"></div>
                <div class="pg-empty-placeholder" style="width:5rem;  height:5rem;"></div>
                <div class="pg-empty-placeholder" style="width:5rem;  height:5rem;"></div>
            </div>
        </div>
        <footer class="page-footer light-blue">
            <div class="container light-blue" data-pg-collapsed>
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text"><?php _e( 'Footer Content', 'portfolio' ); ?></h5>
                        <p class="grey-text text-lighten-4"><?php _e( 'You can use rows and columns here to organize your footer content.', 'portfolio' ); ?></p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text"><?php _e( 'Links', 'portfolio' ); ?></h5>
                        <ul>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <?php _e( 'Link 1', 'portfolio' ); ?>
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <?php _e( 'Link 2', 'portfolio' ); ?>
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <?php _e( 'Link 3', 'portfolio' ); ?>
                                </a>
                            </li>
                            <li>
                                <a class="grey-text text-lighten-3" href="#!">
                                    <?php _e( 'Link 4', 'portfolio' ); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright light-blue">
                <div class="container">
                    <?php _e( '© 2014 Copyright Text', 'portfolio' ); ?>
                    <a class="grey-text text-lighten-4 right" href="#!">
                        <?php _e( 'More Links', 'portfolio' ); ?>
                    </a>
                </div>
            </div>
        </footer>
        <!-- Materialize core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/materialize.js"></script>
        <script>
            $(document).ready(function() {
                $('.slider').slider();
                $('.parallax').parallax();
                $(".dropdown-button").dropdown();
                 $('.button-collapse').sideNav({
      menuWidth: 650, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
                $('select').material_select();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
                $('.modal-trigger').leanModal();
            });
        </script>
        <script>
        $(document).ready(function() {

  /** ===========================================
      Hide / show the master navigation menu
  ============================================ */

  // console.log('Window Height is: ' + $(window).height());
  // console.log('Document Height is: ' + $(document).height());

  var previousScroll = 0;

  $(window).scroll(function() {

    var currentScroll = $(this).scrollTop();

    /*
      If the current scroll position is greater than 0 (the top) AND the current scroll position is less than the document height minus the window height (the bottom) run the navigation if/else statement.
    */
    if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()) {
      /*
        If the current scroll is greater than the previous scroll (i.e we're scrolling down the page), hide the nav.
      */
      if (currentScroll > previousScroll) {
        window.setTimeout(hideNav, 800);
        /*
          Else we are scrolling up (i.e the previous scroll is greater than the current scroll), so show the nav.
        */
      } else {
        window.setTimeout(showNav, 400);
      }
      /*
        Set the previous scroll value equal to the current scroll.
      */
      previousScroll = currentScroll;
    }

  });

  function hideNav() {
    $("[data-nav-status='toggle']").addClass("is-hidden");
  }

  function showNav() {
    $("[data-nav-status='toggle']").removeClass("is-hidden");
  }

});
            </script>

<?php get_footer(); ?>
