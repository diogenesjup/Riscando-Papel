$( document ).ready(function() {



                            
                            // ####### BANNER PRINCIPAL
                            var superBanner = $('#superBanner').owlCarousel({
                                    loop:true,
                                    margin:0,
                                    items: 1,
                                    autoplay: true,
                                    center: true,
                                    navText: [
                                        '<img src="images/esquerda.png" alt="Banner anterior">',
                                        '<img src="images/direita.png" alt="Próximo Banner">'
                                    ], 
                                    navContainer: '.custom-nav-banner2',
                                    autoplayTimeout:6500,
                                    dotsContainer: '#carousel-custom-dots',
                                    autoplayHoverPause:true                                        
                            });

                            // AGORA TEMOS ATÉ DOTS!!!
                            $('.owl-dot').click(function () {
                               superBanner.trigger('to.owl.carousel', [$(this).index(), 300]);
                            });



                            
                            // ####### MARCAS
                            var loopProdutos1 = $('#loopMarcas').owlCarousel({
                                    loop:true,
                                    margin:20,
                                    items: 5.5,
                                    autoplay: true,
                                    center: true,
                                    autoplayHoverPause:true,
                                    navText: [
                                        '<img src="images/esquerda.svg" alt="Página anterior">',
                                        '<img src="images/direita.svg" alt="Próximo Página">'
                                    ], 
                                    navContainer: '.custom-nav-loop1',
                                    responsive:{
                                            0:{
                                                items:2.5,
                                                margin:10
                                            },
                                            600:{
                                                items:3.5,
                                                margin:10
                                            },
                                            900:{
                                                items:4.5,
                                                margin:12
                                            },
                                            1200:{
                                                items:5.5,
                                                margin:20
                                            }
                                    }                                     
                            });

                            

}); 



// ABRIR E FECHAR MENU CLIENTE
function abrirFecharMenuMobile(){

      if($(".menu-mobile-side").hasClass("aberto")){
         
        $(".menu-mobile-side").removeClass("aberto");
        
      }else{

        $(".menu-mobile-side").addClass("aberto");
        
      }

}



// MENU FIXO NAS PÁGINAS INTERNA
jQuery(document).ready(function ($) {
  var entreiAnimateNumber = 0;
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
     if (scroll < 200){
         $("header.fixo").css("top","-100%");
     }
     if (scroll > 200){
         $("header.fixo").css("top","0px");
     }
  });
});