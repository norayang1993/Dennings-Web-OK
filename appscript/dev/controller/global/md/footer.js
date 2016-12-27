$(function (){
    $.vmodel.create({
        selector: 'footer.footer',
        model: '--global/footer',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init'];
            this.init = function (){
                
            }

            this.height = function (){
                return vs.root.height();
            }
        }
    });
})