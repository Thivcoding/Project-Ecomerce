<?php include('./includes/header.php');
    include('./includes/sidebar.php');
    // include('../middleware/adminMiddleware.php');
?>
<main class="container col-6  p-0">
    <div class="card shadow-blur shadow ">
        <div class="card-header text-center ">
            <h4>Categories</h4>
        </div>
        <div class="card-body ">
        <form method="post" action="./controller/authController.php" class="px-5">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <div class="container px-4">
                <input placeholder="Name" type="text" name="Name" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Slug</label>
                <div class="container px-4">
                <input placeholder="Slug" type="text" name="Slug" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Decsription</label>
                <div class="container px-4">
                <input placeholder="Decsription" type="password" name="Decsription" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <div class="container px-4">
                <input placeholder="Password" type="" name="Status" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Popular</label>
                <div class="container px-4">
                <input placeholder="Password" type="password" name="password" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Meta Title</label>
                <div class="container px-4">
                    <input placeholder="Meta-Title" type="text" name="Meta_Title" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Meta Decsription</label>
                <div class="container px-4">
                    <input placeholder="Password" type="password" name="password" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Meta Keywords</label>
                <div class="container px-4">
                    <input placeholder="Password" type="password" name="password" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <div class="container px-4">
                <input placeholder="Password" type="password" name="password" class="form-control shadow-none border-dark border-0 border-bottom rounded-0" id="exampleInputPassword1">
                </div>
            </div>
            <button type="submit" name="logBtn" class="btn float-end btn-outline-dark ">Sign In</button>
        </form>
        </div>
    </div>
</main>
<?php include ('./includes/footer.php'); ?>