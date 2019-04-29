<?php
/*
Template Name: Print Specifications Template
*/
?>

<?php get_header(); ?>



<div class="main-container" id="page-print-specs-rates">

    <div class="main wrapper clearfix">

        <div id="contentwrapper">

            <article>

                <section> 

                    <div id="content">
                          <div id="content-header">  
                            <h1><?php the_title(); ?></h1>
                            <?php
                                $size_requirements = get_field('size_requirements');
                                $table_1a = get_field('table_1a'); 
                                $table_1b = get_field('table_1b'); 
                                $table_2 = get_field('table_2');
                                $table_3 = get_field('table_3');
                            ?> 
                          </div>                       
                    
          
                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                        <div id="content-image">

                          <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                          } 
                          ?> 
                          <a href="<?php the_field('featured_image_link'); ?>" target="_blank"><?php the_field('featured_image_link_text'); ?></a> 

                        </div>     
                        <div id="content-header">
                            <h3><?=the_field('table_1_header');?></h3>
                            <h4><?=the_field('table_1_subheader');?></h4>
                        </div>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('column_1a');?></strong></th>
                                        <th><strong><?=the_field('column_2a');?></strong></th>
                                        <th><strong><?=the_field('column_3a');?></strong></th>
                                        <th><strong><?=the_field('column_4a');?></strong></th>
                                        <th><strong><?=the_field('column_5a');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    if(!empty($table_1a)) {
                                        foreach($table_1a as $table_column) {
                                    ?>
                                        <tr>
                                            <td style="width:20%"><?=$table_column['column_1']; ?></td>
                                            <td><?=$table_column['column_2']; ?></td>
                                            <td><?=$table_column['column_3']; ?></td>
                                            <td><?=$table_column['column_4']; ?></td> 
                                            <td><?=$table_column['column_5']; ?></td>                   
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                                </tbody>
                            </table>
                            <table class="table-1b" cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('column_1b');?></strong></th>
                                        <th><strong><?=the_field('column_2b');?></strong></th>
                                        <th><strong><?=the_field('column_3b');?></strong></th>
                                        <th><strong><?=the_field('column_4b');?></strong></th>
                                        <th><strong><?=the_field('column_5b');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    if(!empty($table_1b)) {
                                        foreach($table_1b as $table_column) {
                                    ?>
                                        <tr>
                                            <td style="width:20%"><?=$table_column['column_1']; ?></td>
                                            <td><?=$table_column['column_2']; ?></td>
                                            <td><?=$table_column['column_3']; ?></td>
                                            <td><?=$table_column['column_4']; ?></td> 
                                            <td><?=$table_column['column_5']; ?></td>                   
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                                </tbody>
                            </table> 
                        <div class="table-footer">
                            <h3><?php the_field('table_1_footer_title');?></h3>
                            <?php the_field('table_1_footer');?>
                        </div>
                        <div class="content-header">
                            <h3><?=the_field('table_2_header');?></h3>
                            <?=the_field('table_2_subheader');?>
                        </div>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('t2_column_1');?></strong></th>
                                        <th><strong><?=the_field('t2_column_2');?></strong></th>
                                        <th><strong><?=the_field('t2_column_3');?></strong></th>
                                        <th><strong><?=the_field('t2_column_4');?></strong></th>
                                        <th><strong><?=the_field('t2_column_5');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    if(!empty($table_2)) {
                                        foreach($table_2 as $table_column) {
                                    ?>
                                        <tr>
                                            <td style="width:20%"><?=$table_column['column_1']; ?></td>
                                            <td><?=$table_column['column_2']; ?></td>
                                            <td><?=$table_column['column_3']; ?></td>
                                            <td><?=$table_column['column_4']; ?></td> 
                                            <td><?=$table_column['column_5']; ?></td>                   
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                                </tbody>
                            </table>  
                        </div>  
                        <div class="table-footer"> 
                            <?php the_field('table_2_footer');?>    
                        </div> 
                        <div class="content-header">
                            <h3><?php the_field('table_3_header');?></h3>
                            <?php the_field('table_3_subheader');?>
                        </div>
                        <div class="table">   
                            <table cellspacing="0" cellpadding="0" border="0" align="left">
                                <thead>
                                    <tr class="header-row">
                                        <th><strong><?=the_field('t3_column_1');?></strong></th>
                                        <th><strong><?=the_field('t3_column_2');?></strong></th>
                                        <th><strong><?=the_field('t3_column_3');?></strong></th>
                                        <th><strong><?=the_field('t3_column_4');?></strong></th>
                                        <th><strong><?=the_field('t3_column_5');?></strong></th>
                                    </tr>
                                </thead>
                                <tbody>               
                                    <?php
                                    if(!empty($table_3)) {
                                        foreach($table_3 as $table_column) {
                                    ?>
                                        <tr>
                                            <td style="width:20%"><?=$table_column['column_1']; ?></td>
                                            <td><?=$table_column['column_2']; ?></td>
                                            <td><?=$table_column['column_3']; ?></td>
                                            <td><?=$table_column['column_4']; ?></td> 
                                            <td><?=$table_column['column_5']; ?></td>                   
                                        </tr>   
                                    <?php  
                                        }    
                                    }                                        
                                    ?>
                                </tbody>
                            </table>  
                        </div> 
                        <div class="table-footer"> 
                            <?php the_field('table_3_footer');?>    
                        </div> 
                    <?php endwhile; ?>
               
                        <?php endif; ?>


                </section>
                </div> 
            </article>
        </div>
    </div>

</div>

<?php get_footer(); ?>