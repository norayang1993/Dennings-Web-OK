$(function (){





    $.vmodel.create({
        selector: '.container',
        model: '--switch',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['vpage'];
            this.init = function (){
                var usethis = vs.root.find(".button_site .item").eq(0).find('a')[0];
                vs.tab(usethis);

            }

            this.vpage = function (){

                $().vpage({
                    parent: vs.selector,
                    child: ".item a",
                    name: "switch",
                    event: "click",
                    prepare: function (){
                        vs.seturl(this);
                    },
                    do: function (){
                        vs.tab(this);
                        return false;
                    },
                    onload: function (){
                        vs.use_url_param_action();
                    },
                    onpop: function (){
                        vs.use_url_param_action();
                    },
                })


                $.vpage.default = function (){
                    vs.init();
                }
                
                $.vpage.listen();


                if ( !$.vpage.get_url_param("onload")) {
                    vs.init()
                }

            }

            // 從網址取得參數後進行動作
            this.use_url_param_action = function (){
                var target = $.vpage.get_url_param("target");
                var usethis = vs.root.find(".item a[data-target="+target+"]")[0];
                vs.tab(usethis);
            }

            // 設定網址
            this.seturl = function (usethis){
                var target = $(usethis).attr('data-target');
                $.vpage.set("switch", "url", "pt?onload=switch&target=" + target);
            }

            // tab 觸發的動作
            this.tab = function (usethis){
                var target = $(usethis).attr("data-target");
                vs.page(target);
                vs.tab_selected(usethis);
            }

            // 選取 tab
            this.tab_selected = function (usethis){
                vs.root.find(".button_site .selected").removeClass('selected');
                $(usethis).addClass("selected");
            }

            // 對應頁面
            this.page = function (target) {
                // alert(target)
                vs.hide_page_all();
                vs.show_page(target);
            }

            // 隱藏所有頁面
            this.hide_page_all = function (){
                vs.root.find(".pagesite .page").hide();
            }

            // 顯示對應的頁面
            this.show_page = function (target){
                vs.root.find(".pagesite .page." + target).show();
            }
        }
    });
    
})