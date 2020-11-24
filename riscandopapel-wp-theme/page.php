<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
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
                <a href="#" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
                
            </div>
        </div>
        <!-- BREADCRUMB -->

         <!-- SESSAO DO CONTEUDO -->
        <div class="row desc-categoria">
             
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 titulo-da-pagina-interna">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <?php 

                    // PROGRESS BAR PARA INDICAR QUANTO FALTA PARA FRETE GRÁTIS 
                    if(is_page("carrinho") || is_page("finalizar-compra")):

                            $valor_ate_agora = WC()->cart->cart_contents_total;
                            $diferenca = get_free_shipping_minimum() - $valor_ate_agora;

                            $sub = get_free_shipping_minimum() - $diferenca; $y = $sub / get_free_shipping_minimum(); $y = $y * 100;

                            //echo $y, " / ", $diferenca;

                            if($diferenca>0):

                    ?>
                            <div class="col-12 quanto-falta-para-frete-gratis">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($y,2,".",",") ?>%;" aria-valuenow="<?php echo $y ?>" aria-valuemin="0" aria-valuemax="100">Falta R$<?php echo number_format($diferenca,2,",","."); ?> para você ganhar frete grátis</div>
                                </div>
                            </div>
                            <?php endif; ?>
                    <?php endif; ?>



                    <div class="col-12 conteudo">
                        <?php the_content(); ?>
                    </div>
           
        </div>
        <!-- SESSAO DO CONTEUDO -->

    </div>
</section>
<!-- CONTENT -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>