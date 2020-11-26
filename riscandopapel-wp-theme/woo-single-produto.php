<?php 

    $_product = wc_get_product( get_the_ID() );
    global $product;

?>


<!-- CONTENT -->
<section class="content">
    <div class="container">
        
        <!-- BREADCRUMB -->
        <div class="row breadcrumb">
            <div class="col-12">
                <a href="<?php echo get_option('home'); ?>/" title="Home">
                    Home
                </a>
                <span>/</span>
                
                <a href="<?php echo get_option('home'); ?>/produtos" title="Todos os produtos">
                  Produtos   
                </a> 
                <span>/</span>

                <?php

                //Grabs the Primary Category of the Product
                $primary_term_product_id = yoast_get_primary_term_id('product_cat');
                $postProductTerm = get_term( $primary_term_product_id );

                //If the post type is a product, display the Primary Category Link
                if ( 'product' === get_post_type() ) { ?>
                  
                  <?php 
                    if ( $postProductTerm && ! is_wp_error( $postProductTerm ) ) {       
                      echo '<a href="' .  esc_url( get_term_link( $postProductTerm->term_id ) ) . '">';
                      echo $postProductTerm->name;
                      echo '</a>';
                      }
                  
                }
                ?>

                <span>/</span>
                <a href="#" title="<?php the_title(); ?>" style="font-weight: bold !important;">
                    <?php the_title(); ?>
                </a>
            </div>
        </div>
        <!-- BREADCRUMB -->

        <!-- SESSAO DO CONTEUDO -->
        <div class="row">
            
            <!-- SIDEBAR -->
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-12 sidebar order-xl-1 order-lg-1 order-md-1 order-sm-1 order-12">
                 
                <?php get_sidebar("produtos"); ?>

            </div>
            <!-- SIDEBAR -->

            <!-- LOOP -->
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9 col-12 order-xl-12 order-lg-12 order-md-12 order-sm-12 order-1">
                 
                 <!-- PRODUTO --> 
                 <div class="row">

                   <!-- FOTO DO PRODUTO -->
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 foto-produto" style="padding-left: 0px;">
                   
                     <div class="imagem-produto-grande" id='zoom'>
                       
                       <?php 
                              
                              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

                       ?>

                       <img class="image-zoom-available" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" id="imagemPrincipalProduto" />

                     </div>

                     <div class="thumbs-produto">

                     	        <!-- THUMB -->
	                            <div class="thumb-produto" style="background: url('<?php echo $image[0]; ?>') #fff no-repeat;background-size: 50% auto;background-position: center center;border:1px solid #f2f2f2;">
	                                 <a href="javascript:void(0)" title="Clique para ver essa imagem em tamanho maior" onclick="mudarImagemProduto('<?php echo $image[0]; ?>');">
	                                     &nbsp;
	                                 </a>
	                            </div>
	                            <!-- THUMB -->
                            
                            <?php 

                                       $attachment_ids = $product->get_gallery_image_ids();

                                       $img = 0;

                                       foreach( $attachment_ids as $attachment_id ) {
                                            $image_link = wp_get_attachment_url( $attachment_id );

                            ?>
                            
	                            <!-- THUMB -->
	                            <div class="thumb-produto" style="background: url('<?php echo $image_link; ?>') #fff no-repeat;background-size: 50% auto;background-position: center center;border:1px solid #f2f2f2;">
	                                 <a href="javascript:void(0)" title="Clique para ver essa imagem em tamanho maior" onclick="mudarImagemProduto('<?php echo $image_link; ?>');">
	                                     &nbsp;
	                                 </a>
	                            </div>
	                            <!-- THUMB -->

                            <?php
                                        
                                        $img++;

                                        }

                            ?>
                      
                           
                        </div>

                   </div>


                   <!-- FOTO DO PRODUTO -->

                   <!-- CONTEUDO DO PRODUTO -->
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 info-produto">
                     <h1>
                       <?php the_title(); ?>
                       <small style="display: block;">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                       </small>
                     </h1>
                     
                     <?php the_content(); ?>
                     
                     <?php if(!$product->is_type( 'variable' ) && $product->get_sku() !=""): ?>
	                     <p>
	                       <?php global $product; ?>
	                       REF: <?php echo $product->get_sku(); ?>
	                     </p>
                     <?php endif; ?>

                     


                   </div>
                   <!-- CONTEUDO DO PRODUTO -->

                   <!-- VARIACOES / PRECO / ADD TO CART / FRETE -->
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 tools-produto">

                   	<?php if($product->is_type( 'variable' )): ?>

                     <?php 
                        
                        $available_variations = $product->get_available_variations(); 
                        
                        /*
                        echo "TOTAL DE VARIACOES: ".count($available_variations)."<br>";
                        echo "VARIACAO ID: ".$available_variations[0]["variation_id"]."<br>";
                        echo "ESTOQUE: ".$available_variations[0]["is_in_stock"]."<br>";
                        echo "IMAGEM: ".$available_variations[0]["image"]["url"]."<br>";

                        $nome_variacao = array_values($available_variations[0]["attributes"]);

                        echo "NOME: ".$nome_variacao[0]."<br>";
                        */

                     ?>
                     
                     <p>
                       Escolha a variação:
                     </p>
                     
                     <!-- VARIACOES --> 
                     <div class="variacoes">

                     	<?php 
                            
                            $a = 0;
                            $tem_estoque = 0;
                            while($a<count($available_variations)):

                            	$nome_variacao = array_values($available_variations[$a]["attributes"]);

                            	if($available_variations[$a]["is_in_stock"]==1):

                            		$tem_estoque = 1;

                     	?>
                        
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" <?php if($a==0) echo "checked"; ?> name="variacoesProduto" id="variacao<?php echo $a; ?>" value="<?php echo $available_variations[$a]["variation_id"]; ?>">
                          <label onclick="activeVariation(<?php echo $available_variations[$a]["variation_id"]; ?>,'<?php echo $available_variations[$a]["image"]["url"]; ?>');" class="form-check-label" for="variacao<?php echo $a; ?>">
                          	<?php echo $nome_variacao[0]; ?>
                          </label>
                        </div>

                        <?php 

                                endif;
                            
                            $a++;
                            endwhile;

                        ?>

                     </div>
                     <!-- VARIACOES --> 

                      <?php endif; ?>


                      
                      <!-- PRODUTO NAO É VARIAVEL -->
                      <?php if(!$product->is_type( 'variable' )): ?>

			                      <?php if($product->get_stock_quantity() && number_format($product->get_stock_quantity(),0,'','')>0):  ?>
			                      
			                      <p>
			                        EM ESTOQUE <br clear="both">
			                        Vendido e entregue por <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Riscando Papel Logo">
			                      </p>
                                  

                                  <?php 
                                         $cem = $product->get_regular_price();
                                         $x = $product->get_sale_price();

                                         $valor = $cem;
                                         if($x!="") $valor = $x;
                                    ?>
			                      <h2>
			                        <small>
			                         <?php if($x!=""): ?> <span>10% OFF</span> <strike>R$<?php echo number_format($cem,2,",","."); ?></strike><?php endif; ?>
			                        </small>
			                        R$<?php echo number_format($valor,2,",","."); ?>
			                      </h2>
			                      <a href="<?php echo get_option('home'); ?>/?add-to-cart=<?php echo get_the_ID(); ?>" class="btn btn-primary" id="btnComprar">
			                        ADICIONAR AO CARRINHO
			                      </a>
			                      
			                      <?php else: ?>

			                      	<a href="javascript:void(0)" class="btn btn-default disabled">
			                        PRODUTO INDISPONÍVEL
			                      </a>

			                      <?php endif; ?>

                      <?php endif; ?>
                      <!-- PRODUTO NAO É VARIAVEL -->

                      

                      <!-- PRODUTO É VARIAVEL -->
                      <?php if($product->is_type( 'variable' )): ?>

                      	         <?php 


                      	            if($tem_estoque > 0):  

                      	            	$cem = $product->get_variation_regular_price('min', true);
		                                $x = $product->get_variation_sale_price('min', true);
		                                $valor = $x;

		                                if($x==""): $valor = $cem; endif;

		                                if($x==$cem): $x = ""; endif;

                      	         ?>
			                      
			                      <p>
			                        EM ESTOQUE <br clear="both">
			                        Vendido e entregue por <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Riscando Papel Logo">
			                      </p>
			                    

			                      <h2>
			                        <small>
			                          <?php if($x!=""): ?>
			                          <?php $sub = $cem - $x; $y = $sub / $cem; $y = $y * 100; ?>
			                          <span><?php echo number_format($y,2); ?>% OFF</span> <strike>R$<?php echo number_format($cem,2,",","."); ?></strike>
			                          <?php endif; ?>
			                        </small>
			                        R$<?php echo number_format($valor,2,",","."); ?>
			                      </h2>
			                      <a href="<?php echo get_option('home'); ?>/?add-to-cart=<?php echo $available_variations[0]["variation_id"]; ?>" class="btn btn-primary" id="btnComprar">
			                        ADICIONAR AO CARRINHO
			                      </a>
			                      
			                      <?php else: ?>

			                      	<a href="javascript:void(0)" class="btn btn-default disabled">
			                        PRODUTO INDISPONÍVEL
			                      </a>

			                      <?php endif; ?>


                      <?php endif; ?>
                      <!-- PRODUTO É VARIAVEL -->


                      
                      <hr>
                     
                      <!---
                      <div class="caixa-simulador-frete">
                        <p>
                          Simular frete:<br>
                          <a href="javascript:void(0)" title="informar cep" onclick="trocarCep()">informar cep</a>
                        </p>
                        <div id="caixa-cep">
                        </div>
                      </div>
                    -->

                   </div>
                   <!-- VARIACOES / PRECO / ADD TO CART / FRETE -->

                 </div>
                 <!-- PRODUTO --> 

                 
                 <p>&nbsp;</p>
                 <hr>



                 
                 <!-- TITULO SESSAO -->
                <div class="row">
                    <div class="col-12 titulo-sessao">
                        <h3>Produtos similares</h3>
                    </div>
                </div>
                <!-- TITULO SESSAO -->

                 <!-- PRODUTOS RELACIONADOS -->
                 <div class="row loop-menor">


                  <?php

                       $args = array( 'post_type' => 'product', 
                                      'showposts' => '4', 
                                      'posts_per_page' => '4', 
                                      'order' => 'RAND',
                                      'orderby' => 'date'
                                    );

                                    $loop = new WP_Query( $args );
                                    $tot_imp = 0;
                                    $controle_postagens = 0;

                                    while ( $loop->have_posts() ) : $loop->the_post(); 
                                    
                                    $_product = wc_get_product( get_the_ID() );
                                    global $product;
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                         
                   ?> 

                    <!-- PRODUTO -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="produto">
                            <div class="imagem-produto" style="background: url('<?php echo $image[0]; ?>') transparent no-repeat;background-size: 80% auto;background-position: center center;">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    &nbsp;
                                </a>
                            </div>
                            <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <h3>
                                <?php                      

                                    if(!$product->is_type( 'variable' )):

                                        $cem = $product->get_regular_price();
                                        $x = $product->get_sale_price();
                                        $valor = $x;
                                        if($x==""): $valor = $cem;  endif;
                              
                                    else:

                                        $cem = $product->get_variation_regular_price('min', true);
                                        $x = $product->get_variation_sale_price('min', true);
                                        $valor = $x;
                                        if($x==""): $valor = $cem; endif;

                                        if($x==$cem): $x = ""; endif;

                                    endif;
                                
                                ?>
                                
                                <small>
                                  <?php if($x!=""): ?>
                                    <strike>R$<?php echo number_format($cem,2,",","."); ?></strike>
                                  <?php endif; ?>
                                </small>

                                R$ <?php echo $valor; number_format($valor,2,",","."); ?>
                                <small>Em <?php echo parcelamentoValorParcela($cem,$valor,12); ?></small>
                                <span>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </span>
                            </h3>
                        </div>
                    </div>
                    <!-- PRODUTO -->

                  <?php
                     
                      endwhile; 
                      wp_reset_query(); 

                   ?>

               

            </div>
            <!-- LOOP -->




        </div>
        <!-- SESSAO DO CONTEUDO -->

    </div>
</section>
<!-- CONTENT -->














