$(function (){
    $.vmodel.create({
        selector: '.content',
        model: '--icon',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init'];
            this.init = function (){
                vs.center();
                local_listen();
                // vs.show();
            }

            this.show = function (){
                vs.root.css({
                    opacity: 1
                });
            }

            // 監聽
            local_listen = function (){
                $(window).on("resize", function (){
                    vs.center();
                })
            }

            // 在桌電時，執行中間
            this.center = function (){
                var current = $.vmodel.get("global/diff_screen").event({
                    mobile: function (){
                        vs.iconsite_height('auto');
                    }, 
                    pad: function (){
                        vs.iconsite_height('auto');
                    },
                    desktop: function (){
                        var h = vs.desc_height();
                        vs.iconsite_height(h);
                    }
                });
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
                    iconsite.find(".inner").css("width", "96%");
                }
                else {
                    return vs.root.find(".iconsite").height();
                }
            }

            /**
             * 描述高度
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