<?php 
//  Template Name: Sobre
?>
<?php get_header(); ?>
	<section class="container sobre">
		<h2 class="subtitulo">Sobre</h2>

		<div class="grid-8">
			<img src="<?php the_field('imagem_rest') ?>" alt="Fachada do Rest">
		</div>

		<div class="grid-8">
			<?php if(have_rows('conteudo_sobre')): while(have_rows('conteudo_sobre')): the_row(); ?>
				<h2><?php the_sub_field('titulo_sobre'); ?></h2>
				<?php the_sub_field('texto_sobre'); ?>
			<?php endwhile; else: endif; ?>
		</div>
	</section>
<?php get_footer(); ?>