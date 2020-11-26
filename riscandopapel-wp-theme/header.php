<!--
#
                                        /sdmmhs+.
                                     `.hmmmmmmmmmd/.
                                   odmmmmmmmmmmmmmmmy`
                                 +dmmmmmmmmmmmmdmmmmmo
                                 /mmmmmmmmmmmss+smmmmd
                            `.   -ohmddssmmy/+oo/ommmh`
                          `::o: -//:++/+//+//+s//osmm/
                        `:/hdhsoho+so//o////////ssyo.
                       `/ydmmmmhoso/oy/oo///++s/. ossoo/-
                     `odmmmmmmmmdsh+/+y/+so/sy`  `soo++oss
               -ssydddmmmmmdddmmmmd+//y/ossmmm+    +o+ss+-
                ymmmmmmmmy+///+sdmmh//os++mmmmmo  -o/s.
              --+ymmmmmmys+/////smmmyso+symmds++o.o/o-
                -oodmmmo////////+mmmdshhydmm+///yo/+/
               +o/ymmms//oo//////ymmmmmmmmmm++sosooy`
              :o/+dmmmo/oy//////+mmmmmmmmmmyso/+osoo/
            `+hssdmmmmo+y///////+mmmmmmmmmyy////+++y-
          -hdmmmmmmmmm+y+/s//+sosdmmmmmmdho/////+oos
         .+yddhmmmmmmdoo//soo+yoysdyho+///////+ssooy:
         .``.y/+mmmmmhso/+ho/+yooyyy///////oshoo+/+++y       .o+
            o+++mmmmmyy++h+/os/yoys+/////osos+/oso++oy:      :mh.`
           :o+++yyso+y+/ss/+s/+y+yy///oydo/y//os//////++/:://omd+o-
           s+/-:+/syhdy+so/so/+hssosoysymmhhooho+///////o//+sohso+/
         .o++hmdmdmmmmmmdd+++os/+oyoosodmmmmmmmmmmyosooooo++/:sooos
        `y++yoydmmmmmmmmmmmdhddyymmmddmmmmmmmmmmmh+yyyyyo.   `dy+/-----::-
        /os/s/+odmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmd/syyyyyyh-  -mh::-.:+:..:y.
        soo+s//soymmmmmmmmmmmmmmmmmmmmmmmmmmmmmmy+hyyyyyyh/:o/hh+/+s+-....so::::::
       .soo+s///osoydmmmmmmmmmmmmmhyssyydmmmmddhohyyyhhs/-:/s//-/sooo/..:yyoooooydo:--------::.
       ++oo/s+////ooooydmmmmmmdyo+//++ooosyys+sysssssy:/oo+s/+s+/:--.-+yhyyyyyyhmmyooooooooooos:
       s/o+/+s//////++//+ossososysyyhyyyyyyyyhhoooooy-....++/:...-/oyhysssssssshmmyoooooooooooos:
   `/++h+os//oo+/////oo+/oossosyyyyyyyyyyyyyyyyhhoooso-.../-:/+shhyssssssssssssymyooooooooooossos:
  -dysosyyyyso+oooo+ssso+/++yhyyyyyyyyyyyyyyyyyyydoooosysyyyysooyyyyyyyyyyyyyyyysooooooooooooosssh:
 /hssssssssssssssssyoooossyyyyhhyyyyyyyyyyyyyyyyyhysssssssssssssssssssssssssssssssssssssyyyyyydhhyh
 hyhhhshshhydhhhhhhhyhhyhhhyhhyhdhhhhhyyyyyyyyyyyydhhhhyhhhyhhhyhhyhhyhhyyyhyyhsyyyhhshshhhhyhhhyyh`
 hyhhhshshhshhhyyyyhyyhshhhshyyhhhshhshyyhyyyyyyyyydhhhyhhhyhhhyhhyhhyhhhhhhhhhyhhhhhydyhdddhddy/:.
 ooydhhhdddhddssssssoooooooooo+o+ydddhhhhdyyyyyyyyyyd+:::::::::--------..........````.dhyyhysoos
   sooyhhsyhdo                   hhddddhhhhyyyyyyyyyyh.                               ohhysdysos:
  .yoosdyshhd`                 .shyyhhyhd--hyyyyyyyyyyh.                              .dhhsyysooy`
  oooshhsyhdo                 /hyyyyyyyyyy+odhyyyyyyyyyh:                              syyysdysoo+
 `yosydyyyyd`                 -syhyyyhhyyyyyyhhhhyyyyyyyh+````                         -hshyhhoooy.
 oooshssyss:                          `:/+/:-::-.:+yyyyyyyhdddy.    .-::-.`             .:-` +oooos
`yoooh                                              -syhyyyyhhhhssyhhyyyyh/                  `yooos/
+osoy-                                                ohyyyhhdhdyyyyyyyhy-                    /sosoy
ysyss
#
#
#  DIOGENES OLIVEIRA DOS SANTOS JUNIOR
#  WWW.DIOGENESJUNIOR.COM.BR
#  CONTATO@DIOGENESJUNIOR.COM.BR
#
#
-->
<!DOCTYPE html>
<html lang="pt-br"><head>
<?php
          if ( ! function_exists( '_wp_render_title_tag' ) ) {
              function theme_slug_render_title() {
          ?>
          <title><?php wp_title( '|', true, 'right' ); ?></title>
          <?php
              }
              add_action( 'wp_head', 'theme_slug_render_title' );
          }
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
<meta name="theme-color" content="#21D1D1">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css?v=<?php echo date("dmYHisu"); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/woocommerce.css?v=<?php echo date("dmYHisu"); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sweetalert2.min.css">
<!-- ICONES -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css">

<!-- ANIMATE -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
<!-- DROPDOWN -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-dropdownhover.css" rel="stylesheet">

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- OWL -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M524TKWC8R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M524TKWC8R');
</script>

<?php wp_head(); ?>

</head>
<body>


<!-- BARRA DE NAVEGACAO MOBILE -->
<section class="barra-de-navegacao">

        <div class="row">

            <div class="col menu-1">
                <a href="<?php echo get_option('home'); ?>/" title="Home">
                    <i class="fa fa-home"></i> <br clear="both">
                    Home
                </a>
            </div>
            <div class="col menu-2">
                <a href="<?php echo get_option('home'); ?>/carrinho" title="Carrinho">
                    <i class="fa fa-shopping-cart"></i> <br clear="both">
                    Carrinho
                </a>
            </div>
            <div class="col menu-3">
                <a href="<?php echo get_option('home'); ?>/contato" title="Contato">
                    <i class="fa fa-envelope"></i> <br clear="both">
                    Contato
                </a>
            </div>
            <div class="col menu-4">
                <a href="javascript:void(0)" title="Menu" onclick="abrirFecharMenuMobile();">
                    <i class="fa fa-bars"></i> <br clear="both">
                    Menu
                </a>
            </div>

        </div>
</section>
<!-- BARRA DE NAVEGACAO MOBILE -->



<!-- SIDE MENU -->
<div class="menu-mobile-side">
          
              <!-- FECHAR MENU LOJA -->
              <div class="fechar-menu-cliente">
                <a href="javascript:void(0)" title="Fechar menu" onclick="abrirFecharMenuMobile();">
                   <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fechar.svg" alt="Fechar menu">
                </a>
              </div>
              <!-- FECHAR MENU LOJA -->
              
              <!-- NAVEGAÇÃO PRINCIPAL -->
              <nav>
                <ul>
                  
                  <li>
                      <a href="<?php echo get_option('home'); ?>/minha-conta" title="Minha Conta">
                        Minha Conta
                      </a>
                  </li>


                  <?php $itens_menu = wp_get_menu_array("principal"); ?> 
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
              <!-- NAVEGAÇÃO PRINCIPAL -->

</div>
<!-- SIDE MENU -->







<!-- HEADER FIXO -->
<header class="fixo">
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

    <!-- LOGO / BUSCA / CONTATOS / CARRINHO -->
    <div class="container">
        <div class="row">
             
             <!-- LOGO -->
             <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 logo">
                 <a href="<?php echo get_option('home'); ?>/" title="Riscando Papel">
                     <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Riscando Papel logo" />
                 </a>
             </div>
             <!-- LOGO -->
             
             <!-- BUSCA -->
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 busca">
                 <form id="formBuscaFixo" method="post" action="<?php echo get_option('home'); ?>/">
                     <div class="form-group has-feedback">
                         <input type="text" class="form-control" placeholder="Pesquise por produtos" name="s" required>
                         <i onclick="$('#formBuscaFixo').submit();" class="fa fa-search"></i>
                     </div>
                 </form>
             </div>
             <!-- BUSCA -->


             <!-- CONTATOS -->
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 contatos">
                 <p>
                     Fale Conosco: <a href="<?php the_field("link_api_whatsapp",17433); ?>" title="Clique para abrir o WhatsApp" target="_blank">
                      <?php the_field("telefone_fale_conosco",17433); ?>
                    </a>
                 </p>
             </div>
             <!-- CONTATOS -->

             <!-- CARRINHO -->
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 carrinho">
                    
                    
                    <a href="<?php echo get_option('home'); ?>/carrinho" title="Carrinho" class="toggle-carrinho">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/carrinho.svg" alt="Carrinho" />
                        <?php
                           
                            global $woocommerce;
                            $total_carrinho = $woocommerce->cart->cart_contents_count;

                            if($total_carrinho>0):

                        ?>
                        <span><?php echo $total_carrinho; ?></span>
                        <?php  
                             
                             endif;

                        ?>
                    
                    </a>

                    <nav>
                        <ul>
                            <li>
                                
                                
                                <?php if(!is_user_logged_in()): ?>

                                  <a href="<?php echo get_option('home'); ?>/minha-conta" title="Entrar | Cadastrar">
                                    Entrar | Cadastrar <i class="fa fa-angle-down"></i>
                                  </a>

                                <?php else: ?>
                                   
                                   <?php $current_user = wp_get_current_user(); ?>
                                   
                                   <a href="<?php echo get_option('home'); ?>/minha-conta" title="Minha conta">
                                    Bem vindo, <?php echo $current_user->user_login; ?> <i class="fa fa-angle-down"></i>
                                  </a>

                                <?php endif; ?>
                                


                               <ul>
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/">Minha conta</a></li>
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/orders/"> Meus pedidos</a></li>
                                  <!--<li><a href="#"><i class="fa fa-heart"></i> Favoritos</a></li>-->
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/edit-address/"> Meus endereços</a></li>
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/edit-account/">Dados pessoais</a></li>
                                  <!--<li><a href="#"><i class="fa fa-usd"></i> Meus créditos</a></li>-->
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/customer-logout/?_wpnonce=fd4a690865"> Sair</a></li>
                               </ul>
                            </li>
                        </ul>
                    </nav>
                 
             </div>
             <!-- CARRINHO -->



        </div>
    </div>
    <!-- LOGO / BUSCA / CONTATOS / CARRINHO -->

</header>
<!-- HEADER FIXO -->




<!-- HEADER -->
<header>
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

    <!-- LOGO / BUSCA / CONTATOS / CARRINHO -->
    <div class="container">
        <div class="row">
             
             <!-- LOGO -->
             <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 logo">
                 <a href="<?php echo get_option('home'); ?>/" title="Riscando Papel">
                     <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Riscando Papel logo" />
                 </a>
             </div>
             <!-- LOGO -->
             
             <!-- BUSCA -->
             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 busca">
                 <form id="formBusca" method="post" action="<?php echo get_option('home'); ?>/">
                     <div class="form-group has-feedback">
                         <input type="text" class="form-control" placeholder="Pesquise por produtos" name="s" required>
                         <i onclick="$('#formBusca').submit();" class="fa fa-search"></i>
                     </div>
                 </form>
             </div>
             <!-- BUSCA -->


             <!-- CONTATOS -->
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 contatos">
                 <p>
                     Fale Conosco: <a href="<?php the_field("link_api_whatsapp",17433); ?>" title="Clique para abrir o WhatsApp" target="_blank">
                      <?php the_field("telefone_fale_conosco",17433); ?>
                    </a>
                 </p>
             </div>
             <!-- CONTATOS -->

             <!-- CARRINHO -->
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 carrinho">
                    
                    <a href="<?php echo get_option('home'); ?>/carrinho" title="Carrinho" class="toggle-carrinho">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/carrinho.svg" alt="Carrinho" />
                        <?php
                           
                            global $woocommerce;
                            $total_carrinho = $woocommerce->cart->cart_contents_count;

                            if($total_carrinho>0):

                        ?>
                        <span><?php echo $total_carrinho; ?></span>
                        <?php  
                             
                             endif;

                        ?>
                    </a>

                    <nav>
                        <ul>
                            <li>
                                <?php if(!is_user_logged_in()): ?>

                                  <a href="<?php echo get_option('home'); ?>/minha-conta" title="Entrar | Cadastrar">
                                    Entrar | Cadastrar <i class="fa fa-angle-down"></i>
                                  </a>

                                <?php else: ?>
                                <?php $current_user = wp_get_current_user(); ?>
                                   
                                   <a href="<?php echo get_option('home'); ?>/minha-conta" title="Minha conta">
                                    Bem vindo, <?php echo $current_user->user_login; ?> <i class="fa fa-angle-down"></i>
                                  </a>

                                <?php endif; ?>
                               <ul>
                                   <li><a href="<?php echo get_option('home'); ?>/minha-conta/">Minha conta</a></li>
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/orders/"> Meus pedidos</a></li>
                                  <!--<li><a href="#"><i class="fa fa-heart"></i> Favoritos</a></li>-->
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/edit-address/"> Meus endereços</a></li>
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/edit-account/">Dados pessoais</a></li>
                                  <!--<li><a href="#"><i class="fa fa-usd"></i> Meus créditos</a></li>-->
                                  <li><a href="<?php echo get_option('home'); ?>/minha-conta/customer-logout/?_wpnonce=fd4a690865"> Sair</a></li>
                               </ul>
                            </li>
                        </ul>
                    </nav>
                 
             </div>
             <!-- CARRINHO -->



        </div>
    </div>
    <!-- LOGO / BUSCA / CONTATOS / CARRINHO -->


    <!-- MENU DESKTOP -->
    <div class="menu-desktop">
        
        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    
                    <nav>
                        <ul>
                            <?php $itens_menu = wp_get_menu_array("principal"); ?> 
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

            </div>
        </div>

    </div>
    <!-- MENU DESKTOP -->



</header>
<!-- HEADER -->
