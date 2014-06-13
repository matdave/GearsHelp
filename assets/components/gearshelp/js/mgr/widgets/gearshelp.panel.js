gearshelp.panel.gearshelp = function(config) {
    config = config || {};
    Ext.apply(config,{
        id: 'gearshelp-panel-gearshelp'
        ,url: gearshelp.config.connectorUrl
        ,baseParams: { action: 'mgr/create' }
        ,border: false
        ,anchor: '98%'
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,layout: 'form'
        ,items: [{
            fieldLabel: _('gearshelp.formsubject')
            ,xtype: 'textfield'
            ,name: 'subject'
            ,emptyText: ''
            ,allowBlank: false
        },{
            fieldLabel: _('gearshelp.formmsg')
            ,html: '<p><i>'+_('gearshelp.formmsgdesc')+'</i></p>'
            ,xtype: 'textarea'
            ,name: 'msg'
            ,emptyText: ''
            ,allowBlank: false
        }]
    });
    gearshelp.panel.gearshelp.superclass.constructor.call(this,config);
};
Ext.extend(gearshelp.panel.gearshelp,MODx.Panel);
Ext.reg('gearshelp-panel-gearshelp',gearshelp.panel.gearshelp);