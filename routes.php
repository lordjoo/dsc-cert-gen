<?php

return [
    [
        "url"=>"/",
        "method"=>"get",
        "call"=>"PagesController@home",
    ],
    [
        "url"=>"/",
        "method"=>"post",
        "call"=>"CertificateController@postCert",
    ],
    [
        "url"=>"/ct19",
        "method"=>"get",
        "call"=>"PagesController@maintain",
    ],
    [
        "url"=>"/ct19",
        "method"=>"post",
        "call"=>"PagesController@maintain",
//        "call"=>"makeCT",
    ],
    [
        "url"=>"/ct19/lg",
        "method"=>"get",
        "call"=>"PagesController@maintain",
//        "call"=>"logLeadPage",
    ],
    [
        "url"=>"/ct19/lg",
        "method"=>"post",
        "call"=>"PagesController@maintain",
//        "call"=>"leadLogin",
    ],
    [
        "url"=>"/lead",
        "method"=>"get",
        "call"=>"PagesController@maintain",
//        "call"=>"leadLogin",
    ],


];