/*! caja-kissy  */
var shop_log=function(n,t){function e(n,e){return u.template=u.template||{},t.mix({error_page:s,msg:n,name:t.isString(e)?e:t.DOM.attr(e,"data-modulename"),random:+new Date},{shop_id:u.shopId,site_id:u.siteId,user_id:u.userId,user_nick:u.user_nick,template_name:u.template.name,template_id:u.template.id,design_nick:u.template.design_nick})}function r(n,e,r,i){return u.template=u.template||{},t.mix({type:n,desc:e,module_name:r,time_consume:i},{shop_id:u.shopId,site_id:u.siteId,user_id:u.userId,user_nick:u.user_nick,template_name:u.template.name,template_id:u.template.id,design_nick:u.template.design_nick})}function i(n,t){if(c){var r=e(n,t);goldlog.emit("caja_log",r)}}function o(n,t){if(c){var r=e(n,t);goldlog.emit("caja_log",r)}}function a(n,t,e,i){if(c){var o=r(n,t,e,i);goldlog.emit("caja_per",o)}}var u=n.shop_config||{},s=n.document.location.href;u.template=u.template||{};var c=/.*(\.taobao\.com)$/.test(n.location.host)||-1!==n.location.search.indexOf("caja-debug");return{sendSyncErrorLog:i,sendTamingErrorLog:o,sendJsMonitor:a}}(window,KISSY);