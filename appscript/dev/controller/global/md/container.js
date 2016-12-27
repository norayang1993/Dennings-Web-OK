$(function (){
    $.vmodel.create({
        selector: '.container_wrap',
        model: '--global/container',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['full_height'];

            // 讓 container 擴展全高度
            this.full_height = function (){
                var header = $.vmodel.get("global/header").height();
                var footer = $.vmodel.get("global/footer").height();
                var height = $.vmodel.get("global/frame").height();
                var container_margin_top = parseInt(vs.root.find(".container").css("margin-top"));

                vs.root.find(".container").css({
                    'min-height': height - header - footer - container_margin_top
                })
            }
        }
    });
    
})