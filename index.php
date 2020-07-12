<?php

require "vendor/autoload.php";
require 'functions.php';

if (isset($_POST['branch'])){
    $data = [
        "temp"=>"t".$_POST['temp'],
        "branch"=>$_POST['branch'],
        "name"=>$_POST['c_name'],
        "title"=>$_POST['c_title'],
        "desc"=>$_POST['c_desc'],
        "lead_sig"=>$_POST['lead'],
    ];
    makeCert($data);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSC Certificate Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css">
    <link rel="stylesheet" href="/assets/app.css">
    <script>
        $(document).ready(function () {
            $(".radio").on('change', function () {
                $(this).parent().toggleClass('active');
                $('input:not(:checked)').parent().removeClass("active");
            });
        })
    </script>
</head>
<body class="bg-light">
<div class="container mt-4 p-4 bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex align-center">
                <img style="width: 45px;height: 35px"
                     class="mr-2"
                     src="assets/logo.png" alt="">
                <h4>DSC Certificate Maker</h4>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">       <p>This is an Open Source Project To help The <a href="https://g.co/dev/dsc">DSC</a> Leaders generate
                Certificates for Their Students Easily,<br>
                Please feel free to submit a new design to add to the project, Made with <span
                        class="mdi mdi-heart text-danger"></span> by Youssef Mahmoud</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="" class="form row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="temp">Choose Template</label>
                        <div class="templates">
                            <div class="temp mb-2">
                                <div class="icon">
                                    <span class="mdi mdi-check-circle"></span>
                                </div>
                                <img style="width: 100%;height: 100%;" src="ex/t1.png" alt="">
                                <input required class="radio" type="radio" name="temp" value="1">
                            </div>
                            <div class="temp">
                                <div class="icon">
                                    <span class="mdi mdi-check-circle"></span>
                                </div>
                                <img style="width: 100%;height: 100%;" src="ex/t2.jpg" alt="">
                                <input required class="radio" type="radio" name="temp" value="2">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="branch">Branch *</label>
                        <input required placeholder="Branch Name (e.g: DSC MUST) " class="form-control" id="branch" type="text" name="branch">
                    </div>
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input required placeholder="Certification Title (e.g: Certification of Attending) " class="form-control"
                               id="title" type="text" name="c_title">
                    </div>
                    <div class="form-group">
                        <label for="st">Student Name *</label>
                        <input required placeholder="Student Name " class="form-control"
                               id="st" type="text" name="c_name">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description *</label>
                        <input required placeholder="Description " class="form-control"
                               id="desc" type="text" name="c_desc">
                    </div>
                    <div class="form-group">
                        <label for="lead">Leader Name (Optional)</label>
                        <input placeholder="Leader name for signature " class="form-control"
                               id="lead" type="text" name="lead">
                    </div>

                    <div class="form-group mt-2">
                        <button class="btn btn-primary">Generate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


