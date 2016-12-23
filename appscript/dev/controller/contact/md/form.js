$(function (){
    $.vmodel.create({
        selector: '.form1',
        model: '--form',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['submit'];
            this.init = function (){
                
            }

            this.submit = function (){
                vs.root.on("submit", function (){
                    $(this).ajaxSubmit(function (data){
                        console.log(data);
                        var obj = JSON.parse(data);
                        if (obj.status == "success"){
                            alert("success");
                            vs.root[0].reset();
                        }
                    })
                    return false;
                });
                
            }
        }
    });
    
})