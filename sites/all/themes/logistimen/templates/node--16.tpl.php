<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>

<div class="wrapper-title">
  <div class="wrapper-inside">
    <div class="in">
        <?php print render($title_prefix); ?>
        <h1 class="page__title title" id="page-title"><?php print $node->title; ?></h1>
        <?php print render($title_suffix); ?>
        <?php print render($content['field_second_title']); ?>
    </div>
  </div>
</div>

<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

<div class="wrapper">
<div class="on"></div>
    <div class="mapaItem">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6780.511429315563!2d34.6602286737678!3d31.81802855080352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDQ5JzA1LjIiTiAzNMKwMzknMzguNiJF!5e0!3m2!1siw!2s!4v1426500687499"  width="100%" height="300" frameborder="0" style="border:0"></iframe>

    </div>
</div>

</article>
