	<?php if ($c->getCollectionName() == 'Home') { ?>
        <div class="chi">
            <h1>Stay Social</h1>
            <div id="FeederNinja_913ec25f7e9444ceb30bcedca6eaaf8f"></div>
            <script type="text/javascript">
                (function() {
                    var fn = document.createElement('script'); fn.type = 'text/javascript';
                    fn.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.feederninja.com/api/feed/913ec25f7e9444ceb30bcedca6eaaf8f?fnurl=' + window.location.href;
                    var s = document.getElementsByTagName('head')[0].appendChild(fn);
                })();
            </script>
        </div>
        <?php } 
    else {

    } ?>
    <div class="phi">
        <img src="<?php echo $this->getThemePath(); ?>/images/footer_arc2.png">
    </div>
    <div class="psi">
        <div class="left">            
            <div class="logo">
                <a href="<?php echo View::url('/'); ?>"><img src="<?php echo $this->getThemePath(); ?>/images/logo.png"></a>
            </div>
        </div>
        <div class="middle">
            <h2>Contact Us</h2>
            <p>5560 State Highway 7</p>
            <p>Oneonta, NY 13820</p>
            <p>P: (607) 432-1782</p>
            <p>Toll Free: (800) 498-2445</p>
            <p>Email: <a href="mailto:brooks.info@brooksbbq.com">brooks.info@brooksbbq.com</a></p>

        </div>
        <div class="right">
            <h2>Navigation</h2>
            <div class="footer_nav">
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
          <a href="https://order.ehungry.com/Brooks-BBQ/checkout" target="_blank" style=" color: white; font-size: 20px"><button style="background-color: #a60f16; padding: 10px 20px; margin-top: 10px;">Order Online!</button></a> 
        </div>
		<div class="socmed">
			<ul>
                <li>
                    <a href="https://www.facebook.com/Brooks-House-of-Bar-B-Q-Oneonta-NY-89996312457" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <!--<li>
                    <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>-->
                <li>
                    <a href="https://www.youtube.com/channel/UC7qptj3sfhRhmsyOw-yHr5g" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                </li>
                <!--<li>
                    <a href="http://www.flickr.com/" class="flickr" target="_blank"><i class="fa fa-flickr"></i></a>
                </li>-->
            </ul>
        </div>
	</div><!--ZETA CLOSED-->
    <?php 
        /*$a = new Area('Hours');
        if (($a->getTotalBlocksInArea($c)>0) || ($c->getCollectionID() == '1' && $c->isEditMode())) {*/ ?>
        <div class="hours">
            <p><span>Order Pickup to Dine In, Carryout or Curbside: </span>Tuesday - Thursday & Sunday 11am - 7pm | Friday & Saturday 11am - 8pm</p>
            <p><span>DELIVERY HOURS: </span>Tuesday - Sunday 11am - 7pm</p>
            <?php
               // $a->display($c);
            ?>
        </div>
    <?php //} ?>
</div><!--OMEGA CLOSED-->


<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/struct/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/struct/js/responsiveslides.min.js"></script>

<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/struct/js/custom.js"></script>

<?php Loader::element('footer_required'); ?>
 
</body>
</html>