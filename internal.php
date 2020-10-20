<?php $this->inc("elements/header.php"); ?>
<div class="kappa">
    <?php
        if ($c->getCollectionName() == 'Original BBQ Sauce' || $c->getCollectionName() == 'Chicken Sauce' || $c->getCollectionName() == 'Zesty BBQ Sauce' || $c->getCollectionName() == 'Buffalo Wing Sauces' || $c->getCollectionName() == 'Spiedie Marinade' || $c->getCollectionName() == 'Roasted Garlic Teriyaki' || $c->getCollectionName() == 'Coleslaw Dressing' || $c->getCollectionName() == 'Pulled Pork Rub' || $c->getCollectionName() == 'Oneonta Hot' || $c->getCollectionName() == 'Meat Seasoning' || $c->getCollectionName() == "Grillin's Rub" || $c->getCollectionName() == 'Sea Salt Veggie Rub' || $c->getCollectionName() == 'Appetizers' || $c->getCollectionName() == 'Soups & Stews' || $c->getCollectionName() == 'Salads' || $c->getCollectionName() == 'Sides' || $c->getCollectionName() == 'Burgers & Sandwiches' || $c->getCollectionName() == 'Main Entree' || $c->getCollectionName() == 'Desserts') { ?>
            <div class="secondary_nav">
                <?php 
                    $bt_main = BlockType::getByHandle('autonav'); 
                    
                    $bt_main->controller->displayPages = 'third_level'; 
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
        <?php } 
        else { ?>
            <div class="secondary_nav">
                <?php 
                    $bt_main = BlockType::getByHandle('autonav'); 
                    
                    $bt_main->controller->displayPages = 'second_level'; 
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
        <?php } ?>
	<div class="inner">
        <?php if ($c->getCollectionHandle() == "tour-our-campus") { ?>
            <div id="interactive_map">
                <a id="map_catering" class="map-pin" href="/catering"></a>
                <a id="map_bbq_pit" class="map-pin" href="/careers"></a>
                <!--<a id="map_gift_shop" class="map-pin" href="/restaurant/ice-cream-shop-gift-shop"></a>-->
                <a id="map_gift_shop" class="map-pin" href="http://www.brooksbottlingco.com/"></a>
                <a id="map_banquet" class="map-pin" href="/banquets"></a>
                <a id="map_restaurant" class="map-pin" href="/restaurant"></a>
                <a id="map_kids_park" class="map-pin" href="/restaurant/just-kids"></a>
            </div>
        <?php } 
        else { ?>
    		<?php
    			$a = new Area('Main');
    			$a->enableGridContainer();
    			$a->display($c);
    		?>
        <?php } ?>
	</div>
</div> 

<?php $this->inc("elements/footer.php"); ?>