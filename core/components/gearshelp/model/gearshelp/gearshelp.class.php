<?php
/**
 * Created by PhpStorm.
 * User: matdave
 * Email: mat@matdave.com
 * Twitter: @matjones
 * Date: 5/20/14
 * Time: 11:54 AM
 * Project: GearsHelp
 */ 
class gearshelp {
    public $modx;
    public $config = array();
    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;

        $basePath = $this->modx->getOption('gearshelp.core_path',$config,$this->modx->getOption('core_path').'components/gearshelp/');
        $assetsUrl = $this->modx->getOption('gearshelp.assets_url',$config,$this->modx->getOption('assets_url').'components/gearshelp/');
        $managerURL = $this->modx->getOption('manager_url');
        $this->config = array_merge(array(
            'basePath' => $basePath,
            'corePath' => $basePath,
            'managerPath' => $managerURL,
            'modelPath' => $basePath.'model/',
            'processorsPath' => $basePath.'processors/',
            'templatesPath' => $basePath.'templates/',
            'chunksPath' => $basePath.'elements/chunks/',
            'jsUrl' => $assetsUrl.'js/',
            'cssUrl' => $assetsUrl.'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl.'connector.php',
        ),$config);
        $this->modx->addPackage('gearshelp',$this->config['modelPath']);

    }
}