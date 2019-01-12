<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="page">

  <div id="navwrapper">

    <div id="navigationwrapper">
      <div id="navigation">

        <?php if ($main_menu): ?>
          <nav id="main-menu" role="navigation" tabindex="-1">
            <?php
            print theme('links__system_main_menu', array(
              'links' => $main_menu,
              'attributes' => array(
                'class' => array('links', 'inline', 'clearfix'),
              ),
              'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          </nav>
        <?php endif; ?>

        <?php print render($page['navigation']); ?>

      </div>
      <div id="logo">

        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" />
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <div id="headerwrapper">

    <header class="header" id="header" role="banner">

      <?php if ($site_name || $site_slogan): ?>
        <div class="header__name-and-slogan" id="name-and-slogan">
          <?php if ($site_name): ?>
            <h1 class="header__site-name" id="site-name">
              <span><?php print $site_name; ?></span>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php print render($page['header']); ?>

    </header>
  </div>

<!--       <?php if ($secondary_menu): ?>
        <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
          <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => $secondary_menu_heading,
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?> -->

  <div id="highlightedwrapper">
    <div id="highlighted">
      <?php print render($page['highlighted']); ?>
    </div>
  </div>


  <div id="main">

    <div id="content" class="column" role="main">
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <div id="contentwrapper">
      <?php print render($page['content']); ?>
      </div>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <div id="push">
    <div id="innerpush">
    </div>
  </div>

</div>
<div id="footerwrapper">
  <div id="footer">
    <div id="footer-top">
      <?php print render($page['footer_top']); ?>
    </div>
    <div id="footer-bottom">
      <?php print render($page['footer_bottom']); ?>
    </div>
  </div>
</div>


<?php print render($page['bottom']); ?>
