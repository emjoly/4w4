<?php /*model de base*/ ?>
<?php get_header() ?>

<h1>Category.php</h1>

<div id="accueil" class="global">
  <section class="accueil__section">
    <h2>Accueil h2</h2>
    <nav class="menu">
      <a href="#">Galerie</a>
      <a href="#">Évènement</a>
      <a href="#">Footer</a>
    </nav>
    <div class="section__pays">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="carte">
            <h4> <?php the_title(); ?> </h4>
            <p> <?php echo wp_trim_words(get_the_content(), 10); ?> </p>
            <p><a href="<?php echo get_permalink() ?>">Voir la suite</a></p>
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