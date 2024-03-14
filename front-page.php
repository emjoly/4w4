<?php /*model de base*/ ?>
<?php get_header() ?>

<!-- <h1>Front-page.php</h1> -->
<div id="entete" class="global">
  <section class="entete__header">
    <div class="entete__header__texte">
      <h1 class="bgc-text">Thème Emily Joly</h1>
      <h2 class="bgc-text">4W4 - Conception d'interface <br>et développement web</h2>
      <h3 class="bgc-text">TIM - Collège de Maisonneuve</h3>
    </div>
    <button class="entete__button">Évènement</button>

  </section>
  <?php get_template_part("gabarit/vague") ?>
</div>
<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Accueil h2</h2>
    <nav class="menu">
      <a href="#">Galerie</a>
      <a href="#">Évènement</a>
      <a href="#">Footer</a>
    </nav>
    <div class="section__cours">
      <?php
      /*
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_title('<h4>', '</h4>');
          $contenu = get_the_content();
          $contenu = wp_trim_words($contenu, 10);
          echo $contenu;
        }
      } 
      */
      if (have_posts()) :
        while (have_posts()) : the_post();
          $titre = get_the_title();
          $sigle = substr($titre, 0, 7);
          $pos_parenthese = strpos($titre, '(');
          $duree = substr($titre, $pos_parenthese + 1, -1);
          // $titre = substr($titre, 7, $pos_parenthese-7);
          // $duree = substr($titre, -6);
          $nomProg = substr($titre, 7, -6);
      ?>
          <div class="carte">
            <h5> <?php echo $sigle; ?> </h5>
            <!-- <h4> <?php echo $titre; ?> </h4> -->
            <h4> <?php echo $nomProg ?></h4>
            <h5>Durée: <?php echo $duree; ?> </h5>
            <p> <?php echo wp_trim_words(get_the_content(), 10); ?> </p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</div>
<div id="galerie" class="global diagonal">
  <section class="galerie__section">
    <h2>Galerie</h2>
    <blockquote cite="https://emjoly.github.io/4w4/">"Lorem ipsum dolor, sit amet consectetur adipisicing elit"</blockquote>
    <cite>-Emily Joly</cite>
  </section>
</div>
<div id="evenement" class="global">
  <section class="evenement__section">
    <h2>Évènement</h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quasi excepturi nam amet incidunt placeat beatae libero error, recusandae ipsa officiis! Culpa totam error beatae at ut minima ipsam non! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia quae officiis eveniet, labore rem facere voluptatum dicta qui ipsa provident laudantium molestiae, temporibus enim quo quos vero beatae porro!
  </section>
  <?php get_template_part("gabarit/vague") ?>
</div>

<?php get_footer() ?>