<?php

use Intervention\Image\ImageManagerStatic as Image;
function makeCert($data) {
    $img = Image::make('templates/'.$data['temp'].'.png');
    $branch = $data['branch'];
    $c_title = $data['title'];
    $c_name = $data['name'];
    $c_text = $data['desc'];
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
    header('Content-Disposition: attachment; filename="'.$data['name'].'.png"');
    echo $img->response('png', 100);
    return true;
}