$(function (){
    $.vmodel.create({
        selector: '.itemlist',
        model: '--apply',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['click'];

            // 點擊職業的 apply 按鈕，呼叫覆蓋層，並且顯示對應區塊
            this.click = function (){
                vs.root.on("click", ".apply", function (){
                    var target = $(this).attr("data-target");
                    $.vmodel.get("page").show(target);
                    
                    return false;
                });
            }
        }
    });
    
})