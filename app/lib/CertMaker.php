<?php
namespace App\lib;

use Intervention\Image\ImageManagerStatic as Image;

class CertMaker
{

    public static function normal($data) {
        $temps = require __DIR__ . "/../../templates/data.php";
        $img = Image::make('templates/'.$data['temp'].'.png');
        $center_x = $img->width() / 2;
        $branch = $data['branch'];
        $c_title = $data['title'];
        $c_name = $data['name'];
        $c_text = $data['desc'];
        $temp1 = $temps[$data['temp']];
        if (!$temp1['branch']['full_name']){
            // Branch Text
            $img->text($branch,
                $temp1['branch']['x'],
                $temp1['branch']['y'],
                function ($font) use ($temp1) {
                    $font->file($temp1['branch']['f']);
                    $font->size($temp1['branch']['s']);
                    $font->color($temp1['branch']['c']);
                    $font->align($temp1['branch']['a']);
                });
        }
        else {
            $center_y = $temp1['branch']['y'];
            $max_len = $temp1['branch']['max_len'] ?? 23;
            $font_size = $temp1['branch']['s'];
            $font_height = 25;
            $lines = explode("\n", wordwrap("Developer Student Clubs ".$branch, $max_len));
            $y = $center_y - ((count($lines) - 1) * $font_height);
            foreach ($lines as $line) {
                $img->text($line, $temp1['branch']['x'], $y, function ($font) use ($font_size,$temp1) {
                    $font->size($temp1['branch']['s']);
                    $font->color($temp1['branch']['c']);
                    $font->align($temp1['branch']['a']);
                    $font->file($temp1['branch']['f']);
                });
                $y += $font_height * 2;
            }
        }

        // Certificate Title
        $img->text($c_title,
            $temp1['title']['x'], $temp1['title']['y'], function ($font) use ($temp1) {
                $font->size($temp1['title']['s']);
                $font->color($temp1['title']['c']);
                $font->align($temp1['title']['a']);
                $font->file($temp1['title']['f']);
            });

        //  Student Name Text
        $img->text($c_name,
            $temp1['name']['x'], $temp1['name']['y'], function ($font) use ($temp1) {
                $font->size($temp1['name']['s']);
                $font->color($temp1['name']['c']);
                $font->align($temp1['name']['a']);
                $font->file($temp1['name']['f']);
            });


        // Certificate Date
        $img->text('Issued at '.date('d,M Y'),
            $temp1['date']['x'], $temp1['date']['y'], function ($font) use ($temp1) {
                $font->size($temp1['date']['s']);
                $font->color($temp1['date']['c']);
                $font->align($temp1['date']['a']);
                $font->file($temp1['date']['f']);
            });


        // Certificate Info
        $center_y = ($img->height() / 2) + $temp1['desc']['y'];
        $max_len = $temp1['desc']['max_len'] ?? '46';
        $font_size = $temp1['desc']['s'];
        $font_height = 25;
        if (isset($temp1['desc']['x']))
            $center_x = $temp1['desc']['x'];
        $lines = explode("\n", wordwrap($c_text, $max_len));
        $y = $center_y - ((count($lines) - 1) * $font_height);
        foreach ($lines as $line) {
            $img->text($line, $center_x, $y, function ($font) use ($font_size,$temp1) {
                $font->size($temp1['desc']['s']);
                $font->color($temp1['desc']['c']);
                $font->align($temp1['desc']['a']);
                $font->file($temp1['desc']['f']);
            });
            $y += $font_height * 2;
        }

        if ($temp1['have_sig']){
            $img->text($data['lead_sig'],
                $temp1['sig']['x'], $temp1['sig']['y'], function ($font) use ($temp1) {
                    $font->size($temp1['sig']['s']);
                    $font->color($temp1['sig']['c']);
                    $font->align($temp1['sig']['a']);
                    $font->file($temp1['sig']['f']);
                });
            if ($temp1['branch']['full_name'])
                $branch = "DSC ".$branch;
            $img->text(strtoupper($branch)." LEADER",
                $temp1['sig_r']['x'], $temp1['sig_r']['y'], function ($font) use ($temp1) {
                    $font->size($temp1['sig_r']['s']);
                    $font->color($temp1['sig_r']['c']);
                    $font->align($temp1['sig_r']['a']);
                    $font->file($temp1['sig_r']['f']);
                });

        }

        header('Content-Disposition: attachment; filename="'.$data['name'].'.png"');
        echo $img->response('png', 100);
        return true;
    }


    public static function coreTeam($data) {
        $temps = require __DIR__ . "/../../templates/data.php";
        $img = Image::make(__DIR__ . '/../templates/' .$data['temp'].'.png');
        $center_x = $img->width() / 2;
        $univ = $data['univ'];
        $name = $data['name'];
        $lead = $data['lead'];
        $temp1 = $temps['ct'];


        if ($temp1['name']){
            $img->text(strtoupper($name),
                $temp1['name']['x'],
                $temp1['name']['y'],
                function ($font) use ($temp1) {
                    $font->file($temp1['name']['f']);
                    $font->size($temp1['name']['s']);
                    $font->color($temp1['name']['c']);
                    $font->align($temp1['name']['a']);
                });
        }

        // Certificate Info
        $text = "is hereby awarded this Certificate of Appreciation for successfully serving as a Developer Student Club Core Team Member at $univ from 2019 - 2020.";
        $center_y = ($img->height() / 2) + $temp1['desc']['y'];
        $max_len = $temp1['desc']['max_len'] ?? '46';
        $font_size = $temp1['desc']['s'];
        $font_height = $temp1['desc']['font_height'] ?: 25;
        if (isset($temp1['desc']['x']))
            $center_x = $temp1['desc']['x'];
        $lines = explode("\n", wordwrap($text, $max_len));
        $y = $center_y - ((count($lines) - 1) * $font_height);
        foreach ($lines as $line) {
            $img->text($line, $center_x, $y, function ($font) use ($font_size,$temp1) {
                $font->size($temp1['desc']['s']);
                $font->color($temp1['desc']['c']);
                $font->align($temp1['desc']['a']);
                $font->file($temp1['desc']['f']);
            });
            $y += $font_height * 2;
        }

        if ($temp1['have_sig']){
            $img->text("$lead",
                $temp1['sig']['x'], $temp1['sig']['y'], function ($font) use ($temp1) {
                    $font->size($temp1['sig']['s']);
                    $font->color($temp1['sig']['c']);
                    $font->align($temp1['sig']['a']);
                    $font->file($temp1['sig']['f']);
                });

            $img->text(strtoupper($univ),
                $temp1['sig_r']['x'], $temp1['sig_r']['y'], function ($font) use ($temp1) {
                    $font->size($temp1['sig_r']['s']);
                    $font->color($temp1['sig_r']['c']);
                    $font->align($temp1['sig_r']['a']);
                    $font->file($temp1['sig_r']['f']);
                });

        }

        header('Content-Disposition: attachment; filename="'.$data['name'].'.png"');
        echo $img->response('png', 100);
        return true;
    }

}