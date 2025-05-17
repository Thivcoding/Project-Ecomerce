<?php
session_start();
include './components/header.php';
?>
<main class=" container col-5 py-4 p-0">
    <?php
        if(isset($_SESSION['msg'])){
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Dear User!!</strong><?= $_SESSION['msg'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
    unset($_SESSION['msg']);
    ?>
    <div class="card shadow">
        <div class="card-header text-center">
            <h4 class="text-center">Registation Form ecomerce</h4>
        </div>
        <div class="card-body">
            <form method="post" action="./Controller/AuthController.php" class="px-5 py-3">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                    <div class="px-4">
                    <input type="text" placeholder="Full Name" class="form-control  border-0 border-bottom shadow-none border-3 border-dark rounded-0" id="exampleInputPassword1" name="name">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <div class="px-4">
                        <input type="number" placeholder="Phone Number" class="form-control  border-0 border-bottom shadow-none border-3 border-dark rounded-0" id="exampleInputPassword1" name="phone">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <div class="px-4">
                        <input  placeholder="Email Address" type="email" class="form-control  border-0 border-bottom shadow-none border-3 border-dark rounded-0 " id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <div class="px-4">
                        <input type="password" placeholder="Password" class="form-control  border-0 border-bottom shadow-none border-3 border-dark rounded-0" id="exampleInputPassword1" name="password">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <div class="px-4">
                        <input type="password" placeholder="Confirm Password" class="form-control  border-0 border-bottom shadow-none border-3 border-dark rounded-0" id="exampleInputPassword1" name="confirm_password">
                    </div>
                </div>
                <button type="submit" class="btn float-end btn-primary" name="subbtn">Sign Up</button>
            </form>
        </div>
    </div>
</main>
 <?php include './components/footer.php';  ?>
