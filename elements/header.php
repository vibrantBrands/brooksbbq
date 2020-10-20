<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <?php Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/struct/css/bootstrap-modified.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/struct/css/screen.css" />
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/struct/css/update.css" />
    <script src="https://use.fontawesome.com/2686a5eb8c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900&display=swap" rel="stylesheet">
</head>

<body class="<?php echo $c->getCollectionTypeHandle()?>">
	<div class="omega <?php echo $c->getPageWrapperClass()?>">
        <div class="emergencyAlert" style="background: #a60f16; padding: 15px; color: white; text-align: center;">
                    <?php
                            $a = new GlobalArea("Emergency Alert");
                            $a->display();
                        ?>
                </div>
		<div class="alpha">
            <?php
            if ($c->getCollectionName() == 'Home') { ?>
                <div class="logo">
                    <a href="<?php echo View::url('/'); ?>"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png"></a>
                </div>
            <?php }
            else { ?>
                <div class="int_logo">
                    <a href="<?php echo View::url('/'); ?>"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png"></a>
                </div>
            <?php } ?>

        </div><!--ALPHA CLOSED -->
        <div class="beta">
            <div class="header_image">
                <?php 
                    if ($c->getCollectionName() == 'Home') {
                    Loader::model("file_set");
                    Loader::model('file_list');
                    $nh = Loader::helper('navigation');
                 
                    $fs = FileSet::getByName('Homepage Slides');
                    if ($fs != '') {
                        $fl = new FileList();
                        $fl->filterBySet($fs);
                        $fl->sortBy('fsDisplayOrder', 'asc');
                        $files = $fl->get();
                        $i = 0;
                        echo "<ul class='rslides'>";
                        foreach($files as $f) 
                        {
                            echo "<li>";
                            if ($f->getAttribute('ext_image_link')) {
                                $URL = $f->getAttribute('ext_image_link');
                                echo "<a href='".$URL."'>";
                            }
                            echo "<img src='".$f->getRelativePath()."'>";
                            if ($f->getAttribute('headline') != "") {
                                echo "<h1>".$f->getAttribute('headline')."</h1>";
                            }
                            if ($f->getAttribute('headline_two') != "") {
                                echo "<h2>".$f->getAttribute('headline_two')."</h2>";
                            }
                            if ($f->getAttribute('headline_three') != "") {
                                echo "<h2>".$f->getAttribute('headline_three')."</h2>";
                            }
                            if ($f->getAttribute('button_text') != "") {
                                echo "<p>".$f->getAttribute('button_text')."</p>";
                            }
                            if ($f->getAttribute('ext_image_link')){    
                                echo "</a>";
                            }
                            echo "</li>";
                        }
                        echo "</ul>";
                    }
                ?>
                <?php } else { ?>
                    <?php
                        if ($c->getCollectionAttributeValue('no_header') != $isChecked) {
                            echo "";
                        }
                        elseif ($c->getCollectionAttributeValue('header_image')) {
                            $f = $c->getCollectionAttributeValue('header_image');
                    ?>
                        <?php if ($f->getAttribute('image_link') != ''){ ?>
                            <a href="<?php echo $f->getAttribute('image_link');?>">
                        <?php } ?>
                                
                        <img src='<?php echo ($c->getAttribute('header_image')->getVersion()->getRelativePath());?>'>
                       
                        <?php if ($f->getAttribute('image_link')){ ?>                                    
                            </a>
                        <?php } ?>
                    <?php }
                        else { ?>
                        <img src="<?php echo $this->getThemePath(); ?>/images/internal_header.png">
                    <?php }
                } ?>
            </div>
        </div><!--BETA CLOSED -->
        <?php
            if ($c->getCollectionName() == 'Home') { ?>
                <div class="tau">
                    <img src="<?php echo $this->getThemePath(); ?>/images/header_arc2.png">
                </div>
            <?php }
            else { ?>
                <div class="tau_int">
                    <img src="<?php echo $this->getThemePath(); ?>/images/header_arc2.png">
                </div>
            <?php } ?>
        <?php 
            if ($c->getCollectionName() == 'Home') { ?>
                
                <div class="gamma">
                    <div class="bottles">
                    <div id="onlineOrdering">
                            <div id="orderContent">
                               <?php
                                    $a = new Area('Hours Main');
                                    $a->enableGridContainer();
                                    $a->display($c);
                                ?>
                                <a href="https://order.ehungry.com/Brooks-BBQ/login" target="_blank"><button>ORDER ONLINE <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
                                 <a href="https://play.google.com/store/apps/details?id=com.brooksbbq.ordering" target="_blank"><button>GET THE APP <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
                            </div>
                        </div>
                        <!--<img src="<?php echo $this->getThemePath(); ?>/images/sauces.png">-->
                        <?php 
                            if ($c->getCollectionName() == 'Home') {
                            Loader::model("file_set");
                            Loader::model('file_list');
                            $nh = Loader::helper('navigation');
                         
                            $fs = FileSet::getByName('Homepage Slide Products');
                            if ($fs != '') {
                                $fl = new FileList();
                                $fl->filterBySet($fs);
                                $fl->sortBy('fsDisplayOrder', 'asc');
                                $files = $fl->get();
                                $i = 0;
                                echo "<ul class='rslides_products'>";
                                foreach($files as $f) 
                                {
                                    echo "<li>";
                                    echo "<img src='".$f->getRelativePath()."'>";
                                    echo "</li>";
                                }
                                echo "</ul>";
                            }
                        ?>
                    <?php } else { ?>
                                <img src="<?php echo $this->getThemePath(); ?>/images/sauces-min.png">
                        <?php }
                    ?>
                    </div>
                </div>
            <?php } 
            else {

            } ?>
        	<div class="primary_nav">
                <?php 
                    $bt_main = BlockType::getByHandle('autonav'); 
                    
                    $bt_main->controller->displayPages = 'top'; 
                    // top, above, below, second_level, third_level, custom (Specify the displayPagesCID below)
                    
                    //$bt_main->controller->displayPagesCID = '161'; 
                    //  Specify the CID of the page named: REPERTOIRE ( Gets the first level of pages under that section )
                    
                    $bt_main->controller->orderBy = 'display_asc';  
                    // display_asc, display_desc, chrono_asc, chrono_desc, alpha_desc 
                    
                    $bt_main->controller->displaySubPages = 'none';  
                    // none,  relevant, relevant_breadcrumb, all
                    
                    $bt_main->controller->displaySubPageLevels = 'none'; 
                    // custom, none
                    
                    $bt_main->controller->displaySubPageLevelsNum = '1'; 
                    // Specify how deep level 
                    
                    $bt_main->render('templates/main_nav'); 
                    // Specify your template or type "view" to use default
                ?>
            </div>