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
];

return [
    "t1" => $temp1,
    "t2" => [
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
    ]
];