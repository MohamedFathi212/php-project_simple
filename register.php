<?php include 'include/header.php'; ?>
<?php include 'include/nav.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <h2 class="p-2 my-3 text-center">Register</h2>
            <?php
            if (isset($_SESSION['errors'])) :
                foreach ($_SESSION['errors'] as $error) :
            ?>

                    <div class="alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>

            <?php
                endforeach;
                unset($_SESSION['errors']);
            endif;

            ?>
            <form action="handlers/handleRegister.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>


 
             
