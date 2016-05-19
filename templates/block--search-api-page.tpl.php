<?php $kw = "";
if (isset($variables['elements']['#action'])) {
  $kwa = explode('/', $variables['elements']['#action']);
  if ($kwa[1] == "search") {
    $kw = end($kwa);
    $kwa = explode('?', $kw);
    $kw = $kwa[0];
  }
} ?>
  <form action="/" method="post"
        id="search_form" accept-charset="UTF-8">
    <div>
      <label for="<?php print $variables['elements']['keys_1']['#name']; ?>">Search: </label>
      <input type="text"
             name="<?php print $variables['elements']['keys_1']['#name']; ?>"
             id="<?php print $variables['elements']['keys_1']['#id']; ?>"
             value="<?php print $kw; ?>"
             class="search"
             placeholder="Search..."
             size="<?php print $variables['elements']['keys_1']['#size']; ?>"
             maxlength="<?php print $variables['elements']['keys_1']['#maxlength']; ?>" />
      <input type="submit" name="op" id="searchsubmit" value="Search" />
    </div>
    <?php print $variables['elements']['base_1']['#children']; ?>
    <?php print $variables['elements']['id']['#children']; ?>
    <?php print $variables['elements']['form_build_id']['#children']; ?>
    <?php
      if(isset($variables['elements']['form_token'])) {
        print $variables['elements']['form_token']['#children'];
      }
    ?>
    <?php print $variables['elements']['form_id']['#children']; ?>
  </form>