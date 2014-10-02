<body <?php body_class(); ?>>
  
<div class="row"> 

  <div class="large-12 columns">

    <div class="header-container hide-for-small hide-for-medium">

      <div class="logo">

        <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>

      </div>

    </div>

  </div>

</div>
  
<div class="row"> 

  <div class="large-12 columns">
    
    <nav class="top-bar hide-for-small hide-for-medium" data-topbar="">

      <section class="top-bar-section">

          <?php wp_nav_menu( array( 'theme_location' => 'headertop-menu' ) ); ?> 

      </section>

    </nav>

  </div> 

  </div> 

  <!-- Nav -->

  <div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar hide-for-large-up">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">Add Title</h1>
      </section>

      <section class="right-small">
        <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
     <?php wp_nav_menu( array( 'theme_location' => 'headertop-menu' ) ); ?>  
    </aside>

    <aside class="right-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Users</label></li>
        <li><a href="#">Hari Seldon</a></li>
        ...
      </ul>
    </aside>

    <section class="main-section">
      <!-- content goes here -->
    </section>

  <a class="exit-off-canvas"></a>

<section>
