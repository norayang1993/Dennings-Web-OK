$(function (){
    /**
     * 職業項目
     */
    $.vmodel.create({
        selector: '.itemlist',
        model: '--item',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['vpage'];

            // 點擊職業的 apply 按鈕，呼叫覆蓋層，並且顯示對應區塊
            this.click_apply = function (){
                vs.root.on("click", ".apply", function (){
                    var target = $(this).attr("data-target");
                    $.vmodel.get("page").show(target);
                    
                    return false;
                });
            }


            this.vpage = function (){
                $().vpage({
                    parent: ".itemlist",
                    child: ".apply",
                    name: "item",
                    event: "click",
                    prepare: function (){
                        var target = $(this).attr("data-target");
                        $.vpage.set("item", "url", "careers?onload=item&target=" + target);
                    },
                    do: function (){
                        var target = $(this).attr("data-target");
                        $.vmodel.get("page").show(target);
                        return false;
                    },
                    onload: function (){
                        var target = $.vpage.get_url_param('target');
                        $.vmodel.get("page").show(target);
                    },
                    onpop: function (){
                        var target = $.vpage.get_url_param('target');
                        $.vmodel.get("page").show(target);
                    },
                })
                $.vpage.listen();

                $.vpage.default = function (){
                    $.vmodel.get("page").close_all();
                    
                }
            }
        }
    });
    
})