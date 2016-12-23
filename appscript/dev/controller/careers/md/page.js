$(function (){
    /**
     * 對應的頁面
     */
    $.vmodel.create({
        selector: '.float_page',
        model: '--page',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['close_button'];
            this.init = function (){
            }

            /**
             * 顯示
             * @param     target   
             * @param     callback 
             */
            this.show = function (target, callback){
                
                var num;

                if (!target) {
                    console.log('按鈕未設定屬性 data-target');
                    return false;
                }

                num = local_isexits_page(target);
                
                if (!num) {
                    console.log("對應的頁面: " + target + " 不存在");
                    return false;
                }

                local_show_proccess(target);
                local_scrollTop();

                if (callback) callback.call();
            }

            // 滾軸捲動到上方
            var local_scrollTop = function (){

                var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
                 
                $body.animate({
                    scrollTop: 0
                }, 500);

                vs.root.scrollTop(0)
            }

            /**
             * 依序顯示框架、對應頁面、覆蓋層
             */
            var local_show_proccess = function (target){
                $.vmodel.get("layout").show();
                local_show_frame(target);
                local_find_page(target);
            }

            // 隱藏
            this.hidden = function (usethis){
                $(usethis).parents(".float_container").hide();
                $.vmodel.get("layout").hide();
                
            }

            // 關閉按鈕
            this.close_button = function (){
                vs.root.on("click", ".closebtn", function (){
                    vs.hidden(this);
                });
            }

            this.close_all = function (){
                vs.root.hide();
                vs.root.find(".float_container").hide();
            }

            // 存在頁面?
            var local_isexits_page = function (target){
                return vs.root.find('[data-page-name=' + target + ']').length > 0 ? true : false;
            }

            // 顯示對應頁面
            var local_find_page = function (target){
                vs.root.find('[data-page-name=' + target + ']').show();
            }

            // 僅顯示顯示框架
            var local_show_frame = function (){
                vs.root.show();
            }
        }
    });
    
})