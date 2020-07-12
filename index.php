<?php

require "vendor/autoload.php";
use Intervention\Image\ImageManagerStatic as Image;

if ($_REQUEST['method']=="POST"){

}

$img = Image::make('temp.png');
$branch = "DSC MUST";
$c_title = "CERTIFICATE OF ATTENDING";
$c_name = 'Student Name';
$c_text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, veritatis!";

$temp1 = [
    "branch" => [
        "x" => 935,
        "y" => 393,
        "s" => 52
    ],
    "title" => [
        "x" => 1000,
        "y" => 500,
        "s" => 72
    ],
    "name" => [
        "x" => 1000,
        "y" => 750,
        "s" => 92
    ],
    "desc" => [
        "y" => 200,
        "s" => 30
    ]
];
$img->text($branch,
    $temp1['branch']['x'], $temp1['branch']['y'], function ($font) use ($temp1) {
        $font->file('fonts/os/OpenSans-SemiBold.ttf');
        $font->size($temp1['title']['s']);
        $font->color('#545454');
        $font->align('left');
    });
$img->text($c_title,
    $temp1['title']['x'], $temp1['title']['y'], function ($font) use ($temp1) {
        $font->file('fonts/os/OpenSans-SemiBold.ttf');
        $font->size($temp1['title']['s']);
        $font->color('#eb4234');
        $font->align('center');
    });
$img->text($c_name,
    $temp1['name']['x'], $temp1['name']['y'], function ($font) use ($temp1) {
        $font->file('fonts/os/OpenSans-Bold.ttf');
        $font->size($temp1['name']['s']);
        $font->color('#eb4234');
        $font->align('center');
    });
$center_x = $img->width() / 2;
$center_y = ($img->height() / 2) + $temp1['desc']['y'];
$max_len = 46;
$font_size = $temp1['desc']['s'];
$font_height = 25;
$lines = explode("\n", wordwrap($c_text, $max_len));
$y = $center_y - ((count($lines) - 1) * $font_height);
foreach ($lines as $line) {
    $img->text($line, $center_x, $y, function ($font) use ($font_size) {
        $font->file('fonts/os/OpenSans-Regular.ttf');
        $font->size(42);
        $font->color('#333');
        $font->align('center');
    });
    $y += $font_height * 2;
}
$img->save("cert.jpg");
$fp = fopen("cert.jpg", 'rb');

// send the right headers
//header("Content-Type: image/png");
// dump the picture and stop the script
//fpassthru($fp);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DSC Certificate Generator</title>
    <style>
        @font-face {
            font-family: "Os";
            src: url("./fonts/os/OpenSans-Regular.ttf");
        }

        * {
            font-family: "Os" !important;
        }
    </style>
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
    <style>
        .temp {
            border: 2px solid #333;
            width: 250px;
            height: 170px;
            position: relative;
            overflow: hidden;
        }

        .temp .radio {
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: 50;
            left: 0;
            right: 0;
            opacity: 0;
        }

        .active {
            border-color: dodgerblue;
        }

    </style>
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
        <div class="d-flex align-center">
            <img style="width: 45px;height: 35px"
                 class="mr-2"
                 src="assets/logo.png" alt="">
            <h4>DSC Certificate Maker</h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <p>This is an Open Source Project To help The <a href="https://g.co/dev/dsc">DSC</a> Leaders generate
            Certificates for Their Students Easily,<br>
            Please feel free to submit a new design to add to the project, Made with <span
                    class="mdi mdi-heart text-danger"></span> by Youssef Mahmoud</p>
    </div>
    <div class="ro">
        <div class="col-md-12">
            <form method="post" action="" class="form row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="temp">Choose Template</label>
                        <div class="templates">
                            <div class="temp">
                                <img style="width: 100%;height: 100%;" src="ex/t1.png" alt="">
                                <input required class="radio" type="radio" name="temp" value="1">
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


