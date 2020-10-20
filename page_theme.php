<?php

namespace Application\Theme\brooks16;
use Concrete\Core\Page\Theme\Theme;
class PageTheme extends Theme
{
    public function registerAssets()
    {
        //$this->providesAsset('javascript', 'bootstrap/*');
        
        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Brooks BBQ 2016 Site');
    }

    public function getThemeDescription()
    {
        return t('Brooks BBQ 2016 Template.');
    }

  
    public function getThemeAreaClasses()
    {
        return array(
            // 'Name of Area' =>array('APPLY This class'),
            // 'Welcome' => array('templatemo-team'),
        );
    }

    public function getThemeBlockClasses()
    {
        return array(
            '*' => array(
                //Seperate class names by comma
                'rslides'
            )
        );
    }

    public function getThemeEditorClasses()
    {
        return array(
            //                  User Visible Name                                   CSS Class
            // array('title' => t('Orange Button'), 'menuClass' => '', 'spanClass' => 'btn btn-orange'),
        );
    }

}
