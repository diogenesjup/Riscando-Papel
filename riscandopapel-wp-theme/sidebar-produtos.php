 <h3>Categorias</h3>
                 <nav>
                    <ul>
                        <?php 
                                    //$taxonomy = 'product_cat';
                                    $tax_terms = get_terms( array(
                                          'taxonomy'          => 'product_cat',
                                          'orderby'           => 'name', 
                                          'order'             => 'ASC',
                                          'hierarchical'      => true,
                                          'hide_empty'        => true
                                    ));

                                    $tot_categorias = 0;

                                     foreach ($tax_terms as $subs) {       

                                        // get the current taxonomy term
                                        //$term = get_queried_object();
                                        
                               
                        ?>
                        <li><a <?php if($id_atual==$subs->term_id) echo "style='font-weight:bold;'"; ?> href="<?php echo get_category_link($subs->term_id); ?>" title="<?php echo $subs->name; ?>">
                             <?php if($id_atual==$subs->term_id): ?><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php endif; ?> 
                            <?php echo $subs->name; ?></a></li>
                        <?php 
                                        
                                        $tot_categorias++;
                                   
                                     }     
                        ?>
                    </ul>
                </nav>


                <h3>Marcas</h3>
                 <nav>
                    <ul>
                        <ul>
                        <?php 
                                    //$taxonomy = 'product_cat';
                                    $tax_terms = get_terms( array(
                                          'taxonomy'          => 'marca_produtos',
                                          'orderby'           => 'name', 
                                          'order'             => 'ASC',
                                          'hierarchical'      => true,
                                          'hide_empty'        => true
                                    ));

                                    $tot_categorias = 0;

                                     foreach ($tax_terms as $subs) {       

                                        // get the current taxonomy term
                                        //$term = get_queried_object();
                                        
                               
                                ?>
                                <li>
                                    <a <?php if($subs->name==get_field("destaque_do_nome_da_marca")) echo "style='font-weight:bold;'"; ?> href="<?php echo get_option('home'); ?>/marca_produtos/<?php echo $subs->slug; ?>" title="Clique aqui para ver os produtos dessa marca <?php echo $subs->name; ?>">
                                       <?php if($subs->name==get_field("destaque_do_nome_da_marca")): ?><i class="fa fa-angle-double-right" aria-hidden="true"></i><?php endif; ?>
                                        <?php echo $subs->name; ?></a>
                                </li>
                                <?php 
                                        
                                        $tot_categorias++;
                                   
                                     }     
                                ?>
                    </ul>
                    </ul>
                </nav>