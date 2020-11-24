<?php get_header(); ?>
<?php $query_string = $_POST["s"]; ?>
<?php $query_string_cat = $_POST["cat"]; ?>



<!-- CONTENT -->
<section class="content">
    <div class="container">
        
        <!-- BREADCRUMB -->
        <div class="row breadcrumb">
            <div class="col-12">
                <a href="<?php echo get_option('home'); ?>/" title="Voltar ao início">
                    Home
                </a>
                <span>/</span>
                <a href="#" title="Resultado de pesquisa">
                    Resultado de pesquisa para: <b><?php echo $query_string; ?></b>
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

                <div class="row desc-categoria">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <h2>Resultado de pesquisa para: <b><?php echo $query_string; ?></b></h2>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 paginacao-filtragem text-right">
                        
                        <div class="paginacao">
                           <?php wordpress_pagination(); ?>
                        </div>

                       

                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                      
                    </div>
                </div>
                
                <!-- LOOP MENOR -->
                <div class="row loop-menor">

                     <?php
                     
                     if($query_string_cat==""):
                     	$search = new WP_Query(array( 's' => $query_string, 'post_type' => 'product'));
                     else:
                     	$search = new WP_Query(array( 's' => $query_string, 'post_type' => 'product', 'product_cat' => $query_string_cat));
                     endif;
                     

                     if ( $search->have_posts() ) :
                                  while ( $search->have_posts() ) : $search->the_post(); 

                                            $_product = wc_get_product( get_the_ID() );

                                            global $product;
                                            
                                            $attachment_ids = $product->get_gallery_attachment_ids(); 
                                            $imagem_produto = wp_get_attachment_url($attachment_ids[0]);
                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                                            
                                        
                ?> 


                       <!-- PRODUTO -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
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
                        endif;
                    wp_reset_postdata(); 

                ?>


                    
                     

                </div>
                <!-- LOOP MENOR -->

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 paginacao-filtragem paginacao-filtragem-bottom">
                        
                        <div class="paginacao">
                           <?php wordpress_pagination(); ?>
                        </div>

                       

                    </div>

            </div>
            <!-- LOOP -->

        </div>
        <!-- SESSAO DO CONTEUDO -->

    </div>
</section>
<!-- CONTENT -->



<?php get_footer(); ?>