<?php

/*

Template Name:Ad Opp Template

*/

?>

<?php get_header(); ?>


<div class="main-container page-ad-opp">

    <div class="main wrapper clearfix">

        <div id="contentwrapper">

            <article>

            <section>             
                <div id="content">
                    <div class="content-right">
                          <div class="pdfs-container">
                              <span class="pdf-link"><a href="<?=the_field('pdf_1_link');?>" target="_blank"><img src="/prod/wp-content/uploads/PDFlogo.png" alt="pdf" class="PDF_LogoLink"><?=the_field('pdf_1_title');?></a></span>
                              <span class="pdf-link pdf-link-2"><a href="<?=the_field('pdf_2_link');?>" target="_blank"><img src="/prod/wp-content/uploads/PDFlogo.png" alt="pdf" class="PDF_LogoLink"><?=the_field('pdf_2_title');?></a></span>
                          </div>
                          <div class="top-content-right">
                            <?=the_field('top_content_right'); ?>
                          </div>  
                    </div>  
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php

                    $ad_opportunities = get_field('ad_opportunities');

                    $posttype = get_field('row_type_name'); 
                    
                    if ($posttype) {
                        $args = array( 'post_type' =>  $posttype, 'posts_per_page' => 10);

                        $loop = new WP_Query( $args );
                        $count = 1;

                      
                        ?>
                        <?php
                         if (!empty($ad_opportunities)) {
                            foreach($ad_opportunities as $ad_opportunity) {
                            if ($count % 2 == 0) {
                                $addClass = "right-col";
                            } else {
                                $addClass = "left-col clear"; 
                            }   
                             $bottom_link =$ad_opportunity['ad_opp_more_link'] ;
                        ?>
                            <div class="ad-opp <?=$addClass?>">
                               <div class="ad-opp-content">
                                <div class="ad-opp-thumb">                                      
 
                                        <?php
                                        echo '<img src=' . $ad_opportunity['ad_opp_thumbnail'] . '>';                                    
                                        ?>
                                       
                                </div>
                                    <strong><?=$ad_opportunity['ad_opp_title'] ?></strong>
                                    <br/><?=$ad_opportunity['ad_opp_description'] ?>
                                    
                                    <?php
                                   
                                    if ($ad_opportunity['ad_opp_more_text'] != "") { 
                                        if($ad_opportunity['ad_opp_more_link']!="") {
                                    ?>
                                    <a target="_blank" href="<?=$ad_opportunity['ad_opp_more_link']; ?>" class="row_link"><?=$ad_opportunity['ad_opp_more_text']; ?></a>
                                    <?php 
                                    	} elseif ($ad_opportunity['add_opp_more_link_url']!="") {
                                    ?>
                                    <a target="_blank" href="<?=$ad_opportunity['add_opp_more_link_url']; ?>" class="row_link"><?=$ad_opportunity['ad_opp_more_text']; ?></a>
                                    <?php    
                                        } 
                                    }
                                    ?>
                                </div>

                                <br clear="all" />
                            </div>


                        <?php
                                $count++;   
                                }
                            } 
                        }                                           
                        ?>
                                                  
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </section>

        </article>
        </div>
    </div>
</div>

    <?php get_footer(); ?>