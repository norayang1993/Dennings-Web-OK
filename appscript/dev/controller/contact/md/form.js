$(function (){
    $.vmodel.create({
        selector: '.form1',
        model: '--form',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init', 'submit', 'theme'];
            this.init = function (){
                vs.bc(false);
            }

            this.theme = function (){
                vs.root.on("change", ".theme", function (){
                    var val = $(this).val();
                    if (val == "Service") {
                        vs.bc(true);
                    }
                    else {
                        vs.bc(false);
                    }
                });
                
            }

            this.bc = function (status){
                if (status) {
                    vs.root.find(".bc").prop("disabled", false);
                }
                else {
                    vs.root.find(".bc").val("").prop("disabled", true);
                }
            }

            this.submit = function (){
                vs.root.on("submit", function (){
                    $(this).ajaxSubmit(function (data){
                        console.log(data);
                        // return false;

                        var obj = JSON.parse(data);
                        
                        if (obj.status == "error") {
                            alert(obj.message);
                            console.log(obj)
                            return false;
                        }
                        
                        $(vs.selector)[0].reset();
                        alert("Your message has been successfully sent");
                    })
                    return false;
                });
                
            }
        }
    });
    
})