<?php include "header.php"; ?>
<style>
    .login {
        height: 100vh;
    }
</style>
<div class="login bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center" style="align-content: center; align-items: center">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="card mt-4">
                        <div class="card-body text-center">
                            <div class="head d-flex align-items-center">
                                <img style="width: 80px" src="/assets/logo.png" alt="">
                                <h4 class="m-0 mb-1" style="font-family: sans-serif;font-weight: bold">Lead Login</h4>
                            </div>
                            <hr>
                            <?php if (isset($_SESSION['invalidCode']) && $_SESSION['invalidCode']): ?>
                            <div class="alert alert-danger">
                                Code Is Invalid
                            </div>
                            <?php endif; ?>
                            <div class="form-group text-left">
                                <label for="code">Authorization Code</label>
                                <input required autofocus id="code" name="code" type="password" class="form-control">
                            </div>
                            <div class="w-100">
                                <button class="w-100 btn btn-primary btn-sm">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementsByName('body').className = "bg-dark"
</script>
<?php include "footer.php"; ?>
