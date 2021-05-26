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
    <title>Sumbit report form </title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="assets/css/cmreport.css" rel="stylesheet" media="all">


</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Report </h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Activity Id</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="act_id">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="act_title" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="desc" placeholder="Decription of the activity"></textarea>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="form-group form-icon">
                                <div class="name">Start Date</div>
                                <input type="text" class="input--style-6" name="start_date" id="start_date" placeholder="MM-DD-YYYY" />
                            </div>

                            <div class="form-group form-icon">
                                <div class="name">End Date</div>
                                <input type="text" class="input--style-6" name="end_date" id="end_date" placeholder="MM-DD-YYYY" />
                            </div>


                            <div class="form-group form-icon">
                                <div class="name">Start Time</div>
                                <input type="time" class="input--style-6" name="start_time" id="start_time"  />
                            </div>

                            <div class="form-group form-icon">
                                <div class="name">End Time</div>
                                <input type="time" class="input--style-6" name="end_time" id="end_time" />
                            </div>
                        </div> 

                        <div class="form-row">
                            <div class="name">Venue</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="venue">
                            </div>
                        </div>  

                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="category">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Merit Mark</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="merit">
                            </div>
                        </div>

                        <div class="form-row">    
                            <div class="name">Quota</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="quota">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">AJK List</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="ajk" placeholder="List of AJK"></textarea>
                                </div>
                            </div> 
                        </div>

                        <div class="form-row">
                            <div class="name">Participant List</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="participant" placeholder="List of participant"></textarea>
                                </div>
                            </div> 
                        </div>
                       
                        <div class="form-row">
                            <div class="name">Upload Photo</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your event photo or any other relevant file. Max file size 100 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery/cmreport.min.js"></script>


    <!-- Main JS-->
    <script src="assets/js/cmreport.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->