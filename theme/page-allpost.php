<?php get_header(); ?>
  <section class="main-parallax">
    <div class="overlay"></div>
    <div class="main-parallax__title main-parallax__title--post">
      <h1>Qué ver</h1>
      <span>y que hacer?</span>
      <div class="main-parallax__btn">
        <div class="btn_custom btn--medium btn--filled">
          Volver
        </div>
      </div>
    </div>
  </section>
  <section class="main-posts">
    <div class="container">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">Más Recientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">Más Populares</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">Más comentarios</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div itemscope itemtype="http://schema.org/LiveBlogPosting" class="main-posts__content">
            <div class="main-posts__item" href="post.html">
              <div class="main-posts__img">
                <img itemprop="image" class="img-round" src="assets/img/img-4.jpeg">
              </div>
              <div class="main-posts__box">
                <div class="main-posts__title">
                  <p itemprop="name">
                    Lorem ipsum
                  </p>
                </div>
                <div class="main-posts__autor">
                  <div class="main-posts__name">
                    <p itemprop="author">Gladibeth Franco</p>
                  </div>
                  <div class="main-posts__line"></div>
                  <div class="main-posts__date">
                    <span itemprop="datePublished">18/08/2019</span>
                  </div>
                </div>
                <div class="main-posts__description">
                  <p itemprop="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae obcaecati deserunt natus eius
                    autem quia laborum dolor eaque debitis corporis iure, odit possimus suscipit delectus maxime
                    voluptate similique rerum mollitia.
                  </p>
                </div>
                <div class="main-posts__btn">
                  <div class="btn_custom btn--medium btn--filled">
                    Ver más
                  </div>
                </div>
                <hr class="main-articles__line">
                <div class="main-posts__social">
                  <div class="main-posts__comments">
                    <p>999</p>
                  </div>
                  <div class="main-posts__tags">
                    <p>tags</p>
                    <p>tags</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
      </div>

      <hr class="main-articles__line">
    </div>
  </section>


<?php get_footer(); ?>