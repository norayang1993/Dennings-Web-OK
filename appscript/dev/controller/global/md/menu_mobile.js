$(function (){
    $.vmodel.create({
        selector: '.navbar_mobile',
        model: '--global/menu/mobile',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init'];

            this.init = function (){
                vs.root.attr('data-is-lock', 'false');
            }
            this.lock = function (bool){
                if (bool){
                    vs.root.attr('data-is-lock', 'true');
                }
                else {
                    vs.root.attr('data-is-lock', 'false');
                }
            }
            this.islock = function (){
                return vs.root.attr('data-is-lock') == "true";
            }

            this.open = function (){
                vs.lock(true);
                vs.root.show();
                $(".container_wrap").transition({
                    x: '-66%'
                })
            }

            this.close = function (){
                $(".container_wrap").transition({
                    x: '0'
                }, function (){
                    vs.lock(false);
                    vs.root.hide();
                })
            }
        }
    });
    
})