<?php require_once('models/post.php') ?>
<?php require_once('models/like.php') ?>
<?php require_once('models/user.php') ?>
<?php require_once("models/comment.php") ?>
<?php
// function
$posts = get_all_posts();
$get_user_id = get_user_id();
$get_current_date = get_current_date();
// print_r($get_current_date);
$comments_total = count_comment();
foreach ($posts as $post) {
?>
    <div styelay="">
        <div class="w-50 m-auto">

            <div style="background: rgb(192, 187, 187);" class="right mt-3 p-3 rounded ">
                <div class="card-body d-flex justify-content-between">

                    <div class=" d-flex ">
                        <div><img src="../images/lisa.png" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
                        <div class="text-dark  fw-bold m-3">
                            <p> Lalalisa</p>
                            <p><small><?= $get_current_date['post_date']; ?></small></p>
                        </div>
                    </div>
                    <!-- delete icon  -->
                    <p class="card-text text-end d-flex">
                        <a class="nav-link text-black fw-bold" href="../views/edit_post.php?id=<?php echo $post['post_id'] ?>">EDIT</a>
                        <a class="nav-link text-black fw-bold" href="controllers/delete_post.php?id=<?php echo $post['post_id'] ?>">DELETE</a>
                </div>
                <div class="text-white fw-bold">
                    <p><?php echo $post['content'] ?></p>
                </div>
                <div class="text-center">
                    <img src="../images/<?= $post['img'] ?>" class="card-img-top" alt="...">
                </div>
                <!-- =================================================== Like and comment number======================================= -->
               
                    <div>
                        <div class="d-flex justify-content-between text-white fw-bold">
                            <a class="nav-link" href="controllers/add_like.php?id=<?= $post['post_id'] ?>&user_id=<?php echo $get_user_id['user_id'] ?>">
                                <div>
                                    <ul class="navbar nav text-white fw-bold p-0 m-0">
                                        <div class="d-flex"><i class="fa-solid fa-thumbs-up m-1"></i>
                                            <li>Like
                                                <?php
                                                $count_like = count_like($post['post_id']);
                                                echo $count_like['number'];
                                                ?>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                                <button type="button" id='show_comment' class="btn text-white"><b> <?php
                                               
                                    echo $comments_total['comment_content']?>M comments</b></button>
                            </a>
                        </div>
                        <hr>
                    <hr>

                    <!-- ================================================== comment list============================================== -->
                    <div class=" comment card border border-0" style="background: rgb(192, 187, 187);">
                        <?php
                        $comments = get_all_comment();
                        foreach ($comments as $comment) :
                        ?>
                            <p class="border border-white text-white p-1 " style="background:rgb(162, 187, 187)"><?= $comment["comment_content"] ?></p>
                        <?php endforeach ?>
                        <!-- ================================================ Hide comment ============================================= -->
                        <button type="button" id='hide_comment' class="btn text-white btn-primary"><b>Hide comment</b></button>
                    </div>
                    <div class="logo d-flex">
                            <p style="background:grey;border-radius: 40px;padding:25px;"></p>

                            <form action="../controllers/add_comment.php?id=<?= $post['post_id'] ?>&user_id=<?php echo $get_user_id['user_id'] ?>" method="post" class="form-control border-0" style="background: rgb(192, 187, 187);">
                                <!-- ======================================== add comment ============================================= -->
                                <div class="input-group mb-3">
                                    <input type="text" name="comment" id="comment_btn" class="form-control  " placeholder="Write comment..." aria-label="Write comment..." aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn rounded-0 bg-white"><img src="../images/send.png" alt="" width="80%"></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    <?php } ?>
    <script src="../js/main.js"></script>
