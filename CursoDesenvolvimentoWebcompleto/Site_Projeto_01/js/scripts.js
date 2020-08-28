$(function(){
    // Aqui vai todo nosso código de javascript.
    $('nav.mobile').click(function(){
        // O que vai acontecer quando clicarmos na nav.mobile
        var listaMenu = $('nav.mobile ul');
        // Abrir menu através do fadeIn
        /*
        if(listaMenu.is(':hidden') == treu){
            listaMenu.fadeIn();
        }
        else{
            listaMenu.fadeOut();
        }
        */
        
        //Abrir ou fechar sem efeitos
        /*
        if(listaMenu.is(':hidden') == true){
            //ListaMenu.show();
            listaMenu.css('display','block');
        }
        else{
            //listaMenu.hide();
            listaMenu.css('display'.'none');
        }
        */
        
        if(listaMenu.is(':hidden') == true){
            //fa fa-times
            //fa fa-bars
            //var icone =$('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');            
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    });

    if($('target').length > 0){
        // O elemento existe, portanto precisamos dar o scroll em algum elemento
        var elemento = '#'+$('target').attr('target');

        var divScroll = $(elemento).offset().top;

        $('html,body').animate({'scrollTop':divScroll},2000); 
    }

    carregarDinamico();
    function carregarDinamico(){
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');
            $('.container-principal').hide();
            $('.container-principal').load(INCLUDE_PATH+'pages/'+pagina+'.php');
            
            setTimeout(function(){
                initialize();
                addMarker(-25.441105,-49.276855,'',"Minha Localização!",undefined,false);        
            },1000);

            $('.container-principal').fadeIn(1000);
            
            return false;
        })
    }

})