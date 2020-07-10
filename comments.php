<?php 

$comments_num = get_comments_number();
if($comments_num == 1){
	echo $comments_num. " Comment";
}else{
	echo $comments_num. " Comments";
}
echo wp_list_comments();

echo "<hr>";
if( ! comments_open() ){
	echo "<p style=' color:red'> Comments are close of this post.  </p>";
}

comment_form();