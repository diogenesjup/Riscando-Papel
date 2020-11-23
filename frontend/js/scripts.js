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


function mudarImagemProduto(srcImagem){
    $("#imagemPrincipalProduto").attr("src",srcImagem);
}


function trocarCep(){
   
   $("#caixa-cep").html(`

     <div class="form-group">
         <label>Seu CEP:</label>
         <input type="text" class="form-control form-control-sm" id="cepUsuario" placeholder="Digite seu CEP">
     </div>
     
     <div class="form-group">
        <button class="btn btn-secondary btn-sm" onclick="calcularCep();">Atualizar</button>
     </div>

   `);

}


function calcularCep(){
   
  //event.preventDefault();

  var cepUsuario = $("#cepUsuario").val();
  //var homeUrl    = $("#homeUrl").val();

  $(".retorno-cep").html("<p>pesquisando junto aos correios...</p>");

  console.log("ESSE É O CEP DO USUÁRIO: "+cepUsuario);

              // INICIO CHAMADA AJAX
              var request = $.ajax({

                  method: "POST",
                  url: "calcular-cep.php",
                  data:{cepUsuario:cepUsuario}
              
              })
              request.done(function (dados) {            

                  console.log("%c RETORNO DA BUSCA DO CEP","background:#ff0000;color:#fff;");
                  console.log(dados);

                  $("#caixa-cep").html(dados);

              });
              request.fail(function (dados) {
                     
                   console.log("API NÃO DISPONÍVEL (calcularCep)");
                   console.log(dados);

                   $("#caixa-cep").html("Desculpe, os correios parecem estar fora do ar nesse momento. Tente novamente em alguns minutos.");
                   
              });
              // FINAL CHAMADA AJAX

}















