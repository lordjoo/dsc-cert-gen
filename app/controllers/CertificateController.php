<?php


use App\lib\CertMaker;

class CertificateController
{

    public function postCert(){
        if (isset($_POST['branch'])){
            $data = [
                "temp"=>"t".$_POST['temp'],
                "branch"=>$_POST['branch'],
                "name"=>$_POST['c_name'],
                "title"=>$_POST['c_title'],
                "desc"=>$_POST['c_desc'],
                "lead_sig"=>$_POST['lead'],
            ];
            CertMaker::normal($data);
        }
    }

}