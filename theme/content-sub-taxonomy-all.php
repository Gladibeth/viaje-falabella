<?php 
 global $post; //para obtener el slug global
 $taxonomy = str_replace("-", "_", $post->post_name);//se obtiene el slug y se reemplaza - por _
 // Listado de categorias 
 $categories = get_categories(array(
     'taxonomy' => $taxonomy,
     'hide_empty' => false, //oculta categorias que no otenga post
     'order' => 'ASC',
     'post_status' => 'publish',
 )); 
?>
<section class="main-parallax">
<?php $post_thumbnail_id = get_post_thumbnail_id();
        $url = wp_get_attachment_url( $post_thumbnail_id);?>
<div class="overlay" style="background-image: url('<?php echo $url; ?>');"></div> <!-- muestra la imagen dinamica de la taxonomia -->
<div class="main-parallax__title main-parallax__title--post">
 <h1><?php the_title();?></h1>

 <div class="main-parallax__btn">
   <div class="btn_custom btn--medium btn--filled--decoration">
     <i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
     <a href="javascript:window.history.back();">Volver</a>
   </div>
 </div>
</div>
</section>
<div class="overlay"></div>
<div class="main-parallax__title">

</div>
</section>
<section class="main-breadcrumb">
<div class="container">
 <div class="tab-content" id="pills-tabContent">
   <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
     <section class="main-articles" itemscope itemtype="http://schema.org/ScholarlyArticle">
       <div class="container">
         <div class="main-articles__content">
           <?php
             $subcategories = get_categories(array(
             'taxonomy' => $taxonomy,
             'hide_empty' => false, //oculta categorias que no otenga post
             'order_by' => 'name',
             'order' => 'ASC',
             'post_status' => 'publish',
           )); ?>
           <?php foreach ($subcategories as $sub_category) : ?>
             <div class="main-articles__item">
               <a href="<?php the_permalink(); ?>">
                <div class="main-articles__img">
                <img class="img-round lazy" src="<?php echo get_field('image-category', $sub_category); ?>">
                </div>
                <div class="main-articles__title" itemprop="name">
                  <p><?php echo ($sub_category->name); ?></p>
                  <span><?php echo ($sub_category->description); ?></span>
                </div>
                <!-- <div class="main-article__btn">
                  <div class="btn_custom btn--medium btn--filled">
                  <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">Ver más</a>
                  </div>
                </div> -->
               </a>
             </div>
           <?php endforeach;?> 
         </div>
       </div>
     </section>
   </div>
 </div>
</div>
</section>