$(function (){
    $.vmodel.create({
        selector: '.product',
        model: '--switch',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['click'];

            //點擊
            this.click = function (){
                vs.root.find(".protab_site").on("click", ".item", function (){
                    var target = $(this).attr("data-target");
                    var top = vs.page_top(target);
                    vs.set_color(this);
                    vs.goto(top);
                    return false;
                })
            }

            // 取得高度
            this.page_top = function (target){
                var $target = $("." + target);
                var top = $target.offset().top;
                return top;
            }

            // 前往
            this.goto = function (val){
                var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
                 
                $body.animate({
                    scrollTop: val
                }, 500);
            }

            // 設定識別色彩
            this.set_color = function (usethis){
                vs.root.find(".protab_site .selected").removeClass('selected');
                $(usethis).addClass('selected');
            }
        }
    });
    
})