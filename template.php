<!DOCTYPE html>
<html lang="en" style="border-style: hidden;">

<?php include('head.php') ?>
<!-- Inlcudes head to make sure session is always stared and nav bar -->
<body>
    <?php include('nav.php') ?>
    <!-- Inlcudes the nav bar file-->
    <main>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-6 formContainer rounded">
                        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                            <div class="form-group p-3 row">
                               
                            </div>
                                <div class="form-group p-3 row">
                                       
                                    </div>
                                    <div class="col-md-5 p-2">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-3 row">
                               
                            </div>
                            <?php 
                            if(isset($errors)) {
                                echo "<p class='text-success'>". $errors . "</p>";
                            }
                            ?>
                        </form>
                    </div>   
                </div>
            </div>

            <div class="col-6">
                <div class="col-6 formContainer rounded">
                        <h3> SAM HELP - 
                        <small class="text-muted">AIDS</small>
                        </h3>
                            
            </div>
        </div>
    </main>
    <?php include('footer.html') ?>
    <!-- Inlcudes the footer file -->
    </body>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
</html>