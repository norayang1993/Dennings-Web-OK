$(function (){
    $.vmodel.create({
        selector: 'header.header',
        model: '--global/header',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['switch_mobile_menu'];

            // 點選漢堡鈕，切換手機選單
            this.switch_mobile_menu = function (){
                vs.root.on("click", ".gtn", function (){
                    var menu = $.vmodel.get("global/menu/mobile")
                    if (menu.islock() == false){
                        menu.open();
                    }
                    else {
                        menu.close();
                    }

                });
            }

            this.height = function (){
                return vs.root.height();
            }
        }
    });
    
})