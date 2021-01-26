<?php
/**
 * Back to Top Module Prestashop 1.7
 * @author Jatniel Guzmán - https://jatnielguzman.com
 * @copyright 2021
 * @license MIT
 */

if (!defined('_PS_VERSION_')) {
    exit;
}


class BackToTop extends Module
{
    public function __construct()
    {
        $this->author = 'Jatniel Guzmán';
        $this->name = 'backtotop';
        $this->tab = 'Front';
        $this->version = '1.0.0';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Back to Top Prestashop Module');
        $this->description = $this->l('Back to Top - Scroll - Module Prestashop -Author: Jatniel Guzmán');
        $this->ps_versions_compliancy = array('min' => '1.7.1', 'max' => _PS_VERSION_);
    }

    /**
     * Installation du module
     * @return boolean
     */
    public function install()
    {
        return parent::install()
            && $this->registerHook('footer')
            && $this->registerHook('header');
    }

    /**
     * Désinstallation du module
     * @return boolean
     */
    public function uninstall()
    {
        return parent::uninstall();
    }

    /**
     * hookHeader
     * @return boolean
     */
    public function hookHeader()
    {
        $this->context->controller->addCSS($this->_path . 'views/css/backtotop.css');
        $this->context->controller->addJS($this->_path . 'views/js/backtotop.js');
    }

    /**
     * hookFooter
     * @return boolean
     */
    public function hookFooter()
    {
        return $this->display(__FILE__, 'views/templates/front/footer.tpl');
    }
    
}
