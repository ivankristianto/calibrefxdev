jQuery(document).ready(function($){
	var container = document.querySelector('#content');
	var msnry = new Masonry( container, {
	  // options
	  columnWidth: 30,
	  itemSelector: '.post'
	});
});

function check_focus(elm,val){
    if(elm.value.toLowerCase() == val.toLowerCase()){
        elm.value = '';    
    }
}

function check_blur(elm,val){
    if(elm.value.toLowerCase() == ''){
        elm.value = val;    
    }
}