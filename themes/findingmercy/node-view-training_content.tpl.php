<?php
drupal_add_css(path_to_theme().'/node-view-training_content.css');
?>

<div class="training-category">

<div class="training-category-title-and-summary-<?php echo ($node->view->row_index % 2 == 0 ? "even" : "odd"); ?>">
<div class="training-category-title">
<?php echo $node->title; ?>
</div>
<div class="training-category-summary">
<?php echo $node->body; ?>
</div>

<div class="training-category-links">
<ul>
<?php foreach($node->field_train_cat_links as $link): ?>
<li>
<?php echo $link['view']; ?>
</li>
<?php endforeach; ?>
</ul>

<div style="clear: both"></div>
</div>
</div>

<div class="training-category-thumbnail-<?php echo ($node->view->row_index % 2 == 0 ? "even" : "odd"); ?>">
    <img class="training-category-thumbnail" alt="<?php echo $node->title; ?>"
        title="<?php echo $node->title; ?>"
        src="/<?php echo $node->field_train_cat_thumb[0]['filepath'] ?>" />
</div>

</div>

