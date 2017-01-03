$(function (){
    $.vmodel.create({
        selector: '.container_wrap',
        model: '--global/container',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['full_height', 'click_overlay'];

            // 讓 container 擴展全高度
            this.full_height = function (){
                // var header = $.vmodel.get("global/header").height();
                // var footer = $.vmodel.get("global/footer").height();
                // var height = $.vmodel.get("global/frame").height();
                // var container_margin_top = parseInt(vs.root.find(".container").css("margin-top"));

                // vs.root.find(".container").css({
                //     'min-height': height - header - footer - container_margin_top
                // })
            }

            /**
             * 覆蓋層
             * @param   show_remove  show | remove
             * @param   callback    function
             */
            this.overlay = function (show_remove, callback){
                
                var cname = "vmodel-global-container-overlay";

                if (show_remove == "show") {
                    vs.root.prepend('<div class="'+cname+'"></div>');
                }
                else {
                    vs.root.find("." + cname).remove();
                }
            }

            this.click_overlay = function (){
                vs.root.on("click", ".vmodel-global-container-overlay", function (){
                    $.vmodel.get("global/menu/mobile").close();
                    vs.overlay("remove")
                    return false;
                });
            }
        }
    });
    
})