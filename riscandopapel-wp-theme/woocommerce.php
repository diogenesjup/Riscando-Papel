<?php 


get_header();  


//#####################################################
//
//
//
//       PAGINA DE MODELOS WOOCOMMERCE
//
//       Diogenes Oliveira dos Santos Junior
//       https://www.diogenesjunior.com.br
//       contato@diogenesjunior.com.br
//       23/11/2020
//
//
//
//#####################################################



  // SE FOR PÁGINA DE CATEGORIAS

  if(is_archive()):  

     require("woo-categorias.php");

  endif; 



  // SE FOR PÁGINA DE PRODUTO

  if(is_single()): 

    require("woo-single-produto.php");

  endif;


  get_footer();  


?>