$(function (){
    /**
     * 覆蓋層
     */
    $.vmodel.create({
        selector: '.layout_close',
        model: '--layout',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['click'];
            this.init = function (){
                
            }

            this.show = function (){
                vs.root.show();
            }

            this.hide = function (){
                vs.root.hide();
            }

            // 點擊覆蓋層可以關閉當前浮動頁面
            this.click = function (){
                vs.root.on("click", function (){
                    alert()
                });
                
            }
        }
    });
})