<?php  $subcategory = array();?>
<?php $taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>
<?php //echo $taxonomy->term_id; 
?>
<?php //echo $taxonomy->name; 
?>
<?php //echo $taxonomy->description; 
?>
<img src="<?php echo get_field('imagen-prueba', $taxonomy); ?>" alt="">>

<?php
// Listado de categorias
$categories = get_categories(array(
    'parent'         => $taxonomy->term_id,
    'taxonomy' => 'tipo_destinos',
    'hide_empty' => false, //entrue oculta cateogiras que no otenga post
    'order' => 'DESC',
    'post_status' => 'publish',
)); ?>

<?php // para las categorias $idcategoria = get_query_var('cat');
?>
<?php //var_dump($categories); 
?>
<?php $idcategoria = get_queried_object()->term_id; //para las taxonomias 
?>
<?php foreach ($categories as $category) : ?>
    <?php //if ($idcategoria == $category->term_id):
        array_push($subcategory,$category->term_id);
    ?>

    <h1><?php echo ($category->name); ?></h1>
<?php endforeach; 
?>
<?php 
print_r($subcategory);?>

<?php
// Listado de categorias
$categories = get_categories(array(
    'parent'         => $subcategory[0],
    'taxonomy' => 'tipo_destinos',
    'hide_empty' => false, //entrue oculta cateogiras que no otenga post
    'order' => 'DESC',
    'post_status' => 'publish',
)); ?>

<?php // para las categorias $idcategoria = get_query_var('cat');
?>
<?php //var_dump($categories); 
?>
<?php $idcategoria = get_queried_object()->term_id; //para las taxonomias 
?>
<?php foreach ($categories as $category) : ?>
    <?php //if ($idcategoria == $category->term_id):
        array_push($subcategory,$category->term_id);
    ?>

    <h1><?php echo ($category->name); ?></h1>
<?php endforeach; 
print_r($subcategory);
?>