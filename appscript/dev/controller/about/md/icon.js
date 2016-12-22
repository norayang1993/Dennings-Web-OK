$(function (){
    $.vmodel.create({
        selector: '.content',
        model: '--icon',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init'];
            this.init = function (){
                local_listen();
                vs.center();
                vs.show();
            }

            this.show = function (){
                vs.root.show();
            }

            // 監聽
            local_listen = function (){
                $(window).on("resize", function (){
                    vs.center();
                })
            }

            // 執行中間
            this.center = function (){
                var h = vs.desc_height();
                vs.iconsite_height(h)
            }

            /**
             * icon 區塊高度
             * @param   val 若有值代表設定高度
             */
            this.iconsite_height = function (val){
                if (val) {
                    var iconsite = vs.root.find(".iconsite");
                    iconsite.height(val);
                    iconsite.find(".outer").css("height", "100%");
                    iconsite.find(".inner").css("width", "90%");
                }
                else {
                    return vs.root.find(".iconsite").height();
                }
            }

            /**
             * 描述高度
             * @return {[type]} [description]
             */
            this.desc_height = function (){
                var desc = vs.root.find(".desc");
                var total = parseInt(desc.height());
                // var mbottom = parseInt(desc.css("margin-bottom"));
                // var height = total - mbottom;
                // return height;
                return total;
            }
        }
    });
    
})