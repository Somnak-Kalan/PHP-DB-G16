<?php require_once('models/post.php') ?>
<?php require_once('models/like.php') ?>
<?php require_once('models/user.php') ?>
<?php require_once("models/comment.php") ?>
<?php
// function
$posts = get_all_posts();
$get_user_id = get_user_id();
$get_user_name = get_user_name_img();
foreach ($get_user_name as $user_img) {
};
foreach ($posts as $post) {
?>
    <div styelay="">
        <div class="w-50 m-auto">

            <div style="background: rgb(192, 187, 187);" class="right mt-3 p-3 rounded ">
                <div class="card-body d-flex justify-content-between">

                    <div class=" d-flex ">
                        <div><img src="../images/<?php echo $user_img['profile_img'] ?>" alt="" class="rounded-circle" width="90%" height="70vh"></div>
                        <div class="text-dark  fw-bold m-3">
                            <p> <?php echo $user_img['full_name'];  ?></p>
                            <p><small><?php echo $post['post_date'] ?></small></p>
                        </div>
                    </div>
                    <!-- delete icon  -->

                    <!-- ------------------------- -->

                    <div style="margin-left:14em;" class="modal fade " id="example<?php echo $post["post_id"] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content w-50">
                                <div class="modal-body ">
                                    <p class="card-text ">
                                        <a class="nav-link text-black fw-bold" href="../views/edit_post.php?id=<?php echo $post['post_id'] ?>"><i style="font-size:30px" class="fa-solid fa-pen-to-square text-primary "></i> EDIT</a>
                                        <hr>
                                        <a class="nav-link text-black fw-bold" href="controllers/delete_post.php?id=<?php echo $post['post_id'] ?>"><i style="font-size:30px" class="fa-regular fa-trash-can text-danger "></i> DELETE</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link text-dark fs-5" data-bs-toggle="modal" href="#example<?php echo $post["post_id"] ?>" role="button">ooo</a>

                    <!-- ---------------------------------------------------------------- -->

                </div>
                <div class="text-white fw-bold">
                    <p><?php echo $post['content'] ?></p>
                </div>
                <div class="text-center"  >
                    <img src="../images/<?= $post['img'] ?>" class="card-img-top" alt="...">
                </div>
                <!-- =================================================== Like and comment number======================================= -->

                <div>
                    <div class="d-flex justify-content-between text-white fw-bold">
                        <a class="nav-link" href="controllers/add_like.php?id=<?= $post['post_id'] ?>&user_id=<?php echo $get_user_id['user_id'] ?>">
                            <div>
                                <ul class="navbar nav text-white fw-bold p-0 m-0">
                                    <div class="d-flex">
                                        <li>
                                            <?php
                                            $count_like = count_like($post['post_id']);
                                            echo $count_like['number'];
                                            ?>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </a>
                        <button type="button" id='show_comment' class="btn text-white "><b>
                                <p>

                                    <a class=" text-white nav-link fw-bold" data-bs-toggle="collapse" href="#collapse<?php echo $post['post_id'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <?php
                                        $get_comment_by_id = count_comment($post['post_id']);
                                        echo $get_comment_by_id['comment'];
                                        ?>
                                        comments
                                    </a>

                                </p>

                            </b></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between m-0 p-0">
                        <a class="nav-link text-dark fw-bold" href="../controllers/add_like.php?id=<?= $post['post_id'] ?>&user_id=<?php echo $get_user_id['user_id'] ?>"><i class="fa-solid fa-thumbs-up m-1 fs-5"></i> Like</a>
                        <a class=" text-dark nav-link fw-bold" data-bs-toggle="collapse" href="#collapse<?php echo $post['post_id'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa-solid fa-message"></i> comments
                        </a>
                    </div>

                    <hr>

                    <!-- ================================================== comment list============================================== -->


                    <div class="collapse " id="collapse<?php echo $post['post_id'] ?>">
                        <div class="logo d-flex">
                            <p style="background:grey;border-radius: 40px;padding:25px;"></p>

                            <form  action="../controllers/add_comment.php?id=<?= $post['post_id'] ?>&user_id=<?php echo $get_user_id['user_id'] ?>" method="post" class="form-control border-0" style="background: rgb(192, 187, 187);">
                                <!-- ======================================== add comment ============================================= -->
                                <div class="input-group mb-3">
                                    <input type="text" name="comment" id="comment_btn" class="form-control  " placeholder="Write comment..." aria-label="Write comment..." aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button    type="submit" class="btn rounded-0 bg-white" ><img src="../images/send.png" alt="" width="80%"></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="card card-body ">
                            <?php
                            $get_comment_content = get_comment_content($post['post_id']);
                            foreach ($get_comment_content as $content) :
                                
                            ?>
                                <div class=" m-2 ">
                                    <form style="background:#C4C1C1;" action="../controllers/delete_comment.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $content['comment_id'] ?>" />
                                        <div style="display:flex;justify-content:space-between; " class="rounded p-2">
                                            <p style="display:flex;justify-content:space-between " class="p-1 rounded"><?php echo $content['comment_content'] ?> </p>
                                            <div>
                                                <a class="btn text-primary border-0" data-bs-toggle="collapse" href="#collapse<?php echo $content['comment_id'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <button  style="background:#C4C1C1;" class="border-0 text-danger  fw-bold" type="submit"><i class="fa-solid fa-trash-can"></i></button>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="collapse" id="collapse<?php echo $content['comment_id'] ?>">
                                        <div class="card card-body">
                                            <strong>
                                                <form action="controllers/edit_comment.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $content['comment_id'] ?>" />
                                                    <input class="form-control" name="comment_content" value="<?php echo $content['comment_content'] ?>">
                                                    <button style="background:white;" class="text-danger border-0 mt-2" type="submit"><i class="fa-solid fa-pen-to-square"></i></button>

                                                </form>
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>