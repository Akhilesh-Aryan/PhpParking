<?php include "fun.php";?>
<html lang="en">
    <head>
        <title>parking management system</title>
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>

    <?php include "header.php";?>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="text-center text-primary">Signup Here</h4>
                            <hr>

                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Contact</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="create" class="btn btn-success btn-block">
                                </div>
                            </form>

                            <a href="login.php" class="small text-muted">Already have an account?</a>
                            <?php

                                if(isset($_POST['create'])){
                                    $data = [
                                    'contact' => $_POST['contact'],
                                    'password' => md5($_POST['password']),
                                    'name' => $_POST['name']
                                    ];

                                    insert('admin',$data);


                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html> 