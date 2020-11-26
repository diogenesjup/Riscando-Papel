
<!-- MARCAS -->
<section class="marcas white">

    <div class="container">
        
        <!-- TITULO SESSAO -->
        <div class="row">
            <div class="col-12 titulo-sessao">
                <h3>Principais marcas</h3>
            </div>
        </div>
        <!-- TITULO SESSAO -->

    </div>

    <!-- LOOP MARCAS -->
    <div id="loopMarcas" class="loop-marcas owl-carousel owl-theme">
        
         <?php

          if( have_rows('marcas',17433) ):
            $num_banner=0;
              while ( have_rows('marcas',17433) ) : the_row();

        ?>

             <!-- ITEM -->
             <div class="item">
                 <div class="caixa-marca" style="background: url('<?php the_sub_field("logo_da_marca"); ?>') transparent no-repeat;background-size: 60% auto;background-position: center center;">
                     &nbsp;
                 </div>
             </div>
             <!-- ITEM -->

         <?php

                $num_banner++;
              endwhile;
          endif;

        ?> 

    </div>
    <div class="controle-banner-na-loop1">
        <div class="owl-theme">
            <div class="owl-controls">
                <div id="#custom-nav-loop1" class="custom-nav-loop1 owl-nav"></div>
            </div>
        </div>
    </div>
    <!-- LOOP MARCAS -->



</section>
<!-- MARCAS -->


<!-- FOOTER -->
<footer>

    <div class="bars">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>


    <!-- PALAVRAS CHAVES -->
    <div class="keywords">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <h5>Palavras chaves:</h5>
                    <p>
                        <?php the_field("palavras_chaves",17433); ?>
                    </p>

                </div>
            </div>

            <div class="row logos-apoio">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 coluna-um">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/meios-de-pagamento.png" alt="Formas de pagamento aceitas" />
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 coluna-dois">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/site-blindado.png" alt="Site Blindado" />
                </div>
            </div>
            
        </div>
    </div>
    <!-- PALAVRAS CHAVES -->
    
    <!-- CONTEUDO RODAPE -->
    <div class="conteudo-rodape">
        <div class="container">
            <div class="row">
                <!-- COLUNA UM -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 coluna-um">
                    <h3>Fale com a gente</h3>
                    <p>
                        <i class="fa fa-envelope"></i> atendimento@riscandopapel.com.br
                    </p>
                    <div class="logos">
                        
                        <p>
                          <a href="<?php echo get_option('home'); ?>/" title="Riscando Papel">
                             <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Riscando papel logo" />
                          </a>
                        </p>
                       
                    </div>
                </div>
                <!-- COLUNA UM -->
                <!-- COLUNA DOIS -->
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12 coluna-dois">
                    <div class="row">
                        <!-- SUB COLUNA -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 colunas">
                            <h3>Políticas e Termos</h3>
                            <nav>
                                <ul>
                                    <?php $itens_menu = wp_get_menu_array("Políticas e Termos"); ?> 
                                    <?php 
                                     $menu_corrente = 0;
                                     foreach($itens_menu as $menu){
                                           
                                           //if($menu_corrente==0) $classe = "todos-os-produtos";
                                           //if($menu_corrente==1) $classe = "home";
                                           //if($menu_corrente>1) $classe = "";

                                               if(count($menu["children"])==0):
                                    ?>
                                                <li class="sou-categoria-<?php echo $menu["ID"] ?>"><a class="<?php echo $classe; ?>" href="<?php echo $menu["url"]; ?>" title=""><?php echo $menu["title"]; ?></a></li>
                                    <?php
                                            else:
                                    ?>
                                                 <li class="sou-categoria-<?php echo $menu["ID"] ?>"><a class="<?php echo $classe; ?>" href="<?php echo $menu["url"]; ?>" title=""><?php echo $menu["title"]; ?></a>
                                                      <ul>
                                                         <?php 
                                                           foreach($menu["children"] as $submenu){
                                                         ?>
                                                            <li class="submenu-mobile"><a href="<?php echo $submenu["url"]; ?>" title="<?php echo $submenu["title"]; ?>"><?php echo $submenu["title"]; ?></a></li>
                                                         <?php 
                                                            }
                                                         ?>
                                                     </ul>
                                                 </li>
                                    <?php
                                               endif;

                                               $menu_corrente++;

                                            }  
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- SUB COLUNA -->
                        <!-- SUB COLUNA -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 colunas">
                            <h3>Produtos</h3>
                            <nav>
                                <ul>
                                    <?php $itens_menu = wp_get_menu_array("Produtos"); ?> 
                                    <?php 
                                     $menu_corrente = 0;
                                     foreach($itens_menu as $menu){
                                           
                                           //if($menu_corrente==0) $classe = "todos-os-produtos";
                                           //if($menu_corrente==1) $classe = "home";
                                           //if($menu_corrente>1) $classe = "";

                                               if(count($menu["children"])==0):
                                    ?>
                                                <li class="sou-categoria-<?php echo $menu["ID"] ?>"><a class="<?php echo $classe; ?>" href="<?php echo $menu["url"]; ?>" title=""><?php echo $menu["title"]; ?></a></li>
                                    <?php
                                            else:
                                    ?>
                                                 <li class="sou-categoria-<?php echo $menu["ID"] ?>"><a class="<?php echo $classe; ?>" href="<?php echo $menu["url"]; ?>" title=""><?php echo $menu["title"]; ?></a>
                                                      <ul>
                                                         <?php 
                                                           foreach($menu["children"] as $submenu){
                                                         ?>
                                                            <li class="submenu-mobile"><a href="<?php echo $submenu["url"]; ?>" title="<?php echo $submenu["title"]; ?>"><?php echo $submenu["title"]; ?></a></li>
                                                         <?php 
                                                            }
                                                         ?>
                                                     </ul>
                                                 </li>
                                    <?php
                                               endif;

                                               $menu_corrente++;

                                            }  
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- SUB COLUNA -->
                        <!-- SUB COLUNA -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 colunas">
                            <h3>Minha conta</h3>
                            <nav>
                                <ul>
                                    <li><a href="<?php echo get_option('home'); ?>/minha-conta" title="Meus Pedidos">Meus pedidos</a></li>
                                    <li><a href="<?php echo get_option('home'); ?>/minha-conta" title="Endereços">Endereços</a></li>
                                    <li><a href="<?php echo get_option('home'); ?>/minha-conta" title="Meu perfil">Meu perfil</a></li>
                                    <li><a href="<?php echo get_option('home'); ?>/minha-conta" title="Favoritos">Favoritos</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- SUB COLUNA -->
                        <!-- SUB COLUNA -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 colunas">
                            <h3>Newsletter</h3>
                            <p>Cadastre na nossa newsletter para receber novidades e ofertas (não enviaremos spams)</p>
                            
                            <form method="post" action="<?php bloginfo('stylesheet_directory'); ?>/newsletter.php" onSubmit="return ajaxSubmit(this);">
                                 <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Seu melhor e-mail" required name="email">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="fa fa-envelope"></i>
                                        </button>
                                      </div>
                                </div>
                             </form>

                             <div class="social">
                                 
                                 <?php if(get_field("link_perfil_facebook",17433)!=""): ?>
                                     <a href="<?php the_field("link_perfil_facebook",17433); ?>" title="Nosso perfil no Facebook" target="_blank">
                                         <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_facebook.svg" alt="Facebook" />
                                     </a>
                                 <?php endif; ?>
                                 
                                 <?php if(get_field("link_perfil_Instagram",17433)!=""): ?>
                                     <a href="<?php the_field("link_perfil_Instagram",17433); ?>" title="Nosso perfil no Instagram" target="_blank">
                                         <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_instagram.svg" alt="Instagram" />
                                     </a>
                                 <?php endif; ?>
                                 
                                 <?php if(get_field("link_perfil_youtube",17433)!=""): ?>
                                     <a href="<?php the_field("link_perfil_youtube",17433); ?>" title="Nosso perfil no YouTube" target="_blank">
                                         <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_youtube.svg" alt="YouTube" />
                                     </a>
                                 <?php endif; ?>

                             </div>

                        </div>
                        <!-- SUB COLUNA -->
                    </div>
                </div>
                <!-- COLUNA DOIS -->
            </div>
        </div>
    </div>
    <!-- CONTEUDO RODAPE -->

    <!-- CORPY -->
    <div class="corpy">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Riscando Papel <?php echo date("Y"); ?> - Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </div>
    <!-- CORPY -->

