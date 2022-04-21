<?php
include_once "./autoload.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mark Form</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>



    <div class="wrap">
        <a href="./" class="btn btn-primary btn-sm">Back</a>
        <br>
        <br>
        <div class="card shadow-sm">
            <div class="card-body">
                <h2>Set Marks</h2>

                <form action="" method="POST">

                    <div class="profile">
                        <img src="" alt="">
                        <h2></h2>
                        <p>Roll: </p>
                        <p>Registration No:</p>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="">Bangla</label>
                        <input name="bn" class="form-control" type="text" value="">
                    </div>
                    <div class="form-group">
                        <label for="">English</label>
                        <input name="en" class="form-control" type="text" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Math</label>
                        <input name="math" class="form-control" type="text" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Science</label>
                        <input name="sc" class="form-control" type="text" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Social Science</label>
                        <input name="ssc" class="form-control" type="text" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Religion</label>
                        <input name="reli" class="form-control" type="text" value="">
                    </div>

                    <div class="form-group">
                        <input name="result_add" class="btn btn-primary" type="submit" value="Set Result">
                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- JS FILES  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>




</body>

</html>