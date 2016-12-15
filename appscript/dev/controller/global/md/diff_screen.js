$(function (){
    //監控屏幕，判別當前解析度後做什麼事情...
    $.vmodel.create({
        selector: '.current_screen',
        model: '--global/diff_screen',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['check'];
            
            
            this.check = function (){
                var num = vs.root.length;
                if (num == 0) {
                    console.log("識別偵測版面的元素不存在，請先建立。");
                }
            }
            
            /**
             * 監控當視窗發生改變時，會執行什麼事情
             * @param   function param.mobile   手機   
             * @param   function param.pad      平板
             * @param   function param.desktop  桌電 
             */
            this.event = function (param){
                vs.check();
                
                if (vs.current() == "mobile") {
                    if (param.mobile) param.mobile.call();
                }
                else if (vs.current() == "pad") {
                    if (param.pad) param.pad.call();
                }
                else if (vs.current() == "desktop") {
                    if (param.desktop) param.desktop.call();
                }
            }

            /**
             * 屏幕判別
             * @return  "mobile" | "pad" | "desktop"
             */
            this.current = function (){
                var scr = vs.root.find("li:visible").attr("class");
                if (scr == "mobile") return scr;
                else if (scr == "pad") return scr;
                else if (scr == "desktop") return scr;
                else return false;
            }
        }
    });
    



    
})