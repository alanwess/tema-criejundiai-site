<?php get_header(); ?>

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="http://criejundiai.com.br" class="navbar-brand smoothScroll">CrieJundiaí</a>
      </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll"><span>Home</span></a></li>
            <li><a href="#sobre" class="smoothScroll"><span>Sobre</span></a></li>
            <li><a href="#portfolio" class="smoothScroll"><span>Portfólio</span></a></li>
            <li><a href="#contato" class="smoothScroll"><span>Contato</span></a></li>
          </ul>
       </div>

    </div>
  </div>

  <section id="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <h1 class="wow fadeInUp" data-wow-delay="0.6s">Inove agora mesmo!</h1>
          <p class="wow fadeInUp" data-wow-delay="0.9s">Nós da CrieJundiaí estamos aqui para tornar seu sonho/objetivo realidade. Queremos lhe ajudar nessa empreitada virtual e lhe guiar pelos caminhos da web e mobile... Conte conosco!</p>
          <button class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s" onclick="document.location+='#sobre';return false;">Conheça mais</button>
        </div>
      </div>
    </div>
  </section>

  <section id="sobre">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
          <div class="sobre-thumb">
            <h1>Sobre nós</h1>
            <p>Somos uma assessoria nova de equipe jovem que está aqui para lhe entregar e criar os projetos mais ousados que você planeja implementar. Contamos com equipe especializada em diversas áreas de criação, design, codificação, marketing e publicidade para poder melhor atender as suas expectativas de projeto ;)</p>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 wow fadeInUp sobre-img" data-wow-delay="0.6s">
          <img src="<?= get_template_directory_uri(); ?>/assets/images/about-img.jpg" class="img-responsive img-circle" alt="Sobre nós">
        </div>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="section-title text-center">
            <h1>Nosso time</h1>
            <h3>Conheça quem faz o CrieJundiaí acontecer.</h3>
          </div>
        </div>

        <div id="team-carousel" class="owl-carousel">

          <div class="item col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="team-thumb">
              <div class="image-holder">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/team-img1.jpg" class="img-responsive img-circle" alt="Alan Wesley" width="200px">
              </div>
              <h2 class="heading">Alan Wesley</h2>
              <p class="description">Desenvolvedor Fullstack & UI Designer</p>
            </div>
          </div>

          <div class="item col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="team-thumb">
              <div class="image-holder">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/team-img2.jpg" class="img-responsive img-circle" alt="Jessica Bianca" width="200px">
              </div>
              <h2 class="heading">Jéssica Bianca</h2>
              <p class="description">Analista de Marketing Digital & Mídias Sociais</p>
            </div>
          </div>

          <div class="item col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="team-thumb">
              <div class="image-holder">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/team-img4.jpg" class="img-responsive img-circle" alt="William Seppelfeld" width="200px">
              </div>
              <h2 class="heading">William Seppelfeld</h2>
              <p class="description">Fotógrafo & Designer Digital</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container">
      <div class="row">

        <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="section-title">
            <h1>Portfólio</h1>
            <p>Conheça nosso portfólio de serviços e veja alguns de nossos trabalhos realizados e que estão em operação</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-desktop text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">WEB</h3> 
            <p class="text-muted mb-0">Desenvolva sites completos, portais e blogs incríveis conosco, não deixe de inovar!</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-mobile text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Mobile</h3>
            <p class="text-muted mb-0">Agora você pode ter sua marca presente nos smarts dos seus clientes, pense nisso e não fique para trás ;)</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-bullhorn text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Marketing</h3>
            <p class="text-muted mb-0">Está estagnado? Isso não é mais um problema... Vamos te ajudar a sair dessa</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-facebook text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Mídias Sociais</h3>
            <p class="text-muted mb-0">Gerenciar sua pagina no facebook ou no instagram está trabalhoso? Quer aumentar seus seguidores? Estamos aqui para isso</p>
          </div>
        </div>

      </div>
      <div class="row" style="margin-top: 30px;">

        <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="section-title">
            <h1>Alguns Trabalhos</h1>
          </div>
        </div>

        <ul class="grid cs-style-4">

          <?php

              $args = array(
                'post_type' => 'projeto',
                'orderby'     => 'DATE',
                'order'   => 'ASC'
              );

              $loop = new WP_Query( $args );
              if( $loop->have_posts()):
                while( $loop->have_posts() ):
                  $loop->the_post(); 
          ?>

          <li class="col-md-4 col-sm-4">
          	<a href="<?= the_permalink(); ?>">
              <p align="center"><strong><?php the_title(); ?></strong></p>
              <figure>
                <div><img src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" width="100%" alt="<?= get_the_title(); ?>"></div>
              </figure>
            </a>
          </li>

          <?php
              endwhile;
            endif;
          ?>

        </ul>
      </div>
    </div>
  </section>

  <section id="parceiros">
    <div class="container">
      <div class="row">

        <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="section-title">
            <h1>Parceiros</h1>
            <p>Conheça nossos principais parceiros com quem trabalhamos e indicamos aos nossos clientes</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-desktop text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3"><strong>Hostgator</strong></h3> 
            <p class="text-muted mb-0">Desenvolva sites completos, portais e blogs incríveis conosco, não deixe de inovar!</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-mobile text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3"><b>XTech</b></h3>
            <p class="text-muted mb-0">Agora você pode ter sua marca presente nos smarts dos seus clientes, pense nisso e não fique para trás ;)</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-bullhorn text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Marketing</h3>
            <p class="text-muted mb-0">Está estagnado? Isso não é mais um problema... Vamos te ajudar a sair dessa</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto" style="margin-bottom: 20px;">
            <i class="fa fa-4x fa-facebook text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Mídias Sociais</h3>
            <p class="text-muted mb-0">Gerenciar sua pagina no facebook ou no instagram está trabalhoso? Quer aumentar seus seguidores? Estamos aqui para isso</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contato">
    <div class="container">
      <div class="row">

        <div class="col-md-offset-1 col-md-10 col-sm-12">

          <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
            <h1>Envie uma mensagem...</h1>
            <p>Se você se interessou e deseja entrar em contato para tirar alguma dúvida ou fazer um orçamento, sinta-se livre ;) </p>
          </div>

         <form action="https://formspree.io/contato@criejundiai.com.br" method="POST" class="wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-6 col-sm-6">
              <input name="name" type="text" class="form-control" id="Nome" placeholder="Diga seu Nome..." required>
            </div>
            <div class="col-md-6 col-sm-6">
              <input name="_replyto" type="email" class="form-control" id="Email" placeholder="Diga seu Email..." required>
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea name="message" rows="6" class="form-control" id="Mensagem" placeholder="Diga sua Mensagem..." required></textarea>
            </div>
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
              <input type="submit" class="form-control" value="ENVIAR MENSAGEM">
            </div>
            <input type="hidden" name="_next" value="http://www.criejundiai.com.br/obrigado" />
            <input type="hidden" name="_language" value="pt-BR" />
            <input type="hidden" name="_subject" value="Nova mensagem para CrieJundiaí" />
          </form>

        </div>
      </div>
      <div class="row">
        <div style="margin-top: 30px; margin-right: 5px; margin-left: 5px;">
            <p>&copy; CrieJundiaí - 21.864.284/0001-34</p>
        </div>
      </div>
    </div>
  </section>
  
  <?php wp_footer(); ?>

  <script>
    $(function() {
      $('body').vegas({
          slides: [
            <?php

              $args = array(
                'post_type' => 'projeto',
                'orderby'     => 'DATE',
                'order'   => 'ASC'
              );

              $loop = new WP_Query( $args );
              if( $loop->have_posts()):
                while( $loop->have_posts() ):
                  $loop->the_post(); 

                  echo "{ src: '".get_the_post_thumbnail_url($post->ID, 'full')."' },";
                endwhile;
              endif;
            ?>   
          ],
          timer: false,
          transition: [ 'zoomIn', ],
          animation: ['kenburns']
      });
    });
  </script>

</body>
</html>