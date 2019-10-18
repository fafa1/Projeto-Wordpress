<?php 
	// Template Name: Menu da Semana 
?>
<?php get_header(); ?>
<section class="container">
	<h2 class="subtitulo">Menu da Semana</h2>

	<?php  if(have_rows('categoria_menu')): while(have_rows('categoria_menu')): the_row(); ?>	
	<div class="menu-item grid-8">
		<h2><?php the_sub_field('nome_categoria') ?></h2>
		<ul>
			<?php  if(have_rows('prato_menu')): while(have_rows('prato_menu')): the_row(); ?>	
				<li>
					<span><sup>R$</sup><?php the_sub_field('preco_prato'); ?></span>
					<div>
						<h3><?php the_sub_field('nome_prato'); ?></h3>
						<?php the_sub_field('descricao_prato'); ?>
					</div>
				</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
<?php endwhile; endif; ?>

	<!-- <div class="menu-item grid-8">
		<h2>Carnes</h2>
		<ul>
			<li>
				<span><sup>R$</sup>129</span>
				<div>
					<h3>Picanha Nobre no Alho</h3>
					<p>Pequenas tiras de salmão feitas no alho e óleo</p>
				</div>
			</li>
			<li>
				<span><sup>R$</sup>89</span>
				<div>
					<h3>Cupim no Bafo</h3>
					<p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
				</div>
			</li>
			<li>
				<span><sup>R$</sup>159</span>
				<div>
					<h3>Hamburger Artesanal Rest</h3>
					<p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
				</div>
			</li>
		</ul>
	</div> -->
</section>
<?php get_footer(); ?>
