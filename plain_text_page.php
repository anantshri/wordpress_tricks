<?php
/*
* This templete will show all content as text only. in order to retain text only post while you save text in wordpress editor i would suggest add the text inside <pre></pre> tag
* the below code will remove any html / php tag that it will find in content and will only display the textual part of the file.
*/
header('Content-type: text/plain'); 
/**
 * Template Name: content text only
 * Description: Only Post content text only
 * @package WordPress 
 */
if (have_posts()) : 
	while (have_posts()) : the_post(); 
		$content=get_the_content();
		$cnt=strip_tags($content);
		echo $cnt;
	endwhile; // end of the loop. 
endif; 
?>
