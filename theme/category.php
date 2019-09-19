<?php 
// Listado de categorias
$categories = get_categories( array(
    'taxonomy' => 'tipo_destinos',
    'child_of'                 => 0,
	'hide_empty' => false //entrue oculta cateogiras que no otenga post
	) );?>

	<?php // para las categorias $idcategoria = get_query_var('cat');?>
	<?php //var_dump($categories); ?>
	<?php $idcategoria = get_queried_object()->term_id;//para las taxonomias ?>
	<?php foreach ($categories as $category):?>
		<?php //if ($idcategoria == $category->term_id):?>
			<div class="container-fluid" style="background-image: linear-gradient(#fff,transparent),url(<?php echo the_field('imagen-prueba', $category); ?>);
					height: 700px;
					background-position: bottom;
					background-size: cover;">
				<div class="txt-proyecto">
					<h1><?php echo($category->name);?></h1>
				</div>
	        </div>
	<?php //break;endif; ?>
<?php endforeach; 
var_dump($categories);

?>




$categories = get_categories( array(
    'parent'         => $taxonomy->term_id,
    'taxonomy' => 'tipo_destinos',
	'hide_empty' => false, //entrue oculta cateogiras que no otenga post
	'order' => 'DESC',
	'post_status' => 'publish'
	) );?>

	<?php // para las categorias $idcategoria = get_query_var('cat');?>
	<?php //var_dump($categories); ?>
	<?php $idcategoria = get_queried_object()->term_id;//para las taxonomias ?>
	<?php foreach ($categories as $category):?>
		<?php //if ($idcategoria == $category->term_id):?>
			
					<h1><?php echo($category->name);?></h1>
		
	<?php //break;endif; ?>
<?php endforeach; ?>