</footer>
<!-- FOOTER -->


    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>

    <script type="text/javascript">
        
        var homeUrl = "<?php bloginfo('stylesheet_directory'); ?>/";
        var homeUrlDom = "<?php echo get_option('home'); ?>/";



    </script>
    <script src='<?php bloginfo('stylesheet_directory'); ?>/js/jquery.zoom.js'></script>

    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js?v=<?php echo date("dmYHisu"); ?>"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sweetalert2.min.js"></script>
    <script type="text/javascript">
            // COMO FAZER A CHAMADA NO FORMULÁRIO onSubmit="return ajaxSubmit(this);"
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;

                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });

                swal("Obrigado!", 'Seu e-mail foi salvo com sucesso', "success");

                return false;
            }

            <?php if(is_page("finalizar-compra")): ?>

            var cepCheckout = localStorage.getItem("cepCart");
            if(cepCheckout!==null){
              document.getElementById('billing_postcode').value = cepCheckout;
              buscaCep(cepCheckout);
            }

            // MARCAR A PRIMEIRA OPCAO DE FRETE COMO CHECKED
            setTimeout(function(){ $("#shipping_method_0_52").prop("checked", true); }, 3000);

            $('input[name="shipping_method"]').on("click", function(e) {

                $(this).prop("checked", true); 
            });
                        
            $( document.body ).on( 'updated_cart_totals', function(){
                console.log("CHAMADA AJAX IDENTIFICADA");
                $(".cart-page-desktop:not(:first)").remove();
                $(".cart-page-mobile:not(:first)").remove();
            });
        
        <?php endif; ?>

    </script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>

    <!-- DROPDOWN HOVER -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap-dropdownhover.js"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <?php wp_footer(); ?>

</body>
</html>
