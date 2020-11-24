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
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12 conteudo">
                    	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12 conteudo">
                        <?php the_content(); ?>
                    </div>
           
        </div>
        <!-- SESSAO DO CONTEUDO -->

    </div>
</section>
<!-- CONTENT -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>