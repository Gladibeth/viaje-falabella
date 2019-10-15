<?php get_header(); ?>
<section class="main-parallax" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/articulo-1.jpg')">
    <div class="overlay"></div>
    <div class="main-parallax--search">
      <button class="" href="#">
          <i class="fa fa-search"></i>
      </button>
      <input class="parallax-input"type="text" name="" placeholder="Search">

    </div>
  </section>
<section class="main-posts" itemscope itemtype="http://schema.org/LiveBlogPosting">
    <div class="container">
      <div class="main-search_content">
        <div class="main-search__items">
          <div itemscope itemtype="http://schema.org/Article" class="main-search__item" href="post.html">
            <div class="main-posts__box">
              <div class="main-search__title">
                <p itemprop="name">
                  Lorem ipsum
                </p>
              </div>

              <div class="main-posts__description">
                <p itemprop="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae obcaecati deserunt natus eius autem
                  quia laborum dolor eaque debitis corporis iure, odit possimus suscipit delectus maxime voluptate
                  similique rerum mollitia.Lorem ipsum dolor sit amet
                  consectetur adipisicing elit. Molestiae obcaecati deserunt natus eius autem quia laborum dolor eaque
                  debitis corporis iure, odit possimus suscipit delectus maxime voluptate similique rerum mollitia. Lorem
                  ipsum dolor sit amet consectetur
                  adipisicing elit. Molestiae obcaecati deserunt natus eius autem quia laborum dolor eaque debitis
                  corporis iure, odit possimus suscipit delectus maxime voluptate similique rerum mollitia.
                </p>


              </div>
            </div>
          </div>
          <a href="#" class="main-search_item">
            <div class="main-search__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/articulo-1.jpg" alt="">
            </div>
            <div class="main-search__element">
              <div class="main-search__element-item">
                <div class="main-search__element--white">
                  <p>Conoce más</p>
                </div>
              </div>
              <div class="main-search__element-item">
                <div class="main-search__element--green">
                  <i class="fa fa-play"></i>
                </div>
              </div>
            </div>
</a>
        </div>
        <hr class="line-gray line-gray--full">
        
        <div class="main-search__items">
          <div itemscope itemtype="http://schema.org/Article" class="main-search__item" href="post.html">
            <div class="main-posts__box">
              <div class="main-search__title">
                <p itemprop="name">
                  Lorem ipsum
                </p>
              </div>

              <div class="main-posts__description">
                <p itemprop="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae obcaecati deserunt natus eius
                  autem
                  quia laborum dolor eaque debitis corporis iure, odit possimus suscipit delectus maxime voluptate
                  similique rerum mollitia.Lorem ipsum dolor sit amet
                  consectetur adipisicing elit. Molestiae obcaecati deserunt natus eius autem quia laborum dolor
                  eaque
                  debitis corporis iure, odit possimus suscipit delectus maxime voluptate similique rerum
                  mollitia. Lorem
                  ipsum dolor sit amet consectetur
                  adipisicing elit. Molestiae obcaecati deserunt natus eius autem quia laborum dolor eaque debitis
                  corporis iure, odit possimus suscipit delectus maxime voluptate similique rerum mollitia.
                </p>


              </div>
            </div>
          </div>
          <a href="#" class="main-search_item">
            <div class="main-search__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/articulo-1.jpg" alt="">
            </div>
            <div class="main-search__element">
              <div class="main-search__element-item">
                <div class="main-search__element--white">
                  <p>Conoce más</p>
                </div>
              </div>
              <div class="main-search__element-item">
                <div class="main-search__element--green">
                  <i class="fa fa-play"></i>
                </div>
              </div>
            </div>
</a>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
