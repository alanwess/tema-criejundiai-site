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
            <li><a href="http://criejundiai.com.br" class="smoothScroll"><span>Pagina Inicial</span></a></li>
          </ul>
       </div>

    </div>
  </div>

  <section id="portfolio">
    <div class="container">
      <div class="row">

      <?php 
        if( have_posts() ):
          while( have_posts() ):
            the_post();
      ?>
        
        <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="section-title" style="word-wrap: break-word">
            <h1><?php the_title(); ?></h1>
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" width="100%" alt="<?= get_the_title(); ?>">
          </div>
          <div>
            <p style="text-align: justify;"><?php the_content(); ?></p>
          </div>
        </div>

      <?php
          endwhile;
        endif;
      ?>

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
              <input name="name" type="text" class="form-control" id="Nome" placeholder="Diga seu nome..." required>
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
            <input type="hidden" name="_next" value="criejundiai.com.br/obrigado" />
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

</body>
</html>