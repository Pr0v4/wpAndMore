<?php get_header( 'home' ); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				   <div id="main" class="eightcol first clearfix" role="main">
						
						<h1><?php _e("Pillole WordPress", "bonestheme"); ?></h1>
						
						<section id="intro" class="post">
							<p>La categoria <strong>Pillole</strong> &egrave; stata realizzata per fornirti delle veloci nozioni su quanto riguarda il mondo WordPress.</p>
							<p>Se non vuoi salvare questa pagina all'interno dei tuoi segnalibri, cosa che ti consiglio comunque di fare, puoi sempre iscriverti alla nostra newsletter utilizzando il modulo qua sotto.</p>
							
							<?php get_template_part( 'modulo', 'newsletter' ); ?>
						</section>
						<section id="lista-pillole">
						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						   		
						   		<?php get_template_part( 'content', 'video' ); ?>
						   		
						   	<?php endwhile; endif; ?>
					
						</section>
						
				      	<?php 
				      		if (function_exists('bones_page_navi')) {
				      			bones_page_navi(); 
					      } else { ?>
					         <nav class="wp-prev-next">
					             <ul class="clearfix">
					        		 	<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
					        	      <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
					             </ul>
					         </nav>
					     <?php } ?>		
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
