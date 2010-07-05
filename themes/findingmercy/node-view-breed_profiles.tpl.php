<?php
drupal_add_css(path_to_theme().'/node-view-breed_profiles.css');
?>

<div class="breed-sketch-and-misc">
<img class="breed-sketch" alt="Sketch of <?php echo $node->title; ?>"
   title="Sketch of <?php echo $node->title; ?>"
   src="/<?php echo $node->field_breed_sketch[0]['filepath'] ?>" />

<div class="breed-size">
   <img class="breed-size" alt="Size: <?php echo $node->field_breed_size[0]['view']; ?>"
   title="Size: <?php echo $node->field_breed_size[0]['view']; ?>"
   src="/sites/default/files/breed_icons/size-<?php echo $node->field_breed_size[0]['value']; ?>.png" />
</div>

<div class="breed-energy">
   <img class="breed-energy" alt="Energy: <?php echo $node->field_breed_energy[0]['view']; ?>"
   title="Energy: <?php echo $node->field_breed_energy[0]['view']; ?>"
   src="/sites/default/files/breed_icons/energy-<?php echo $node->field_breed_energy[0]['value']; ?>.png" />
</div>

<div class="breed-purpose">
   <?php echo $node->field_breed_purpose[0]['view']; ?>
</div>

<div class="breed-special">
   <?php echo $node->field_breed_special[0]['view']; ?>
</div>
</div>

<div class="breed-title-and-description">
<h2 class="breed-title"><?php echo $node->title; ?></h2>
<p class="breed-description"><?php echo $node->body; ?></p>
<img class="breed-outline" alt="Silhouette of <?php echo $node->title; ?>"
   title="Silhouette of <?php echo $node->title; ?>"
   src="/<?php echo $node->field_breed_outline[0]['filepath'] ?>" />
</div>

<div class="breed-icons">
<?php
   foreach ($node->field_breed_icons as $icon) {
     echo '<img class="breed-icon" alt="'.$icon['view'].'" title="'.$icon['view'].'" ' .
     'src="/sites/default/files/breed_icons/icon-'.$icon['value'].'.png" />';
 }
?>
</div>
