$( document ).ready(function() {



                            
                            // ####### BANNER PRINCIPAL
                            var superBanner = $('#superBanner').owlCarousel({
                                    loop:true,
                                    margin:0,
                                    items: 1,
                                    autoplay: true,
                                    center: true,
                                    navText: [
                                        '<img src="'+homeUrl+'images/esquerda.png" alt="Banner anterior">',
                                        '<img src="'+homeUrl+'images/direita.png" alt="Próximo Banner">'
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
                                        '<img src="'+homeUrl+'images/esquerda.svg" alt="Página anterior">',
                                        '<img src="'+homeUrl+'images/direita.svg" alt="Próximo Página">'
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
        <button class="btn btn-secondary btn-sm" onclick="calcularCep();">Calcular</button>
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
                  url: homeUrl+"calcular-cep.php",
                  data:{cepUsuario:cepUsuario,homeUrl:homeUrl}
              
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




function activeVariation(idVariacao,urlImagemVariacao){
            
            console.log("USUÁRIO SELECIONOU O PRODUTO: "+idVariacao);
            $("#btnComprar").attr("href",homeUrlDom+"?add-to-cart="+idVariacao);
            $("#btnComprar").html(`ADICIONAR AO CARRINHO`);
            
            // MUDAR A IMAGEM DO PRODUTO
            mudarImagemProduto(urlImagemVariacao);

}



function ordenarProdutos(ordenacao){

  console.log("USUÁRIO QUER REORDENAR PRODUTOS DA PÁGINA DA LOJA");
  console.log("ORDENAÇÃO POR: "+ordenacao);

  /*
   <option value="0">Ordenação:</option>
   <option value="1">Ordenar por destaques</option>
   <option value="2">Mais recentes</option>
   <option value="3">Por preço: mais baratos para mais caros</option>
   <option value="4">Por preço: mais caros para mais baratos</option>
   <option value="5">Mais vendidos</option>

  */
  
  console.log("DIRECIONANDO O USUÁRIO");

  if(ordenacao==1 || ordenacao==0){ location.href="?ordenacao=default-list"; }
  if(ordenacao==2){ location.href="?orderby=date"; }
  if(ordenacao==3){ location.href="?orderby=price"; }
  if(ordenacao==4){ location.href="?orderby=price-desc"; }
  if(ordenacao==5){ location.href="?orderby=popularity"; }

}







