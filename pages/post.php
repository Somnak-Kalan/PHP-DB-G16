
    <?php
        require_once("acount.php");
        require_once("module.php");
    ?>

    <div  class="container-fluid mt-3">
     <!-- --------------modal------------------ -->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="d-flex">
                            <p style="background:grey;border-radius: 40px;padding:25px;"></p>
                            <p>Somnak Kalan</p>
                        </div>
                        <!-- form for post any content  -->
                        <form action="">
                            <div>
                                <textarea class="form-control" placeholder="What is your mind"></textarea>
                            </div>
                            <div class="card mt-3">
                                <div class="d-flex justify-content-between  ">
                                    <div class="input-group">
                                        <div class="custom-file d-flex justify-content-center">
                                            <input class="d-none" type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Add your post</label>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="../images/logo/avatar.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer form-group">
                                <button class="btn form-control btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">POST</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

<!-- ---------modal------- -->


    
        <div class="row  my-auto">
 <!-- left side   -->
            <div style="background: rgb(192, 187, 157);margin-left:5em;" class="left  col-md-3 " >
                    <div class="mt-3">
                        <form action="">
                            <div>
                                <textarea class="form-control" rows="" cols=""></textarea>
                            </div>
                            <div class="text-center">
                                <h3><a class="nav-link text-black"href="">Edit Bio</a></h3>
                            </div>
                        </form>
                    </div>
                    <div >
                        <form action="">

                            <div class="d-flex"><i class="fa-solid fa-graduation-cap m-1"></i><p>Studied at PNC</p></div>
                            <div class="d-flex"><i class="fa-solid fa-house-chimney m-1"></i><p>Lives in Phnom Penh</p></div>
                            <div class="d-flex"><i class="fa-solid fa-location-dot m-1"></i><p>From Banlung</p></div>
                            <div class="d-flex"><i  class="fa-solid fa-heart m-1"></i><p>Single</p></div>
                            
                            <div class="text-center">
                                <h3><a class="nav-link text-black"href="">Edit Detailed</a></h3>
                            </div>
                        </form>
                    </div>
                    <!-- Favourite -->
                    <div>
                        <form action="" >
                            <h3 class="text-center">Favourite</h3>
                            <p>listening music</p>
                            <p>Movies</p>
                            <p>Cyclings</p>
                            <p>Sing</p>
                            <p>Hang Out</p>
                            <div class="text-center">
                                <h3><a class="nav-link text-black"href="">Edit </a></h3>
                            </div>

                        </form>
                    </div>
            </div>  
            <div class="w-50 m-auto  col-md-5">
                <div style="background: rgb(192, 187, 187);" class="card-post rounded p-4 ">
                <div class="logo d-flex">
                    <!-- <p style="background:grey;border-radius: 40px;padding:25px;"></p> -->
                    <div ><img src="../images/lisa.png" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
                    <p  style="background: rgb(192, 187, 187);" class=" form-control form-group" >
                        <a class="btn w-100 bg-light rounded-pill form-control" data-bs-toggle="modal" href="../home.php#exampleModalToggle" role="button">What is your mind?</a>

                    </p>
                </div>
            </div>

<!--side right -->
                <div style="background: rgb(192, 187, 187);" class="right mt-3 p-3 rounded verflow-auto">
                    <!-- <div class="" style="background: rgb(192, 187, 187);" > -->
                        <div class="card-body d-flex justify-content-between">

                            <div  class=" d-flex ">
                                    <div ><img src="../images/lisa.png" alt="30" class="rounded-circle" width="100%" height="70vh"></div>
                                    <div class="text-dark  fw-bold m-3">
                                        <p > Lalalisa</p>
                                        <p><small>Sep 7 at 12:00 AM</small></p>
                                    </div>
                            </div>
                            <!-- delete icon  -->
                            <p class="card-text text-end">
                                <a class="" data-bs-toggle="modal" href="#somnakexampleModalToggle" role="button"><i class="fa-solid fa-ellipsis fs-5 text-black fw-bold"></i></a>
                            </p>
                        </div>
                        <div class="text-white fw-bold">
                            <p>Here I am with new style.</p>
                        </div>
                        <div class="text-center">
                            <img src="../images/lisa.jpg" class="card-img-top" alt="...">
                        </div>
                        <div>
                            <div class="d-flex justify-content-between text-white fw-bold">
                                <p>20Likes</p>
                                <p>10M comments</p>
                            </div>
                            <hr>
                            <div>
                                <ul class="navbar nav text-white fw-bold p-0 m-0">
                                    <div class="d-flex"><i class="fa-solid fa-thumbs-up m-1"></i><li>Like</li></div>
                                    <li>comment</li>
                                </ul>
                            </div>
                            <hr>
    
                            <div class="logo d-flex">
                                <p style="background:grey;border-radius: 40px;padding:25px;"></p>
                                <p style="margin-left:40px;margin-top:5px;padding:1px;" class="bg-light form-control rounded-pill" ><a class="nav-link" href="">comment</a></p>
                            </div>
                        
                        </div>
                    <!-- </div> -->

                </div>

            </div>
        </div>
    </div>