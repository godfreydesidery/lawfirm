!function(n){var t={};function e(o){if(t[o])return t[o].exports;var i=t[o]={i:o,l:!1,exports:{}};return n[o].call(i.exports,i,i.exports,e),i.l=!0,i.exports}e.m=n,e.c=t,e.d=function(n,t,o){e.o(n,t)||Object.defineProperty(n,t,{enumerable:!0,get:o})},e.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},e.t=function(n,t){if(1&t&&(n=e(n)),8&t)return n;if(4&t&&"object"==typeof n&&n&&n.__esModule)return n;var o=Object.create(null);if(e.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var i in n)e.d(o,i,function(t){return n[t]}.bind(null,i));return o},e.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(t,"a",t),t},e.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},e.p="/",e(e.s=568)}({568:function(n,t,e){n.exports=e(569)},569:function(n,t){({initNagButton:function(){jQuery(".ff_nag_cross").on("click",(function(n){n.preventDefault();var t=jQuery(this).attr("data-notice_name"),e=jQuery(this).attr("data-notice_type");jQuery("#ff_notice_"+t).remove(),FluentFormsGlobal.$post({action:"fluentform_notice_action",notice_name:t,action_type:e}).then((function(n){console.log(n)})).fail((function(n){console.log(n)}))}))},initTrackYes:function(){jQuery(".ff_track_yes").on("click",(function(n){n.preventDefault();var t=jQuery(this).attr("data-notice_name"),e=0;jQuery("#ff-optin-send-email").attr("checked")&&(e=1),jQuery("#ff_notice_"+t).remove(),FluentFormsGlobal.$post({action:"fluentform_notice_action_track_yes",notice_name:t,email_enabled:e}).then((function(n){console.log(n)})).fail((function(n){console.log(n)}))}))},initSmtpInstall:function(){var n=jQuery(".intstall_fluentsmtp");n.on("click",(function(t){var e=this;t.preventDefault(),jQuery(this).attr("disabled",!0),jQuery(".ff_addon_installing").show(),FluentFormsGlobal.$post({action:"fluentform_install_fluentsmtp"}).then((function(t){n.text("Please wait...."),t.is_installed&&t.config_url?window.location.href=t.config_url:t.is_installed?location.reload():alert("something is wrong when installing the plugin. Please install FluentSMTP manually."),console.log(t)})).fail((function(n){var t="something is wrong when installing the plugin. Please install FluentSMTP manually.";n.responseJSON&&n.responseJSON.message&&(t=n.responseJSON.message),alert(t),console.log(n)})).always((function(){jQuery(e).attr("disabled",!1),jQuery(".ff_addon_installing").hide()}))}))},initReady:function(){var n=this;jQuery(document).ready((function(){n.initNagButton(),n.initTrackYes(),n.initSmtpInstall()}))}}).initReady()}});