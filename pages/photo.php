
<?php
require_once('models/post.php');
$get_img_user_insert = get_all_posts();
foreach ($get_img_user_insert as $img){


?>
<div style="margin-top:5em">
    <div style="width:50%;margin:auto;">
        <img style="width:50%;margin:auto;" src="../images/<?php echo $img['img']  ?>" alt="">
    </div>

</div>
<?php } ?>