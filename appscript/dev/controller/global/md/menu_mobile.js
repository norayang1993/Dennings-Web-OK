$(function (){
    // 手機選單
    $.vmodel.create({
        selector: '.navbar_mobile',
        model: '--global/menu/mobile',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init'];

            this.init = function (){
                vs.lock(false)
            }

            // 切換鎖定
            this.lock = function (bool){
                if (bool){
                    vs.root.attr('data-is-lock', 'true');
                }
                else {
                    vs.root.attr('data-is-lock', 'false');
                }
            }

            // 鎖定？
            this.islock = function (){
                return vs.root.attr('data-is-lock') == "true";
            }

            // 打開
            this.open = function (){
                vs.lock(true);
                vs.root.show();
                $(".container_wrap").transition({
                    x: '-66%'
                }, 400)
                $.vmodel.get("global/container").overlay("show");
            }

            // 關閉
            this.close = function (){
                $(".container_wrap").transition({
                    x: '0'
                }, 200, function (){
                    vs.lock(false);
                    vs.root.hide();
                })
            }
        }
    });
    
})