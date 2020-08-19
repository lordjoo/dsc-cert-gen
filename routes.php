<?php

return [
    [
        "url"=>"/",
        "method"=>"get",
        "call"=>"viewHome",
    ],
    [
        "url"=>"/",
        "method"=>"post",
        "call"=>"postCert",
    ],
    [
        "url"=>"/ct19",
        "method"=>"get",
        "call"=>"coreTeamPage",
    ],
    [
        "url"=>"/ct19",
        "method"=>"post",
        "call"=>"makeCT",
    ],
    [
        "url"=>"/ct19/lg",
        "method"=>"get",
        "call"=>"logLeadPage",
    ],
    [
        "url"=>"/ct19/lg",
        "method"=>"post",
        "call"=>"leadLogin",
    ],


];