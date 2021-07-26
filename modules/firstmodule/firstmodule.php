<?php

if (!defined('_PS_VERSION_')) {
    exit;
}
use \PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class Firstmodule extends Module implements WidgetInterface {

    public function __construct()
    {
        $this->name='firstmodule';
        $this->tab='front_office_features';
        $this->version='1.0.0';
        $this->author='Youssef Azzouz';
        $this->need_instance=0;
        $this->ps_versions_compliancy=[
          'min'=>'1.7',
          'max'=>_PS_VERSION_
        ];
        $this->bootstrap=true;
        parent::__construct();
        $this->displayName=$this->l('First Module');
        $this->description=$this->l('this a test module');
        $this->confirmUninstall=$this->l('Confirm the uninstallation');
        if(!Configuration::get('FIRSTMODULE_NAME')){
            $this->warning=$this->l('No name provided');
        }

    }
    public function install(){
        //checking if multistore feature is enabled
        if(Shop::isFeatureActive()){
            Shop::resetContext(Shop::CONTEXT_ALL);
        }
        //check the module class parent is installed
        if(!parent::install()||
            !$this->registerHook('displayAtSpecificPlace')||
            !$this->registerHook('rightColumn')||
            !$this->registerHook('header')||
            !Configuration::updateValue('FIRSTMODULE_NAME','my module')){
            return false;
        }
        return true;
    }


    public function uninstall()
    {
        if(!parent::uninstall() ||
            !Configuration::deleteByName('FIRSTMODULE_NAME')
        ){
            return false;
        }
        return true;
    }
    public function hookRightColumn(){
        return "hey";
    }

//    public function hookHeader($params){
//        //print_r($params);
//        return "Hello from my new module ".$this->name;
//    }

    public function renderWidget($hookName, array $configuration)
    {
        //Hook::exec("header");
        return "Hello from widget function!!!";
        // TODO: Implement renderWidget() method.
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
        // TODO: Implement getWidgetVariables() method.
    }
}