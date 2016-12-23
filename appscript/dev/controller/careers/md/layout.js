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
            this.autoload = ['init'];
            this.init = function (){
                
            }

            this.show = function (){
                vs.root.show();
            }

            this.hide = function (){
                vs.root.hide();
            }
        }
    });
})