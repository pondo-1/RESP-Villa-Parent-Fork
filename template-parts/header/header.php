<header class="header--outer center">
  <div class="header flex">
    <div class="logo flex">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="real">
    </div>
    <?php //echo get_template_part('template-parts/navigation/navigation'); 
    ?>
    <?php getMenu('primary', 2); ?>
    <div class="header-meta flex">
      <a href="#">Kontakt</a>
      <a href="#">Anmelden <span class="icon">a</span></a>
    </div>
  </div>
</header>