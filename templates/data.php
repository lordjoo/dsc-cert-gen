<?php
$temp1 = [
    "branch" => [
        "x" => 935,
        "y" => 393,
        "s" => 52,
        "a"=>'left',
        "c"=>"#545454",
        "f"=>"fonts/os/OpenSans-SemiBold.ttf"
    ],
    "title" => [
        "x" => 1000,
        "y" => 500,
        "s" => 72,
        "c"=>"#eb4234",
        "f" => "fonts/os/OpenSans-Bold.ttf",
        "a"=>"center",
    ],
    "name" => [
        "x" => 1000,
        "y" => 750,
        "s" => 92,
        "c"=>"#eb4234",
        "f" => "fonts/os/OpenSans-Bold.ttf",
        "a"=>"center",
    ],
    "desc" => [
        "y" => 200,
        "s" => 42,
        "c"=>"#333",
        "f" => "fonts/os/OpenSans-Regular.ttf",
        "a"=>"center",
        "max_len"=>67,
    ],
    "have_sig"=>false,
    "date"=> [
        "x" => 1000,
        "y" => 1400,
        "s" => 32,
        "c"=>"#000",
        "f" => "fonts/os/OpenSans-Regular.ttf",
        "a"=>"center",
    ]
];
$temp3 = [
    "branch" => [
        "x" => 1235,
        "y" => 360,
        "s" => 35,
        "a"=>"center",
        "c"=>"#000",
        "f"=>"fonts/os/OpenSans-Light.ttf",
        "full_name"=>true,
    ],
    "title" => [
        "a"=>"center",
        "x" => 1300,
        "y" => 550,
        "s" => 62,
        "c"=>"#7e6b73",
        "f" => "fonts/os/OpenSans-SemiBold.ttf"
    ],
    "name" => [
        "x" => 1300,
        "y" => 680,
        "s" => 92,
        "f" => "fonts/os/OpenSans-Bold.ttf",
        "a"=>"center",
        "c" => "#eb4234"
    ],
    "desc" => [
        "y" => 100,
        "x" => 1300,
        "max_len"=>35,
        "s" => 50,
        "c"=>"#333",
        "f" => "fonts/os/OpenSans-Regular.ttf",
        "a"=>"center",
    ],
    "have_sig"=>true,
    "sig"=>[
        "x" => 1550,
        "y" => 1185,
        "s" => 38,
        "f" => "fonts/ad/ArchitectsDaughter.ttf",
        "a"=>"center",
        "c" => "#333"
    ],
    "sig_r"=>[
        "x" => 1550,
        "y" => 1245,
        "s" => 32,
        "c" => "#eb4234",
        "f" => "fonts/os/OpenSans-SemiBold.ttf",
        "a"=>"center",
    ],
    "date"=> [
        "x" => 450,
        "y" => 1320,
        "s" => 32,
        "c"=>"#000",
        "f" => "fonts/os/OpenSans-Regular.ttf",
        "a"=>"center",
    ],
];
return [
    "t1" => $temp1,
    "t2" => [
        "date"=> [
            "x" => 400,
            "y" => 1400,
            "s" => 32,
            "c"=>"#000",
            "f" => "fonts/os/OpenSans-Regular.ttf",
            "a"=>"center",
        ],
        "branch" => [
                "x" => 1000,
                "y" => 300,
                "s" => 35,
                "a"=>"center",
                "c"=>"#000",
                "f"=>"fonts/os/OpenSans-Light.ttf"
            ],
        "title" => [
                "a"=>"center",
                "x" => 1000,
                "y" => 450,
                "s" => 72,
                "c"=>"#eb4234",
                "f" => "fonts/kl/Kollektif-Bold.ttf"
            ],
        "name" => [
                "x" => 1000,
                "y" => 750,
                "s" => 92,
                "f" => "fonts/os/OpenSans-SemiBold.ttf",
                "a"=>"center",
                "c" => "#000"
            ],
        "desc" => [
            "y" => 230,
            "max_len"=>70,
            "s" => 30,
            "c"=>"#333",
            "f" => "fonts/os/OpenSans-Regular.ttf",
            "a"=>"center",
        ],
        "have_sig"=>true,
        "sig"=>[
            "x" => 1000,
            "y" => 1250,
            "s" => 38,
            "f" => "fonts/ad/ArchitectsDaughter.ttf",
            "a"=>"center",
            "c" => "#333"
        ],
        "sig_r"=>[
            "x" => 1000,
            "y" => 1315,
            "s" => 32,
            "c"=>"#00568c",
            "f" => "fonts/os/OpenSans-Bold.ttf",
            "a"=>"center",
        ]
    ],
    "t3" => $temp3,
    "ct" => [
        "name" => [
            "x" => 145,
            "y" => 255,
            "s" => 25,
            "f" => "fonts/roboto/Roboto-Regular.ttf",
            "c" => "#333"
        ],
        "desc" => [
            "y" => 30,
            "x"=>145,
            "s" => 15,
            "max_len"=>73,
            "font_height"=>10,
            "c"=>"#333",
            "f" => "fonts/os/OpenSans-Regular.ttf",
            //"a"=>"center",
        ],
        "have_sig"=>true,
        "sig"=>[
            "x" => 155,
            "y" => 388,
            "s" => 25,
            "f" => "fonts/sig.ttf",
            "c" => "#333"
        ],
        "sig_r"=>[
            "x" => 145,
            "y" => 432,
            "s" => 13,
            "c"=>"#333",
            "f" => "fonts/roboto/Roboto-Regular.ttf",
        ]
    ],
];