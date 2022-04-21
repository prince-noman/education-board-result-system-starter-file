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

    <div class="wrap">
        <a href="./index.php" class="btn btn-primary btn-sm">All Students</a>
        <br>
        <br>
        <div class="card shadow-sm">
            <div class="card-body">
                <h2>Add new student</h2>

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input name="cell" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <input name="gender" class="" type="radio" value="Male" id="male"> <label
                            for="male">Male</label>
                        <input name="gender" class="" type="radio" value="Female" id="female"> <label
                            for="female">Female</label>

                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input name="year" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Education</label>
                        <select class="form-control" name="education" id="">
                            <option value="">--select--</option>
                            <option value="HSC">HSC/Alim/Equivalent</option>
                            <option value="JSC">JSC/JDC</option>
                            <option value="SSC">SSC/Dakhil</option>
                            <option value="SSC-Voc">SSC(Vocational)</option>
                            <option value="HSC-Alim">HSC/Alim</option>
                            <option value="HSC-Voc">HSC(Vocational)</option>
                            <option value="HSC-BM">HSC(BM)</option>
                            <option value="HSC-DC">Diploma in Commerce</option>
                            <option value="HSC-DB">Diploma in Business Studies</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="board">Board</label>
                        <select class="form-control" name="board">
                            <option value="" selected>Select One</option>
                            <option value="barisal">Barisal</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="comilla">Comilla</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="dinajpur">Dinajpur</option>
                            <option value="jessore">Jessore</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="madrasah">Madrasah</option>
                            <option value="tec">Technical</option>
                            <option value="dibs">DIBS(Dhaka)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Location</label>
                        <select class="form-control" name="location" id="">
                            <option value="">--select--</option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="Uttara">Uttara</option>
                            <option value="Banani">Banani</option>
                            <option value="Badda">Badda</option>
                            <option value="Gulshan">Gulshan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <hr>
                        <img id="preview" src="" alt="" style="max-width: 100%;">
                        <input name="photo" class="d-none" type="file" id="image_upload">
                        <label for="image_upload"> <img
                                style="width: 70px; height: 70px; cursor:pointer; display:block;"
                                src="https://www.manufacturersnigeria.org/img/icons/photoIcon.jpg" alt="" id="">
                        </label>
                    </div>
                    <div class="form-group">
                        <input name="student_add" class="btn btn-primary" type="submit" value="Add">
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