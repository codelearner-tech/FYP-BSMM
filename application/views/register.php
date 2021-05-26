<?php
  include_once 'register_crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register BSMM UKM</title>

    <!-- Icons font CSS-->
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">

                        <div class="col">
                                <div class="input-group">
                                    <label class="label">Full Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                            </div>

                        <div class="row row-space">
                            
                        </div>

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Matric Number</label>
                                    <input class="input--style-4" type="text" name="matric_no"
                                    placeholder="A123456">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">IC Number</label>
                                    <input class="input--style-4" type="text" name="ic_no" placeholder="980701025134">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Race</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Malay
                                            <input type="radio" checked="checked" name="race" value="Malay">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Chinese
                                            <input type="radio" name="race" value="Chinese">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">India 
                                            <input type="radio" name="race" value="India">
                                            <span class="checkmark"></span>
                                        </label>

                                        &nbsp;
                                        <label class="radio-container ">Other
                                            <input type="radio" name="race">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Religion</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Islam
                                            <input type="radio" checked="checked" name="religion" value="Islam">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Buddha
                                            <input type="radio" name="religion" value="Buddha">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Christian
                                            <input type="radio" name="religion" value="Christian">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Hindu
                                            <input type="radio" name="religion" value="Hindu">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Other
                                            <input type="radio" name="religion" value="Other">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="text" name="address">
                                </div>
                           

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone" placeholder="xxx-xxxxxxxx">
                                </div>
                            </div>
                        </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                            <label class="label">Blood Type</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="blood">
                                    <option disabled="disabled" selected="selected"></option>
                                    <option value="AB">Blood AB</option>
                                    <option value="A">Blood A</option>
                                    <option value="B">Blood B</option>
                                    <option value="O">Blood O</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            </div>
                        </div>

                        <div class="col-2">
                                <div class="input-group">
                                <label class="label">Year</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="year">
                                    <option disabled="disabled" selected="selected"></option>
                                    <option value="1">Year 1</option>
                                    <option value="2">Year 2</option>
                                    <option value="3">Year 3</option>
                                    <option value="4">Year 4</option>
                                </select>
                                <div class="select-dropdown"></div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <label class="label">Faculty</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="faculty">
                                    <option disabled="disabled" selected="selected"></option>
                                    <option value="Farmasi">FARMASI</option>
                                    <option value="FEP">FEP</option>
                                    <option value="FKAB">FKAB</option>
                                    <option value="FPEND">FPEND </option>
                                    <option value="FPERG">FPERG </option>
                                    <option value="FPI">FPI </option>
                                    <option value="FSK">FSK </option>
                                    <option value="FSSK">FSSK </option>
                                    <option value="FST">FST </option>
                                    <option value="FTSM">FTSM </option>
                                    <option value="FUU">FUU </option>
                                    <option value="PPUKM">PPUKM </option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-2">
                                <div class="input-group">
                                <label class="label">College</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select name="college">
                                    <option disabled="disabled" selected="selected"> </option>
                                    <option value="KAB">KAB</option>
                                    <option value="KBH">KBH</option>
                                    <option value="KDO">KDO</option>
                                    <option value="KIY">KIY</option>
                                    <option value="KIZ">KIZ</option>
                                    <option value="KKM">KKM</option>
                                    <option value="KPZ">KPZ</option>
                                    <option value="KRK">KRK</option>
                                    <option value="KTDI">KTDI</option>
                                    <option value="KTHO">KTHO</option>KTSN
                                    <option value="KTSN">KTSN</option>
                                    <option value="KUO">KUO
                                    
                                </select>
                                <div class="select-dropdown"></div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->