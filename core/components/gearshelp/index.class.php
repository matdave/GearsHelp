<?php
/**
 * Created by PhpStorm.
 * User: matdave
 * Email: mat@matdave.com
 * Twitter: @matjones
 * Date: 5/20/14
 * Time: 11:45 AM
 */
require_once dirname(__FILE__) . '/model/gearshelp/gearshelp.class.php';
abstract class gearshelpManagerController extends modExtraManagerController {
    /** @var gearshelp $gearshelp */
    public $gearshelp;
    public function initialize() {
        $this->gearshelp = new gearshelp($this->modx);
        $this->addCss($this->gearshelp->config['cssUrl'].'mgr.css');
        $this->addJavascript($this->gearshelp->config['jsUrl'].'mgr/gearshelp.js');
        $this->addHtml('<script type="text/javascript">
        Ext.onReady(function() {
            gearshelp.config = '.$this->modx->toJSON($this->gearshelp->config).';
        });
        </script>');
        return parent::initialize();
    }
    public function getLanguageTopics() {
        return array('gearshelp:default');
    }
    public function checkPermissions() { return true;}
}
class IndexManagerController extends gearshelpManagerController {
    public static function getDefaultController() { return 'home'; }
}