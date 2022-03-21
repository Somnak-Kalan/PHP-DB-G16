<?php
require_once('../templates/header.php');

require_once('../models/post.php');
?>
<?php
$id = $_GET['id'];
$get_by_id = get_post_by_id($id);
?>
<div class="modal-body bg-dark rounded text-white w-75 m-auto">
    <div>
        <div class="d-flex">
            <p style="background:grey;border-radius: 40px;padding:25px;"></p>
            <p>Somnak Kalan</p>
        </div>

        <!-- form for post any content  -->
        <form action="../controllers/edit_post_info.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $get_by_id['post_id'] ?>">
            <div>
                <textarea name="content" class="form-control bg-dark border border-dark text-white" placeholder="What is your mind"><?= $get_by_id['content'] ?></textarea>

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
                                <input type="file" value="<?php  echo $get_by_id['img']?>" name="img" id="addImg" class="d-none">
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


<?php require_once('../templates/footer.php') ?>