<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>GEN-42, Occupy the web</title> 
        <meta name="keywords" content="<?=$config->mots_cle_fr?>" />
        <meta name="description" content="<?=$config->meta_description_fr?>">
        <meta name="author" content="GEN-42">   

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Theme CSS -->
        <?=link_tag("assets/css/style.css")?>
        <!-- Responsive CSS -->
        <?=link_tag("assets/css/theme-responsive.css")?>
        <!-- Skins Theme -->
        <?=link_tag("assets/css/skins/blue/blue.css")?>
        <!-- Head Libs -->
        <?=script_tag("assets/js/modernizr.js")?>
        <!-- Favicons -->
        <link rel="shortcut icon" href="<?=site_url()?>assets/img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="<?=site_url()?>assets/img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=site_url()?>assets/img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=site_url()?>assets/img/icons/apple-touch-icon-114x114.png">   

        <!-- styles for IE -->
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?=site_url()?>assets/css/ie/ie.css" type="text/css" media="screen" />            
        <![endif]-->


        <!--[if lte IE 8]>
            <script src="<?=site_url()?>assets/js/responsive/html5shiv.js"></script>
            <script src="<?=site_url()?>assets/js/responsive/respond.js"></script>
        <![endif]-->
    </head>
    <body> 

    <!--Preloader-->
    <div class="preloader">
        <div class="status">&nbsp;</div>
    </div>
    <!--End Preloader-->

    <!-- End Theme-options -->
    
    <!-- layout-->
    <div id="layout" class="layout-wide">
        <!-- Login Client -->
        <div class="jBar">
            <div class="container">            
                <div class="row padding-top-mini">  
                    <!-- Item service-->
                    <div class="col-md-3">
                        <div class="item-service border-right">
                            <div class="row head-service">
                                <div class="col-md-2">
                                    <i class="fa fa-check-square"></i>                             
                                </div>
                                <div class="col-md-10">
                                    <h5>Connectez vous ou créez un compte.</h5>
                                </div>
                            </div>  
                            <p>Pellentesque habitant morbi fames ac turpis egestas. Vestibulum tortor quam. Pellentesque habitant</p>
                        </div>
                    </div>      
                    <!-- End Item service-->

                    

                    <!-- Login-->
                    <div class="col-md-3">
                        <h4>Connectez vous</h4>
                        <form>
                            <input type="email" placeholder="Nom d'utilisateur" required>
                            <input type="password" placeholder="Mot de passe" required>
                            <input type="submit" class="btn btn-primary" value="Se connecter">
                            <span>Ou</span>                       
                            <input type="submit" class="btn btn-primary" value="S'enregistrer">
                        </form>
                    </div>
                    <!-- ENd Login-->

                    <span class="jTrigger downarrow"><i class="fa fa-minus"></i></span>
                </div>
            </div>
        </div>
        <span class="jRibbon jTrigger up" title="Login"><i class="fa fa-plus"></i></span>
        <div class="line"></div>
        <!-- End Login Client -->

        <!-- Info Head -->
        <section class="info-head">  
            <div class="container">
                <ul>  
                    <li><i class="fa fa-headphones"></i> +213 (0) 23 384 421</li>
                    <li><i class="fa fa-comment"></i> <a href="#">Chat en direct</a></li>                    
                    <li>
                        <ul>
                          <li class="dropdown">
                            <i class="fa fa-globe"></i> 
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Language<i class="fa fa-angle-down"></i>
                            </a>
                             <ul class="dropdown-menu">  
                                 <li><a href="#"><img src="<?=site_url()?>assets/img/language/frances.png" alt="">Frances</a></li>
                                 <li><a href="#"><img src="<?=site_url()?>assets/img/language/english.png" alt="">English</a></li>
                            </ul>
                          </li>                      
                        </ul>
                    </li>
                </ul> 
            </div>            
        </section>
        <!-- Info Head -->

        <!-- Header-->
        <header>           
            <!-- Container-->
            <div class="container">
                <!-- Row-->
                <div class="row">
                    <!-- Logo-->
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html" title="Return Home">                            
                                <img src="<?=site_url()?>assets/img/logo.png" alt="Logo" class="logo_img">
                            </a>
                        </div>
                    </div>
                    <!-- End Logo-->
                                                      
                    <!-- Nav-->
                    <nav class="col-md-9">
                        <!-- Menu-->
                        <ul id="menu" class="sf-menu">
                            <li>
                                <a href="<?=site_url()?>">ACCUEIL</a>
                            </li>
                            <li><a href="<?=site_url()?>apropos">A PROPOS</a>
                            </li>
                            <li><a href="<?=site_url()?>services">SERVICES <i class="fa fa-angle-down"></i></a>
                                <ul>                                  
                                    <li><a href="<?=site_url()?>">Création web</a></li>
                                    <li><a href="<?=site_url()?>">Création de contenu</a></li>
                                    <li><a href="<?=site_url()?>">Réseaux sociaux</a></li>
                                    <li><a href="<?=site_url()?>">Google Apps</a></li>
                                    <li><a href="<?=site_url()?>">Référencement</a></li>
                                    <li><a href="<?=site_url()?>">Veuille et audit</a></li>
                                    <li><a href="<?=site_url()?>">Gestion de compagnes</a></li>
                                    <li><a href="<?=site_url()?>">E-mailing</a></li>
                                </ul>
                            </li>                                                      
                            <li><a href="<?=site_url('contact')?>">CONTACT</a></li>
                            <li><a href="<?=site_url('blog')?>">BLOG</a></li>
                        </ul>
                        <!-- End Menu-->
                    </nav>
                    <!-- End Nav-->
                </div>
                <!-- End Row-->
            </div>
            <!-- End Container-->
        </header>
        <!-- End Header-->

        <!-- Slide Section-->    
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <?php 
                        if($slideprincipal==array()){
                            ?>
                                            <!-- SLIDE ITEM-->
                                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500" >
                                    <!-- MAIN IMAGE -->
                                    <img src="<?=site_url()?>assets/img/slide/slides/slidee.png"   alt="kenburns6"  data-bgposition="center center" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                                    
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption large_text lft tp-resizeme"
                                        data-x="0"
                                        data-y="150"
                                        data-speed="500"
                                        data-start="1200"
                                        data-easing="Power4.easeOut"
                                        data-splitin="lines"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                                        OCCUPEZ LE MONDE NUMERIQUE
                                    </div>
                                    <!-- END LAYER NR. 1 -->

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption large_bold_white lft tp-resizeme"
                                        data-x="-5"
                                        data-y="210"
                                        data-speed="500"
                                        data-start="1200"
                                        data-easing="Power4.easeOut"
                                        data-splitin="lines"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                                        AVEC GEN 42
                                    </div>
                                    <!-- END LAYER NR. 2 -->

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption line-slide lfb tp-resizeme"
                                        data-x="14"
                                        data-y="295"
                                        data-speed="500"
                                        data-start="1200"
                                        data-easing="Power4.easeOut"
                                        data-splitin="lines"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300">
                                    </div>
                                    <!-- END LAYER NR. 3 -->

                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption medium_text lfb tp-resizeme"
                                        data-x="10"
                                        data-y="330"
                                        data-speed="500"
                                        data-start="1200"
                                        data-easing="Power4.easeOut"
                                        data-splitin="lines"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 3; color: #dedede; max-width: 800px; max-height: auto; white-space: normal;">
                                        Nous développons des produits originaux, innovateurs et de haute qualité.
                                    </div>
                                    <!-- END LAYER NR. 3 -->

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption lfb tp-resizeme"
                                        data-x="16"
                                        data-y="380" 
                                        data-speed="300"
                                        data-start="1400"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300">
                                        <a href='#' class='btn btn-primary'>Voir plus</a>
                                    </div>
                                    <!-- END LAYER NR. 4 -->
                                </li>
                                <!-- END SLIDE ITEM-->
                            <?php
                        }else{
                            foreach($slideprincipal as $row){
                                ?>
                                    <!-- SLIDE ITEM-->
                                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500" >
                                        <!-- MAIN IMAGE -->
                                        <img src="<?=site_url()?>assets/img/slide/slides/<?=$row['image']?>" alt="<?=$row['description_image']?>" title="<?=$row['title_image']?>" data-bgposition="center center" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                                        
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption large_text lft tp-resizeme"
                                            data-x="0"
                                            data-y="150"
                                            data-speed="500"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-splitin="lines"
                                            data-splitout="none"
                                            data-elementdelay="0.1"
                                            data-endelementdelay="0.1"
                                            data-endspeed="300"
                                            style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                                            <?=$row['title_slide']?>
                                        </div>
                                        <!-- END LAYER NR. 1 -->

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption large_bold_white lft tp-resizeme"
                                            data-x="-5"
                                            data-y="210"
                                            data-speed="500"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-splitin="lines"
                                            data-splitout="none"
                                            data-elementdelay="0.1"
                                            data-endelementdelay="0.1"
                                            data-endspeed="300"
                                            style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                                            <?=$row['end_of_title']?>
                                        </div>
                                        <!-- END LAYER NR. 2 -->

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption line-slide lfb tp-resizeme"
                                            data-x="14"
                                            data-y="295"
                                            data-speed="500"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-splitin="lines"
                                            data-splitout="none"
                                            data-elementdelay="0.1"
                                            data-endelementdelay="0.1"
                                            data-endspeed="300">
                                        </div>
                                        <!-- END LAYER NR. 3 -->

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption medium_text lfb tp-resizeme"
                                            data-x="10"
                                            data-y="330"
                                            data-speed="500"
                                            data-start="1200"
                                            data-easing="Power4.easeOut"
                                            data-splitin="lines"
                                            data-splitout="none"
                                            data-elementdelay="0.1"
                                            data-endelementdelay="0.1"
                                            data-endspeed="300"
                                            style="z-index: 3; color: #dedede; max-width: 800px; max-height: auto; white-space: normal;">
                                            <?=$row['description_slide']?>
                                        </div>
                                        <!-- END LAYER NR. 3 -->

                                        <!-- LAYER NR. 4 -->
                                        
                                        <?php
                                            if($row['link']!="#"){
                                                ?>
                                                    <div class="tp-caption lfb tp-resizeme"
                                                        data-x="16"
                                                        data-y="380" 
                                                        data-speed="300"
                                                        data-start="1400"
                                                        data-easing="Power3.easeInOut"
                                                        data-splitin="none"
                                                        data-splitout="none"
                                                        data-elementdelay="0.1"
                                                        data-endelementdelay="0.1"
                                                        data-endspeed="300">
                                                        <a href='<?=$row["link"]?>' class='btn btn-primary'>Voir plus</a>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                        <!-- END LAYER NR. 4 -->

                                    </li>
                                    <!-- END SLIDE ITEM-->
                                <?php
                            }
                        }
                    ?>
                    <!-- SLIDE ITEM-->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="<?=site_url()?>assets/img/slide/slides/slide.jpg"   alt="kenburns6"  data-bgposition="center center" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                        
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_text lft tp-resizeme"
                            data-x="0"
                            data-y="150"
                            data-speed="500"
                            data-start="1200"
                            data-easing="Power4.easeOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                            OCCUPEZ LE MONDE NUMERIQUE
                        </div>
                        <!-- END LAYER NR. 1 -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption large_bold_white lft tp-resizeme"
                            data-x="-5"
                            data-y="210"
                            data-speed="500"
                            data-start="1200"
                            data-easing="Power4.easeOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 5; max-width: 700px; line-height: 60px; max-height: auto; white-space: normal;">
                            AVEC GEN 42
                        </div>
                        <!-- END LAYER NR. 2 -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption line-slide lfb tp-resizeme"
                            data-x="14"
                            data-y="295"
                            data-speed="500"
                            data-start="1200"
                            data-easing="Power4.easeOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300">
                        </div>
                        <!-- END LAYER NR. 3 -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption medium_text lfb tp-resizeme"
                            data-x="10"
                            data-y="330"
                            data-speed="500"
                            data-start="1200"
                            data-easing="Power4.easeOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 3; color: #dedede; max-width: 800px; max-height: auto; white-space: normal;">
                            Nous développons des produits originaux, innovateurs et de haute qualité.
                        </div>
                        <!-- END LAYER NR. 3 -->

                         <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme"
                            data-x="16"
                            data-y="380" 
                            data-speed="300"
                            data-start="1400"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            data-endspeed="300">
                            <a href='#' class='btn btn-primary'>Voir plus</a>
                        </div>
                        <!-- END LAYER NR. 4 -->
                    </li>
                    <!-- END SLIDE ITEM-->

                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!-- End Slide Section-->

        <!-- box-action -->
        <section class="box-action">
            <div class="container">
                <div class="title">
                    <p class="lead">VOUS VOULEZ AVOIR UN DEVIS SUR NOS PRESTATIONS?</p>
                </div>
                <div class="button">
                    <a href="http://themeforest.net/item/roker-corporate-creative-multi-purpose-teme/6354076?ref=iwthemes" target="_blank">CONTACTEZ NOUS</a>
                </div>
            </div>
        </section>
        <!-- End box-action-->

        <!-- Services -->
        <section class="content_info">
            <div class="paddings">
                <div class="container">
                    <!-- Icon Big -->
                    <i class="fa fa-cogs icon-section top right"></i>                
                    <!-- End Icon Big -->

                    <!-- Titles Heading --> 
                    <div class="titles-heading">
                        <div class="line"></div>
                        <h1>Services de qualité
                            <span>
                              <i class="fa fa-star"></i>  
                              Conception & Gestion
                              <i class="fa fa-star"></i>  
                            </span>
                        </h1>
                    </div> 
                    <!-- End Titles Heading --> 

                    <!-- Row fuid-->
                    <div class="row padding-top">
                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-html5"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Conception web</h4>
                                        <h5>sites et applications web</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service-->

                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-pencil"></i>                            
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Creation de contenu</h4>
                                        <h5>tristique senectus malesuada</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service-->

                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service border-right">
                              <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-facebook"></i>                    
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Reseaux sociaux</h4>
                                        <h5>Gestion des réseaux sociaux</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service - 01 -->

                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-google"></i>                    
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Google Apps</h4>
                                        <h5>Solutions Google Apps</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service - 01 -->

                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-line-chart"></i>                             
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Référencement</h4>
                                        <h5>Moteurs de recherche etc...</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service - 01 -->

                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-eye"></i>                            
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Veuille & Audit</h4>
                                        <h5>tristique senectus malesuada</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service - 01 -->
                        
                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service border-right">
                                <div class="row head-service">
                                    <div class="col-md-2 ">
                                        <i class="fa fa-bullhorn"></i>                            
                                    </div>
                                    <div class="col-md-10">
                                        <h4>Gestion de compagnes</h4>
                                        <h5>tristique senectus malesuada</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service - 01 -->
                        <!-- Item service - 01 -->
                        <div class="col-md-3">
                            <div class="item-service ">
                                <div class="row head-service">
                                    <div class="col-md-2">
                                        <i class="fa fa-envelope"></i>                            
                                    </div>
                                    <div class="col-md-10">
                                        <h4>E-Mailing</h4>
                                        <h5>Compagnes E-mailing</h5>
                                    </div>
                                </div>                          
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>      
                        <!-- End Item service - 01 -->
                    </div>
                    <!-- End Row fuid-->
                </div>
                <!-- End Container-->
            </div>
        </section>
        <!-- End Services-->

        <!-- Services Slide -->
        <section class="content_info">
            <div class="section-gray paddings borders animation-services">
                <!-- Slide Services  -->
                <?php 
                    if($slideservices!=array()){
                        ?>
                        <ul id="slide-services">
                        <?php
                            foreach($slideservices as $row){
                                ?>
                                    <li>
                                        <div class="container">
                                            <div class="row">
                                                <!-- image-animations  -->
                                                <div class="col-md-5 image-animations padding-top">
                                                <img src="<?=site_url()?>assets/img/services-carousel/<?=$row['image_principale']?>" alt="" class="image-big">
                                                    <ul class="icons">
                                                    <?php 
                                                        if($row['icone_1']!=""){
                                                            ?>
                                                                <li class="one delay1"><img src="<?=site_url()?>assets/img/icons/<?=$row['icone_1']?>" alt=""></li>
                                                            <?php
                                                        }
                                                    ?>
                                                    <?php 
                                                        if($row['icone_2']!=""){
                                                            ?>
                                                                <li class="two delay2"><img src="<?=site_url()?>assets/img/icons/<?=$row['icone_2']?>" alt=""></li>
                                                            <?php
                                                        }
                                                    ?>
                                                    <?php 
                                                        if($row['icone_3']!=""){
                                                            ?>
                                                                 <li class="three delay1"><img src="<?=site_url()?>assets/img/icons/<?=$row['icone_3']?>" alt=""></li>
                                                            <?php
                                                        }
                                                    ?>
                                                    <?php 
                                                        if($row['icone_4']!=""){
                                                            ?>
                                                                <li class="four delay1"><img src="<?=site_url()?>assets/img/icons/<?=$row['icone_4']?>" alt=""></li>
                                                            <?php
                                                        }
                                                    ?>
                                                    </ul>
                                                </div>
                                                <!-- End image-animations  -->

                                                <!-- features-elementns  -->
                                                <div class="col-md-7 padding-top-mini">
                                                    <ul class="feature-element">
                                                        <!-- Item feature-element  -->
                                                        <li>       
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="line-feature"><i class="fa fa-angle-left"></i></div>
                                                                    <i class="fa <?=$row['avantage_1_icone']?> cirle-feature"></i>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="text-feature">
                                                                    <h4><?=$row['titre_avantage_1']?></h4>
                                                                    <?=$row['text_avantage_1']?></div>
                                                                </div>
                                                            </div>   
                                                        </li>
                                                        <!-- End Item feature-element  -->

                                                        <!-- Item feature-element  -->
                                                        <?php 
                                                            if($row['text_avantage_2']!=""){
                                                                ?>
                                                                    <li>       
                                                                        <div class="row">
                                                                            <div class="col-md-5">
                                                                                <div class="line-feature"><i class="fa fa-angle-left"></i></div>
                                                                                <i class="fa <?=$row['avantage_2_icone']?> cirle-feature"></i>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="text-feature">
                                                                                <h4><?=$row['titre_avantage_2']?></h4>
                                                                                <?=$row['text_avantage_2']?></div>
                                                                            </div>
                                                                        </div>   
                                                                    </li>
                                                                <?php
                                                            }
                                                        ?>
                                                        <!-- End Item feature-element  -->

                                                        <!-- Item feature-element  -->
                                                        <?php 
                                                            if($row['text_avantage_3']!=""){
                                                                ?>
                                                                    <li>       
                                                                        <div class="row">
                                                                            <div class="col-md-5">
                                                                                <div class="line-feature"><i class="fa fa-angle-left"></i></div>
                                                                                <i class="fa <?=$row['avantage_3_icone']?> cirle-feature"></i>
                                                                            </div>
                                                                            <div class="col-md-7">
                                                                                <div class="text-feature">
                                                                                <h4><?=$row['titre_avantage_3']?></h4>
                                                                                <?=$row['text_avantage_3']?></div>
                                                                            </div>
                                                                        </div>   
                                                                    </li>
                                                                <?php
                                                            }
                                                        ?>
                                                        <!-- End Item feature-element  -->
                                                </ul>
                                            </div>
                                            <!-- End feature-elements  -->
                                        </div> 
                                        <!-- End Row  -->
                                    </div> 
                                    <!-- End Container  -->
                                    </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                ?>
            </div>  
        </section>
        <!-- End Services Slide-->

        <!-- Clients -->
        <section class="content_info">
            <div class="paddings clients">
                <div class="container">
                    <div class="row">  
                        <!-- title-downloads -->             
                        <h1 class="title-downloads">
                            <span class="logo-clients">GEN 42 </span> est fiere de réaliser son parcours en collaboration avec des partenaires prestigieux, qui s'engagent à fournir des services de haute qualité.
                        </h1>  
                        <!-- End title-downloads -->     
                        
                        <!-- subtitle-downloads --> 
                        <div class="subtitle-downloads">
                            <div class="line"></div>
                            <h4>Un parcours réalisé <i class="fa fa-star"></i> Avec</h4>
                        </div> 
                        <!-- End subtitle-downloads --> 

                        <!-- Image Clients Downloads --> 
                        <ul class="image-clients-downloads">
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/1.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/2.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/3.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/4.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/5.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/6.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/7.jpg" alt=""></li>
                            <li><img src="<?=site_url()?>assets/img/clients-downloads/8.jpg" alt=""></li>
                        </ul>
                        <!-- End Image Clients Downloads --> 
                    </div>                
                </div>
            </div>
        </section>
        <!-- End Clients -->

        <!-- Sponsors -->
        <section class="content_info">
            <!-- Parallax Background -->
            <div class="bg_parallax image_01_parallax"></div>
            <!-- Parallax Background -->

            <!-- Content Parallax-->
            <section class="opacy_bg_02 paddings sponsors">
                <div class="container wow fadeInUp">
                    <h2 class="title-resalt">Nous avons gagné la confiance et l'amitié de <span><?=$countBrands?></span>clients , incluant leur entreprise</h2>
                    <!-- Sponsors -->
                    <ul id="sponsors">
                        <?php
                            if($countBrands!=0){
                                foreach($brands as $row){
                                    ?>
                                        <li data-toggle="tooltip" title data-original-title="<?=$row['nom_marque']?>" class="brand-item">
                                            <a href="#"><img src="<?=site_url()?>assets/img/clients-downloads/<?=$row['image']?>" alt="<?=$row['nom_marque']?>"></a>
                                        </li>  
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                    <!-- End Sponsors --> 

                    <div class="circle">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                </div> 
            </section>  
            <!-- End Content Parallax--> 
        </section>
        <!-- End Sponsors -->

        <!-- post-testimonials -->
        <section class="content_info">
            <div class="paddings post-testimonials">
                <div class="container wow bounceIn" data-wow-offset="10" data-wow-duration="1.5s" data-wow-delay="0.5s">
                   <div class="row">  
                        <!-- Post --> 
                        <div class="col-md-6">
                            <h3>Latest Blog Posts</h3>
                             <!-- Box -->
                            <ul class="box">
                                <!-- Item Post --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="date"><span><i class="fa fa-calendar-o"></i>Sep</span>15</div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-7">
                                        <div class="info">
                                            <h4>The Human Element</h4>
                                            <p>Lorem ipsum ea cum , pri no natum clita. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="link">
                                           <a href="#" title="Read More"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Post --> 

                                 <!-- Item Post --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="date"><span><i class="fa fa-calendar-o"></i>Sep</span>15</div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-7">
                                        <div class="info">
                                            <h4>The Human Element</h4>
                                            <p>Lorem ipsum ea cum , pri no natum clita. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="link">
                                           <a href="#" title="Read More"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Post --> 

                                <!-- Item Post --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="date"><span><i class="fa fa-calendar-o"></i>Sep</span>15</div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-7">
                                        <div class="info">
                                            <h4>The Human Element</h4>
                                            <p>Lorem ipsum ea cum , pri no natum clita. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="link">
                                           <a href="#" title="Read More"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Post --> 

                                <!-- Item Post --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="date"><span><i class="fa fa-calendar-o"></i>Sep</span>15</div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-7">
                                        <div class="info">
                                            <h4>The Human Element</h4>
                                            <p>Lorem ipsum ea cum , pri no natum clita. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="link">
                                           <a href="#" title="Read More"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Post --> 

                                <!-- Item Post --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="date"><span><i class="fa fa-calendar-o"></i>Sep</span>15</div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-7">
                                        <div class="info">
                                            <h4>The Human Element</h4>
                                            <p>Lorem ipsum ea cum , pri no natum clita. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="link">
                                           <a href="#" title="Read More"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Post --> 

                            </ul>
                            <!-- End Box -->
                        </div>
                        <!-- End Post --> 

                        <!-- Testimonial --> 
                        <div class="col-md-6">
                            <h3>Recent Testimonials</h3>
                            <!-- Box -->
                            <ul class="box">
                                
                                <!-- Item testimonial --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="photo">
                                            <img src="<?=site_url()?>assets/img/testimonials/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-9">
                                        <div class="name">
                                            <h4>Federic Gordon
                                                <span>Front End</span>
                                            </h4>                                        
                                        </div>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                                    </div>
                                </li>
                                <!-- End Item testimonial --> 

                                <!-- Item testimonial --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="photo">
                                            <img src="<?=site_url()?>assets/img/testimonials/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-9">
                                        <div class="name">
                                            <h4>Federic Gordon
                                                <span>Front End</span>
                                            </h4>                                        
                                        </div>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                                    </div>
                                </li>
                                <!-- End Item testimonial --> 

                                <!-- Item testimonial --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="photo">
                                            <img src="<?=site_url()?>assets/img/testimonials/3.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-9">
                                        <div class="name">
                                            <h4>Federic Gordon
                                                <span>Front End</span>
                                            </h4>                                        
                                        </div>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                                    </div>
                                </li>
                                <!-- End Item testimonial --> 

                                <!-- Item testimonial --> 
                                <li class="row">
                                    <!-- Date --> 
                                    <div class="col-md-3">
                                        <div class="photo">
                                            <img src="<?=site_url()?>assets/img/testimonials/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <!-- End Date --> 
                                    <div class="col-md-9">
                                        <div class="name">
                                            <h4>Federic Gordon
                                                <span>Front End</span>
                                            </h4>                                        
                                        </div>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                                    </div>
                                </li>
                                <!-- End Item testimonial --> 

                            </ul>
                            <!-- End Box -->
                        </div>
                        <!-- End Testimonial --> 
                   </div>                
                </div>
            </div>
        </section>
        <!-- End post-testimonials -->

        <!-- Boxes Info -->
        <section class="content_info">
            <!-- Parallax Background -->
            <div class="bg_parallax image_02_parallax"></div>
            <!-- Parallax Background -->

            <!-- Content Parallax-->
            <section class="opacy_bg_02 paddings boxes">
                <div class="container wow fadeInUp">
                    <div class="row">
                        <!-- Item Boxes Info -->
                        <div class="col-md-3">
                            <div class="boxes-info">
                                <h3>BUSINNESS<i class="fa fa-thumbs-up"></i></h3>
                                <h5>THIS IS AN EXAMPLE OF BOX SUBTITLE</h5>
                                <p>Pellentesque habitant morbi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>
                        <!-- End Item Boxes Info -->

                        <!-- Item Boxes Info -->
                        <div class="col-md-3">
                            <div class="boxes-info">
                                <h3>CORPORATE<i class="fa fa-star"></i></h3>
                                <h5>THIS IS AN EXAMPLE OF BOX SUBTITLE</h5>
                                <p>Pellentesque habitant morbi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>
                        <!-- End Item Boxes Info -->

                        <!-- Item Boxes Info -->
                        <div class="col-md-3">
                            <div class="boxes-info">
                                <h3>CREATIVE<i class="fa fa-apple"></i></h3>
                                <h5>THIS IS AN EXAMPLE OF BOX SUBTITLE</h5>
                                <p>Pellentesque habitant morbi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>
                        <!-- End Item Boxes Info -->

                        <!-- Item Boxes Info -->
                        <div class="col-md-3">
                            <div class="boxes-info">
                                <h3>UNIQUE<i class="fa fa-android"></i></h3>
                                <h5>THIS IS AN EXAMPLE OF BOX SUBTITLE</h5>
                                <p>Pellentesque habitant morbi senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.</p>
                            </div>
                        </div>
                        <!-- End Item Boxes Info -->
                    </div>
                </div> 
            </section>  
            <!-- End Content Parallax--> 
        </section>
        <!-- End Boxes Info -->

        <!-- Important Info -->
        <section class="content_info">
            <div class="paddings pattern-important-info important-info">
                <div class="container">
                   <div class="row">   
                        <div class="col-md-9">
                            <h1><span>GEN 42</span> apporte sa touche personnelle à chaque projet.</h1>
                            <p class="lead">Nous apportons une approche personnelle et efficace à chaque projet sur lequel nous travaillons, c'est pourquoi nos clients nous aiment et pourquoi ils continuent à revenir.”</p>
                            <a  class="btn btn-lg animated bounceInUp" href="#">Avis de nos clients</a>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-html5"></i>
                        </div>
                   </div>                
                </div>
            </div>
        </section>
        <!-- End Important Info -->

        <!-- footer top-->
        <footer class="footer-top">
            <div class="container">
               <div class="row">   
                   <div class="col-md-3">
                       <h3> +213 (0) 23 384 421 </h3>
                   </div>
                   <div class="col-md-3">
                       <h3><a href="#">Support</a> - <a href="#">Informations</a></h3>
                   </div>
                   <div class="col-md-3">
                       <h3><a href="mailto:sales@roken.com" target="_blank">contact@gen-42.com</a></h3>
                   </div>
                   <div class="col-md-3">
                       <h3>Dim-Jeudi 10h-17h</h3>
                   </div>
               </div>                
            </div>
        </footer>      
        <!-- End footer Top-->
        
        <!-- footer Center-->
        <footer class="footer-center">
            <div class="container">
                <!-- Info Top - Footer Center-->
                <div class="row">   
                   <div class="col-md-3 item-center">
                        <span class="arrow_footer"></span>
                        <i class="fa fa-phone"></i>
                        <h4>Parlez nous</h4>                        
                   </div>
                   <div class="col-md-3 item-center">
                        <span class="arrow_footer"></span>
                        <i class="fa fa-comment"></i>
                        <h4>Chat en direct</h4>                        
                   </div>
                   <div class="col-md-3 item-center">
                       <span class="arrow_footer"></span>
                        <i class="fa fa-envelope"></i>
                        <h4>Envoyez nous un email</h4>                        
                   </div>
                   <div class="col-md-3 item-center">
                        <span class="arrow_footer"></span>
                        <i class="fa fa-thumbs-up"></i>
                        <h4>Notre support à votre écoute</h4>                        
                   </div>
                </div>   
                <!-- End Info Top - Footer Center-->

                <!-- Divisor Footer-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="top"></div>
                    </div>
                </div> 
                <!-- End Divisor Footer-->

                <!-- Info Bottom - Footer Center-->
                <div class="row">  
                    <!-- Twitter Feed-->
                    <div class="col-md-4">
                        <div class="border-right">
                            <i class="fa fa-twitter"></i>
                            <h4>Latest Tweet</h4>                     
                            <div class="twitter">  

                            </div>                        
                        </div>
                    </div>
                    <!-- End Twitter Feed-->

                    <!-- Newsletter-->
                    <div class="col-md-3">
                        <div class="border-right">
                            <h4>Newsletter</h4>
                            <p>Enter your e-mail and subscribe to our newsletter.</p>

                            <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input class="form-control" placeholder="Email Address" name="email"  type="email" required="required">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                                    </span>
                                </div>
                            </form>   
                            <div id="result-newsletter"></div>
                       </div>
                    </div>
                    <!-- End Newsletter-->

                    <!-- Recent Links-->
                    <div class="col-md-2">
                        <div class="border-right">
                            <h4>Recent Links</h4>
                            <ul class="links">
                                <li><i class="fa fa-check"></i> <a href="#">Work</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">About Us</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Services</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Contact</a></li>
                            </ul>
                       </div>
                    </div>
                    <!-- End Recent Links-->

                    <!-- Flickr-->
                    <div class="col-md-3">
                        <h4>Recent flickr</h4>
                        <ul id="flickr" class="thumbs"></ul>
                    </div>
                    <!-- End Flickr-->
                </div>    
                <!-- Info Bottom - Footer Center-->
            </div>
        </footer>      
        <!-- End footer Center-->

        <!-- footer bottom-->
        <footer class="footer-bottom">
            <div class="container">
               <div class="row">   
                                                                  
                    <!-- Nav-->
                    <div class="col-md-8">
                        <div class="logo-footer">
                            <h2><span>R</span>oker<span>.</span></h2>
                        </div>
                        <!-- Menu-->
                        <ul class="menu-footer">
                            <li><a href="index.html">HOME</a> </li>
                            <li><a href="about-us.html">ABOUT</a></li>
                            <li><a href="services.html">SERVICES</a></li> 
                            <li><a href="work-3-columns.html">PORTFOLIO</a></li> 
                            <li><a href="blog.html">BLOG</a></li>                                                     
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                        <!-- End Menu-->

                        <!-- coopring-->
                       <div class="row coopring">
                           <div class="col-md-8">
                               <p>&copy; 2015 Roken . All Rights Reserved.  1995 - 2015</p>
                           </div>
                       </div>    
                       <!-- End coopring-->  
                    </div>
                    <!-- End Nav-->

                    <!-- Social-->
                    <div class="col-md-4">
                        <!-- Menu-->
                        <ul class="social">
                            <li data-toggle="tooltip" title data-original-title="Facebook">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li> 
                            <li data-toggle="tooltip" title data-original-title="Twitter">
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li> 
                            <li data-toggle="tooltip" title data-original-title="Youtube">
                                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>                     
                        </ul>
                        <!-- End Menu-->
                    </div>
                    <!-- End Social-->

               </div> 
                    
            </div>
        </footer>      
        <!-- End footer bottom-->
    </div>
    <!-- End layout-->

    <!-- ======================= JQuery libs =========================== -->
    <!-- jQuery local-->
    <?=script_tag("assets/js/jquery.js")?>
    <!--Nav-->
    <?=script_tag("assets/js/jquery.js")?>
    <?=script_tag("assets/js/nav/tinynav.js")?>
    <?=script_tag("assets/js/nav/superfish.js")?>
    <?=script_tag("assets/js/nav/hoverIntent.js")?>
    <?=script_tag("assets/js/nav/jquery.sticky.js")?>                                      
    <!--Totop-->
    <?=script_tag("assets/js/totop/jquery.ui.totop.js")?>      
    <!--Slide Revolution-->
    <?=script_tag("assets/js/rs-plugin/js/jquery.themepunch.tools.min.js")?>
    <?=script_tag("assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js")?>
    <!--Ligbox--> 
    <?=script_tag("assets/js/fancybox/jquery.fancybox.js")?>
    <!-- carousel.js-->
    <?=script_tag("assets/js/carousel/carousel.js")?>
    <!-- Twitter Feed-->
    <?php/*script_tag("assets/js/twitter/jquery.tweet.js")*/?>
    <!-- flickr Feed-->
    <?=script_tag("assets/js/flickr/jflickrfeed.min.js")?>
    <!--Scroll-->   
    <?=script_tag("assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js")?>
    <!-- Maps -->
    <?=script_tag("assets/js/maps/gmap3.js")?>
    <!-- Filter -->
    <?=script_tag("assets/js/filters/jquery.isotope.js")?>
    <!-- Parallax-->
    <?=script_tag("assets/js/parallax/jquery.inview.js")?>
    <?=script_tag("assets/js/parallax/nbw-parallax.js")?>
    <?=script_tag("assets/js/theme-options/jquery.cookies.js")?>                          
    <!-- Bootstrap.js-->
    <?=script_tag("assets/js/bootstrap/bootstrap.js")?>    
    <!--MAIN FUNCTIONS-->
    <?=script_tag("assets/js/main.js")?>  
    <!-- ======================= End JQuery libs =========================== -->

    <!--Slider Function-->
    <script type="text/javascript">
        var revapi;
        jQuery(document).ready(function() {
           revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:580,
                spinner:"spinner4",
                hideThumbs:10,
                fullWidth:"on",
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                forceFullWidth:"on"
            });
        }); 
    </script>
    <!--End Slider Function-->
        
    </body>
</html>