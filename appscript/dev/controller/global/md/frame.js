$(function (){

    $.vmodel.create({
        selector: window,
        model: '--global/frame',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['doevent', 'screen_do'];
            
            // 依照不同尺寸螢幕
            this.screen_do = function (){
                $(window).resize(function (){
                    vs.doevent();
                });
            }

            this.doevent = function(){
                // 利用 requirejs 可以避免程式重複載入
                $.vmodel.get("global/diff_screen").event({
                    
                    //手機
                    mobile: function (){requirejs(
                    [
                        'mobile'
                    ])},

                    //平板
                    pad: function (){requirejs(
                    [
                        'pad'
                    ])},
                    
                    //桌電
                    desktop: function (){requirejs(
                    [
                        'desktop',
                    ])}

                });
            }
        }
    });
    
    
})