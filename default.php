<?php $this->inc("elements/header.php"); ?>
<div class="delta">
<div id="mobileOrder">
                <div id="mobileOrderContent">
                <div id="mobileOrderLeft">
                    <h2>Order Carryout!</h2>
                    <a href="https://order.ehungry.com/Brooks-BBQ/login"><button>ORDER NOW <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
                    <a href="https://play.google.com/store/apps/details?id=com.brooksbbq.ordering"><button>GET THE APP <i class="fa fa-chevron-right" aria-hidden="true"></i></button></a>
                    
                </div>
                <div id="mobileOrderRight">
                <br>
                <?php
                    $a = new Area('Hours');
                    $a->enableGridContainer();
                    $a->display($c);
                ?>

                </div>
                </div>
                </div>
	<div class="inner">
            <div class="order-box">
                <img src="<?php echo $this->getThemePath(); ?>/images/preorder.png" usemap="#image_map" class="order-image">
                <map name="image_map">
                    <area shape="rect" coords="316, 27, 397, 59" href="https://order.ehungry.com/Brooks-BBQ/login" target="_blank" />
                    <area shape="rect" coords="237, 28, 310, 59" href="tel:6074321782" />
                </map>
                <div class="mobile-preorder">
                    <span>Now open for indoor seating with your carry out order.</span>
                    <p>Please pre-order by <a href="tel:6074321782">phone</a>, <a href="https://order.ehungry.com/Brooks-BBQ/login">online</a>, or order at our take out windows.</p>
                </div>
            </div>
		<?php
			$a = new Area('Main');
			$a->enableGridContainer();
			$a->display($c);
		?>
	</div>
        	
</div>  
<div class="epsilon">
	<div class="callouts">
        <ul class="calls">
            <li>
                <a href="/restaurant">
                    <img src="<?php echo $this->getThemePath(); ?>/images/our_restaurant.png">
                    <h2>Our Restaurant</h2>
                </a>
            </li>
            <li>
                <a href="/restaurant/tour-our-campus">
                    <img src="<?php echo $this->getThemePath(); ?>/images/our_location.png">
                    <h2>Our Location</h2>
                </a>
            </li>
            <li>
                <a href="/restaurant/our-menu">
                    <img src="<?php echo $this->getThemePath(); ?>/images/view_our_menu.png">
                    <h2>View Our Menu</h2>
                </a>
            </li>
        </ul>
		<!-- <?php 
            if ($c->getCollectionName() == 'Home') {
            Loader::model("file_set");
            Loader::model('file_list');
            $nh = Loader::helper('navigation');
         
            $fs = FileSet::getByName('Callouts');
            if ($fs != '') {
                $fl = new FileList();
                $fl->filterBySet($fs);
                $fl->sortBy('fsDisplayOrder', 'asc');
                $files = $fl->get();
                $i = 0;
                echo "<ul class='calls'>";
                foreach($files as $f) 
                {
                    echo "<li>";
                    if ( $f->getAttribute('int_image_link') != "") {
                        $pageID = $f->getAttribute('int_image_link');
                        $page = Page::getByID($pageID);
                        $URL = $nh->getCollectionURL($page);
                        echo "<a href='".$URL."'>";
                    }
                    if ( $f->getAttribute('ext_image_link') != "") {
                        $URL = $f->getAttribute('ext_image_link');
                        echo "<a href='".$URL."'>";
                    }
                    echo "<img src='".$f->getRelativePath()."'>";
                    echo "<h2>".$f->getTitle()."</h2>";
                    if ($f->getAttribute('int_image_link')){    
                        echo "</a>";
                    }
                    if ($f->getAttribute('ext_image_link')){    
                        echo "</a>";
                    }
                    echo "</li>";
                }
                echo "</ul>";
            }
		} else {

        } ?> -->
    </div>
</div>
<div class="zeta">
	<div class="left">
		<a href="https://brooks-bbq.myshopify.com/collections/sauces">
			<div class="btn_text_green">Get Saucy!</div>
			<img src="<?php echo $this->getThemePath(); ?>/images/brooks-sauces.jpg">
		</a>
	</div>
	<div class="right">
		<a href="https://brooks-bbq.myshopify.com/collections/rubs-seasoning">
		<div class="btn_text_green">Start Rubbin'!</div>
		<img src="<?php echo $this->getThemePath(); ?>/images/brooks-rubs.jpg"></a>
	</div>
</div>
<div class="eta">
	<a href="<?php echo View::url('/restaurant/our-story'); ?>">
	<div class="btn_text_blue">Read More</div>
	<img src="<?php echo $this->getThemePath(); ?>/images/BrooksBBQ_history-photo_chs012318.jpg"></a>
</div>
<div class="theta">
	<a href="<?php echo View::url('/recipes'); ?>">
	<div class="btn_text_green">What's for Dinner?</div>
	<img src="<?php echo $this->getThemePath(); ?>/images/BrooksBBQ_recipes-photo_chs012318.jpg"></a>
</div>

<?php $this->inc("elements/footer.php"); ?>