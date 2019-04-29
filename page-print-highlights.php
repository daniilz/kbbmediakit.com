<?php

/*

Template Name: Print Highlights Template

*/

?>

<?php get_header(); ?>
     
<div class="main-container page-editorial-cal">
    <div class="main wrapper clearfix">
        <div id="contentwrapper">
            <article>
                <section>
                    <div class="table-header">
                        <span class="title"><h3><?php the_title(); ?></h3></span>                     
                    </div>            
                    <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>
                    <div class="table">     
                    <table cellspacing="0" cellpadding="0" border="0" align="left">
                        <thead>
                            <tr class="header-row">
                                <th><strong><?=the_field('column_1_title'); ?></strong></th>
                                <th><strong><?=the_field('column_2_title'); ?></strong></th>
                                <th><strong><?=the_field('column_3_title'); ?></strong></th>
                                <th><strong><?=the_field('column_4_title'); ?></strong></th>
                                <th><strong><?=the_field('column_5_title'); ?></strong></th>
                                <th><strong><?=the_field('column_6_title'); ?></strong></th>
                                <?php //if (get_field("rotating_departments")) { ?>
                                <th><strong><?=the_field('column_7_title'); ?></strong></th>
                                <?php// } ?>
                                <th><strong><?=the_field('column_8_title'); ?></strong></th>
                                <?php if (get_field("column_9_title")) { ?>
                                <th><strong><?=the_field('column_9_title'); ?></strong></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>       
                            <?php
                            $print_highlights = get_field('print_highlights');

                            $posttype = get_field('row_type_name'); 
                            $bottom_content_left = get_field('bottom-content-left');
                            $bottom_content_right = get_field('bottom-content-right');
                            $previous_pdf_title = get_field('previous_pdf_title');
                            $previous_pdf_link = get_field('previous_pdf_link');

                           
                            if(!empty($print_highlights)) {
                                $count = 0;
                                foreach($print_highlights as $print_highlight) { 
                            ?>
                                <tr>
                                    <td><strong><?=$print_highlight['issue']; ?></strong></td>
                                    <td><?=$print_highlight['ad_close']; ?></td>
                                    <td><?=($print_highlight['column_3_image'] != '') ? '<img src=' . $print_highlight['column_3_image'] . '>' : $print_highlight['materials_close']; ?>
                                    <?php//=$print_highlight['materials_close']; ?>                     
                                    </td>
                                    <td><?=($print_highlight['kitchen_products_image'] != '') ? '<img src=' . $print_highlight['kitchen_products_image'] . '>' : $print_highlight['kitchen_products']; ?></td>
                                    <td><?=($print_highlight['bath_products_image'] != '') ? '<img src=' . $print_highlight['bath_products_image'] . '>' : $print_highlight['bath_products']; ?></td>
                                    <td><?=($print_highlight['trends_image'] != '') ? '<img src=' . $print_highlight['trends_image'] . '>' : $print_highlight['trends']; ?></td>
                                    <?php if ($count == 0) { ?> 
                                    <?php if (get_field("rotating_departments")) { ?>
                                    <td rowspan="20" style="background-color: #ebebeb; width:12%;vertical-align: top;"><? the_field('rotating_departments'); ?></td>
                                    <?php } ?>
                                    <?php } ?>
                                    <td><?=($print_highlight['extras_image'] != '') ? '<img src=' . $print_highlight['extras_image'] . '>' : $print_highlight['extras']; ?></td>
                                    <?php if (get_field("column_9_title")) { ?>
                                    <td><?=($print_highlight['kbis_image'] != '') ? '<img src=' . $print_highlight['kbis_image'] . '>' : $print_highlight['kbis_coverage']; ?></td>
                                    <?php } ?>                
                                </tr>   
                            <?php
                                    $count++;    
                                }    
                            }                                        
                            ?>                                          
                       </tbody>
                    </table>   
                    </div>
                    <?php if($previous_pdf_title) { ?>   
                                <div class="table-footer">
                                    <span class="pdf-link"><a href="<?=$previous_pdf_link;?>" target="_blank"><img src="/prod/wp-content/uploads/PDFlogo.png" alt="pdf" class="PDF_LogoLink"><?=$previous_pdf_title;?></a></span>
                                </div>
                            <? } ?>   
                    <?php endwhile; ?>
                <?php endif; ?>

                <div class="content-bottom-left">
                <p>
                    <?=$bottom_content_left;?>
                </p>
                </div>
                <div class="content-bottom-right">
                <p>
                    <?=$bottom_content_right;?>
                </p>
                </div> 
                </section>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>