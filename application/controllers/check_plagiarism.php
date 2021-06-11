<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "GoogleTranslate.php";

class check_plagiarism extends CI_Controller {

    public function check_file($your_word)
    {

        $url = 'https://smallseotools.com/api/info'; 
        $ch = curl_init ($url);

        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array('key' => '63b83187ba3dfea7c7bda80ae8552fc6', 'data' => $your_word));
        $result = curl_exec($ch);

        echo var_dump($result);
        curl_close($ch);
        
    }
}
