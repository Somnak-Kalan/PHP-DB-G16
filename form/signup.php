<?php
// require_once('../templates/header.php');

?>
<div class="row w-75 m-auto">
    <form action="../controllers/add_user.php" class="mx-1 mx-md-4 card mt-3" method="POST">
        <div class=" d-flex">
            <a href="../index.php" class="nav-link  text-white btn-primary m-2 form-control text-center">LOGIN</a>
            <a href="" class="nav-link text-white active btn-primary m-2 form-control text-center border-3 border-danger ">REGISTER</a>
        </div>
        <p class="text-center fw-bold">Sign up</p>
        <div class="text-center">
            <i class="fa-brands fa-google fs-4 m-1 text-primary"></i>
            <i class="fa-brands fa-github-square fs-4 m-1 text-primary"></i>
            <i class="fa-brands fa-instagram-square fs-4 m-1 text-primary"></i>
            <p class="text-center">or</p>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <input type="text" id="form3Example1c" name="full_name" class="form-control" placeholder="Full name" />
            </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <input type="email" id="form3Example3c" name="email" class="form-control" placeholder="email" />

            </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <input type="password" id="form3Example4c" name="password" class="form-control" placeholder="password" />
            </div>
        </div>
        <div class="more">
            <button style="margin-left:3em" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                MORE
            </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="form-group m-2">
                        <input type="number" name="number" placeholder="phone number" class="form-control">
                    </div>
                    <div class="form-group m-2">
                        <label for="gender">Gender:</label>
                        <input type="radio" value="Male" name="gender" class="m-3">Male
                        <input type="radio" value="Female" name="gender" class="m-3">Female
                    </div>
                    <div class="form-group m-2">
                        <input type="text" class="form-control" placeholder="Location" name="location">
                    </div>
                    <div class="form-group m-2">
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
            <label class="form-check-label" for="form2Example3">
                I agree all statements in <a href="#!">Terms of service</a>
            </label>
        </div>
        
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>


    </form>
</div>

<?php
require_once('../templates/header.php');
?>