<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<?php
$sidebar  = render($page['sidebar']);
$layout = $sidebar ? 'layout-sidebar' : 'layout-full';
?>

<div id="pg-nav-bg">
  <div class="wrapper clear dontPrint">
    <div id="pg-nav">
        <a href="#main" class="element-focusable skip-content"><?php print t('Skip to main content'); ?></a>
        <ul>
          <li>
            <div class="search_wrapper_full">
              <div class="search_wrapper_tr">
                <?php print render($page['header']); ?>
              </div>
            </div>
          </li>
        </ul>
    </div>
  </div>
</div>
<div class="wrapper big">
  <div id="header" class="clear">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
  </div>
  <?php print render($page['highlighted']); ?>
  <div id="main" class="clear">
    <div id="content">
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
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>
    <?php if ($sidebar): ?>
      <div id="sidebar">
        <ul>
          <li id="pages-3" class="widget widget_pages">
          <h2 class="widgettitle">Pages</h2>
          <?php print $sidebar; ?>
          </li>
         </ul>
      </div>
    <?php endif; ?>
  </div>
</div>
<div class="wrapper dontPrint" id="copyright">
  <?php print render($page['footer_bottom']); ?>
  <p class="credit">[ a <a href="https://www.govcms.gov.au/">govCMS</a> site ]</p>
</div>

<?php print render($page['bottom']); ?>
