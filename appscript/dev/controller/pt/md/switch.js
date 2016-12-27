$(function (){
    $.vmodel.create({
        selector: '.container',
        model: '--switch',
        isautoload: true,
        method: function (){
            var vs = this;
            this.autoload = ['init', 'tab'];
            this.init = function (){
                
            }

            this.tab = function (){
                vs.root.find(".button_site").on("click", ".item a", function (){
                    var target = $(this).attr("data-target");
                    vs.page(target);
                    vs.selected(this);
                    return false;
                });
            }

            this.selected = function (usethis){
                vs.root.find(".button_site .selected").removeClass('selected');
                $(usethis).addClass("selected");
            }

            this.page = function (target) {
                // alert(target)
                vs.hide_all();
                vs.show(target);
            }

            this.hide_all = function (){
                vs.root.find(".pagesite .page").hide();
            }

            this.show = function (target){
                vs.root.find(".pagesite .page." + target).show();
            }
        }
    });
    
})