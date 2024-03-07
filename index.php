<?php /*model de base*/ ?>
<?php get_header() ?>

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
<div id="footer" class="global">
  <footer class="footer__footer">
    <form class="recherche" action="">
      <input class="recherche__input" type="search" name="" id="" placeholder="Recherche">
      <button class="recherche__button"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg></button>
    </form>
    <div class="sociaux">
      <a href="https://emjoly.github.io/4w4/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
          <title>GitHub icon</title>
          <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
        </svg></a>
      <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
          <title>WordPress icon</title>
          <path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"></path>
        </svg></a>
      <a href=""><svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000">
          <title>YouTube icon</title>
          <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path>
        </svg></a>
      <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg">
          <title>Stack Overflow icon</title>
          <path d="M18.986 21.865v-6.404h2.134V24H1.844v-8.539h2.13v6.404h15.012zM6.111 19.731H16.85v-2.137H6.111v2.137zm.259-4.852l10.48 2.189.451-2.07-10.478-2.187-.453 2.068zm1.359-5.056l9.705 4.53.903-1.95-9.706-4.53-.902 1.936v.014zm2.715-4.785l8.217 6.855 1.359-1.62-8.216-6.853-1.35 1.617-.01.001zM15.751 0l-1.746 1.294 6.405 8.604 1.746-1.294L15.749 0h.002z"></path>
        </svg></a>
      <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg">
          <title>Trello icon</title>
          <path d="M21 0H3C1.343 0 0 1.343 0 3v18c0 1.656 1.343 3 3 3h18c1.656 0 3-1.344 3-3V3c0-1.657-1.344-3-3-3zM10.44 18.18c0 .795-.645 1.44-1.44 1.44H4.56c-.795 0-1.44-.646-1.44-1.44V4.56c0-.795.645-1.44 1.44-1.44H9c.795 0 1.44.645 1.44 1.44v13.62zm10.44-6c0 .794-.645 1.44-1.44 1.44H15c-.795 0-1.44-.646-1.44-1.44V4.56c0-.795.646-1.44 1.44-1.44h4.44c.795 0 1.44.645 1.44 1.44v7.62z"></path>
        </svg></a>
      <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg">
          <title>Steam icon</title>
          <path d="M11.979 0C5.678 0 .511 4.86.022 11.037l6.432 2.658c.545-.371 1.203-.59 1.912-.59.063 0 .125.004.188.006l2.861-4.142V8.91c0-2.495 2.028-4.524 4.524-4.524 2.494 0 4.524 2.031 4.524 4.527s-2.03 4.525-4.524 4.525h-.105l-4.076 2.911c0 .052.004.105.004.159 0 1.875-1.515 3.396-3.39 3.396-1.635 0-3.016-1.173-3.331-2.727L.436 15.27C1.862 20.307 6.486 24 11.979 24c6.627 0 11.999-5.373 11.999-12S18.605 0 11.979 0zM7.54 18.21l-1.473-.61c.262.543.714.999 1.314 1.25 1.297.539 2.793-.076 3.332-1.375.263-.63.264-1.319.005-1.949s-.75-1.121-1.377-1.383c-.624-.26-1.29-.249-1.878-.03l1.523.63c.956.4 1.409 1.5 1.009 2.455-.397.957-1.497 1.41-2.454 1.012H7.54zm11.415-9.303c0-1.662-1.353-3.015-3.015-3.015-1.665 0-3.015 1.353-3.015 3.015 0 1.665 1.35 3.015 3.015 3.015 1.663 0 3.015-1.35 3.015-3.015zm-5.273-.005c0-1.252 1.013-2.266 2.265-2.266 1.249 0 2.266 1.014 2.266 2.266 0 1.251-1.017 2.265-2.266 2.265-1.253 0-2.265-1.014-2.265-2.265z"></path>
        </svg></a>
    </div>
  </footer>
</div>
</body>

</html>