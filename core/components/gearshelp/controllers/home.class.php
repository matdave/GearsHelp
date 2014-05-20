<?php
/**
 * Created by PhpStorm.
 * User: matdave
 * Email: mat@matdave.com
 * Twitter: @matjones
 * Date: 5/20/14
 * Time: 1:57 PM
 * Project: GearsHelp
 */ 

class gearshelpHomeManagerController extends gearshelpManagerController {
    public function process(array $scriptProperties = array()) {
    }
    public function getPageTitle() { return $this->modx->lexicon('gearshelp'); }
    public function loadCustomCssJs() {
        $this->addJavascript($this->gearshelp->config['jsUrl'].'mgr/widgets/gearshelp.grid.js');
        $this->addJavascript($this->gearshelp->config['jsUrl'].'mgr/widgets/home.panel.js');
        $this->addLastJavascript($this->gearshelp->config['jsUrl'].'mgr/sections/index.js');
    }
    public function getTemplateFile() { return $this->gearshelp->config['templatesPath'].'home.tpl'; }
}