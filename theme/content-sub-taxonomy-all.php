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
<div class="overlay" style="background-image: url('');">
  <img src="<?php echo $url; ?>" alt="" style="width: 100%;height: 100%;object-fit: cover;">
</div> <!-- muestra la imagen dinamica de la taxonomia -->
<div class="main-parallax--boxtitle">

  <div class="main-parallax--title">
   <h1><?php the_title();?></h1>
  
   <div class="main-parallax__btn">
     <div class="btn_custom btn--medium btn--filled--decoration">
       <i class="fa fa-angle-left" style="margin-right:10px;" aria-hidden="true"></i>
       <a href="javascript:window.history.back();">Volver</a>
     </div>
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
             <a href="<?php echo bloginfo('url').'/'.$sub_category->taxonomy.'/'.$sub_category->slug;?>">
                <div class="main-articles__img">
                <?php 
                  $img_id = get_post_thumbnail_id(get_the_ID());
                  $alt = get_post_meta($img_id , '_wp_attachment_image_alt', true); //alt de imágenes
                ?>
                <img class="img-round lazy" img="<?php echo $alt;?>" data-srcset="<?php echo get_field('image-category', $sub_category); ?>">
                </div>
                <div class="main-articles__title main-articles__title--small" itemprop="name">
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