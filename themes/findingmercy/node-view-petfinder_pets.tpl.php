<?php
drupal_add_css(path_to_theme().'/node-view-petfinder_pets.css');
?>

<div class="petfinder-pet">

<div class="petfinder-pet-name">
<?php echo $node->title; ?>
</div>

<div class="petfinder-pet-stats">

<div class="petfinder-pet-stats-age">
<?php switch($node->field_petfinder_age[0]['value']) {
case 'B': echo "Baby"; break;
case 'Y': echo "Young"; break;
case 'A': echo "Adult"; break;
case 'S': echo "Senior"; break;
} ?>
</div>

<div class="petfinder-pet-stats-size">
<?php switch($node->field_petfinder_size[0]['value']) {
case 'S': echo "Small"; break;
case 'M': echo "Medium"; break;
case 'L': echo "Large"; break;
case 'XL': echo "X-Large"; break;
} ?>
</div>

<div class="petfinder-pet-stats-gender">
<?php echo ($node->field_petfinder_gender[0]['value'] == 'M' ? "Male" : "Female"); ?>
</div>

<div class="petfinder-pet-stats-breeds">
<ul>
<?php foreach($node->field_petfinder_breeds as $breed): ?>
<li><?php echo $breed['value']; ?></li>
<?php endforeach; ?>
</ul>
</div>

<div class="petfinder-pet-petfinder-link">
<a href="http://www.petfinder.com/petdetail/<?php echo $node->field_petfinder_id[0]['value']; ?>" target="_blank">
View <?php echo $node->title; ?> on Petfinder
</a>
</div>

</div>

<div class="petfinder-pet-photos">
<?php $photos = $node->field_petfinder_photos; ?>
<?php array_splice($photos, 2); ?>
<?php foreach($photos as $photo): ?>
<?php if(!file_exists($photo['filepath'])) { continue; } ?>
<a href="/<?php echo $photo['filepath']; ?>">
<?php echo theme('imagecache', 'gallery_thumbnail', $photo['filepath'],
  $node->title, $node->title, array('class' => 'lightbox')); ?>
</a>
<?php endforeach; ?>
</div>

<div style="clear: both;"></div>

</div>

