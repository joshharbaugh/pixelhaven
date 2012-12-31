<?php
$info=array(
	'box_name' => 'theme-meta-box',
	'title' => 'Pixelhaven Options',
	'location' => array('post', 'portfolio')
);


$options=array(
	
array(
	"type" => "text",
	"title" => "Post image",
	"name" => "theme_post_image",
	"desc" => "Enter the URL to an image for this post. It will be resized to fit where required. You may also use the <code>Post Thumbnail</code> feature instead.",
	"default" => "" ),	
	
);

$metabox_post = new theme_meta_box($info, $options);