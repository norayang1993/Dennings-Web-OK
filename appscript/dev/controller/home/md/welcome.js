$(function (){
	$().vmodel({
	    selector: '.container', 
	    model: '--welcome', 
	    isautoload: true, 
	    method: function (){
	        var vs = this;
	        this.autoload = ['init']; 

	        this.init = function (){
	        	console.log('Use jquery.vmodel.js');
	            console.log('Hello World');
	        }
	    }
	});
});