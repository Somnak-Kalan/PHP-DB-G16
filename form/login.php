<div class="row w-75 m-auto ">
    <form action="controllers/login.php" method="post" class="mx-1 mx-md-4 card mt-3">
        <div class=" d-flex">
            <a class="nav-link active text-white btn-primary m-2 form-control text-center border-3 border-danger">LOGIN</a>
            <a href="form/signup.php" class="nav-link text-white btn-primary m-2 form-control text-center ">REGISTER</a>
        </div>

        <p class="text-center fw-bold">Login</p>
        <div class="text-center">
            <i class="fa-brands fa-google fs-4 m-1 text-primary"></i>
            <i class="fa-brands fa-github-square fs-4 m-1 text-primary"></i>
            <i class="fa-brands fa-instagram-square fs-4 m-1 text-primary"></i>
            <p class="text-center">or</p>
        </div>
        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <input type="email" name='email' id="form3Example3c" class="form-control" placeholder="email" />
            </div>
        </div>

        <div class="d-flex flex-row align-items-center mb-4">
            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
            <div class="form-outline flex-fill mb-0">
                <input type="password" name='password' id="form3Example4c" class="form-control" placeholder="password" />
            </div>
        </div>
        <div class="form-check d-flex justify-content-center mb-5">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
            <div class="d-flex justify-content-between">
                <label class="form-check-label" for="form2Example3">
                    Remember me ! <a href="#!">Forget password</a>
                </label>
            </div>
        </div>
       
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
            <button type="submit" class="btn btn-primary btn-lg">LOG IN</button>
        </div>

    </form>
</div>