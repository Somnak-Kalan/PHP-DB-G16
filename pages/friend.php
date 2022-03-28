<?php
if(isset($_GET)){
    require_once('models/user.php');
    
}else{
    require_once('../models/user.php');

}
$get_all_friend_out=get_friend();
foreach($get_all_friend_out as $friend):

?>
<form id="myDIV" action="controllers/add_suggestion.php" method="post" enctype="multipart/form" >
    <input type="hidden" name="user_id" value="<?php echo $friend['user_id']?>">
    <div class="m-5 bg-info d-flex justify-content-between  shadow-lg  mb-5 bg-body rounded ">
        <p class=" m-1 text-dark  fw-bold fs-5"><?php echo $friend['full_name']?></p>
        <button class="btn p-2 btn-primary align-center "   type="submit" onclick="myFunction(e)" >+ Add Friend</button>
    </div>
</form>
<?php endforeach ?>
