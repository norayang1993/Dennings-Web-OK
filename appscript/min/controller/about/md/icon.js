/*! my-web-project 2017-01-03 */
$(function(){$.vmodel.create({selector:".content",model:"--icon",isautoload:!0,method:function(){var a=this;this.autoload=["init"],this.init=function(){local_listen(),a.center(),a.show()},this.show=function(){a.root.css({opacity:1})},local_listen=function(){$(window).on("resize",function(){a.center()})},this.center=function(){$.vmodel.get("global/diff_screen").event({mobile:function(){a.iconsite_height("auto")},pad:function(){a.iconsite_height("auto")},desktop:function(){var b=a.desc_height();a.iconsite_height(b)}})},this.iconsite_height=function(b){if(!b)return a.root.find(".iconsite").height();var c=a.root.find(".iconsite");c.height(b),c.find(".outer").css("height","100%"),c.find(".inner").css("width","96%")},this.desc_height=function(){var b=a.root.find(".desc"),c=parseInt(b.height());return c}}})});