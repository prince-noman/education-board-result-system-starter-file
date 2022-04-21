<?php
include_once "./autoload.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Development Area</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>


    <div class="wrap-table">
        <a href="./create.php" class="btn btn-primary btn-sm">Add new student</a>
        <br>
        <form action="" class="form-inline" method="POST">
            <div class="my-3">
                <select class="form-control" name="ls" id="">
                    <option value="">--select--</option>
                    <option value="Mirpur">Mirpur</option>
                    <option value="Uttara">Uttara</option>
                    <option value="Banani">Banani</option>
                    <option value="Badda">Badda</option>
                    <option value="Gulshan">Gulshan</option>
                </select>

                <select class="form-control" name="edu" id="">
                    <option value="">--select--</option>
                    <option value="PSC">PSC</option>
                    <option value="JSC">JSC</option>
                    <option value="HSC">HSC</option>
                    <option value="BSC">BSC</option>
                </select>

            </div>
            <div class="my-3">
                <input name="search" type="submit" value="search" class="btn btn-primary btn-sm">
            </div>
        </form>
        <br>
        <div class="card shadow-sm">
            <div class="card-body">
                <h2>All Data</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Reg</th>
                            <th>Gender</th>
                            <th>Education</th>
                            <th>Location</th>
                            <th>Edit Result</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>






                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>

                                <a class="btn btn-warning btn-sm" href="">Set
                                    Result</a>

                                <a class="btn btn-primary btn-sm" href="">Check Results</a>

                            </td>

                            <td><img src="" alt=""></td>
                            <td>
                                <a class=" btn btn-sm btn-info" href="./profile.php">View</a>
                                <a class="btn btn-sm btn-warning" href="./create.php">Edit</a>
                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
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