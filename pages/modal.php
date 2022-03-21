<?php
// require_once "models/database.php";
require_once('models/user.php');
$get_user_id = get_user_id();
?>
<?php
$get_profile_img = get_user_name_img();
foreach ($get_profile_img as $profile_img){

}

?>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-white">
                <div>
                    <div class="d-flex">
                        <img style="border-radius: 40px;height:15vh;" src="../images/<?php echo $profile_img['profile_img'] ?>" alt="" width="10%">
                        <p class="m-2"><?php echo $profile_img['full_name'] ?></p>
                    </div>

                    <!-- form for post any content  -->
                    <form class="mt-2" action="controllers/add_post.php?user_id=<?php echo $get_user_id['user_id'] ?>" method="post" enctype="multipart/form-data">
                        <div>
                            
                            <textarea name="content" class="form-control bg-dark border border-dark text-white" placeholder="What is your mind"></textarea>

                            <label for="colorInput" class="m-3">
                                <img src="../images/color.png" alt="" width="20%">
                                <input type="color" name="color" id="colorInput" class="d-none">
                            </label>

                        </div>
                        <div class="card mt-3">
                            <div class="d-flex justify-content-between bg-dark ">
                                <div class="input-group bg-dark">
                                    <div class="custom-file d-flex justify-content-center bg-dark">
                                        <label class="custom-file-label" for="inputGroupFile01">Add your post</label>

                                        <label for="addImg">
                                            <input type="file" name="img" id="addImg" class="d-none ">
                                            <img src="../images/img.png" alt="40" width="30%">
                                        </label>

                                    </div>
                                </div>
                                <div>
                                    <a href=""><img src="../images/emoji.png" alt="" width="30%"></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer form-group">
                            <button type="submit" class="btn form-control btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">POST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

