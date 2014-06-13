gearshelp.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('gearshelp.management')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,items: [{
                title: _('gearshelp.formtitle')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+_('gearshelp.formdesc')+'</p>'
                    ,border: false
                    ,bodyCssClass: 'panel-desc'
                },{
                 xtype: 'gearshelp-panel-gearshelp'
                 ,cls: 'main-wrapper'
                 ,preventRender: true
                 }]
            },{
                title: _('gearshelp.listtitle')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+_('gearshelp.listdesc')+'</p>'
                    ,border: false
                    ,bodyCssClass: 'panel-desc'
                },{
                 xtype: 'gearshelp-grid-gearshelp'
                 ,cls: 'main-wrapper'
                 ,preventRender: true
                 }]
            }]
            // only to redo the grid layout after the content is rendered
            // to fix overflow components' panels, especially when scroll bar is shown up
            ,listeners: {
                'afterrender': function(tabPanel) {
                    tabPanel.doLayout();
                }
            }
        }]
    });
    gearshelp.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(gearshelp.panel.Home,MODx.Panel);
Ext.reg('gearshelp-panel-home',gearshelp.panel.Home);