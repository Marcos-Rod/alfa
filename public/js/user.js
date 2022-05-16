$().ready(function(){
    let containerMenu = $('#hd-menu');

    $(window).scroll(function(){
        let columns = containerMenu.find('.item')
        if($(window).scrollTop() > 200){
           containerMenu.addClass('mnu-fixed');
           columns.hide();
        }else{
           if(containerMenu.hasClass('mnu-fixed')){
               containerMenu.removeClass('mnu-fixed');
               columns.show();
           }
       }
    });

    /*Nav scroll active*/
	$('#menu').onePageNav({
		currentClass: 'active',
		changeHash: false,
		scrollSpeed: 450,
		scrollThreshold: 0.4,
		filter: '',
		easing: 'swing'
	});
	/*Nav scroll active*/

});