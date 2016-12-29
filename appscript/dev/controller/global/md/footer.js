$(function (){
    $.vmodel.create({
        selector: 'footer.footer',
        model: '--global/footer',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['language'];
            this.init = function (){
                
            }

            this.height = function (){
                return vs.root.height();
            }

            this.language = function (){
                vs.root.on("change", ".lang", function (){
                    var lang = $(this).val();
                    $.get("app/language/switch", {
                        lang: lang
                    }, function (data){
                        console.log(data);
                        if (data == "1") location.reload();
                    })
                    return false;
                });
            }
        }
    });
})