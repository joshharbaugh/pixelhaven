<?php
$image = "";
$first_image = $wpdb->get_results(
"SELECT guid FROM $wpdb->posts WHERE post_parent = '$post->ID' "
."AND post_type = 'attachment' ORDER BY `post_date` ASC LIMIT 0,1"
);
if ($first_image) {$image = $first_image[0]->guid;}
else {$image = "/wp-content/themes/designingfor/images/default.jpg";}
?>