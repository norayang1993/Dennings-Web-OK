/*! my-web-project 2017-01-03 */
$(function(){$.vmodel.create({selector:window,model:"--global/frame",isautoload:!0,method:function(){var a=this;this.autoload=[],this.screen_do=function(){$(window).resize(function(){a.doevent()})},this.height=function(){return a.root.height()},this.doevent=function(){$.vmodel.get("global/diff_screen").event({mobile:function(){requirejs(["mobile"])},pad:function(){requirejs(["pad"])},desktop:function(){requirejs(["desktop"])}})}}})});