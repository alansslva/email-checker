<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 11/12/17
 * Time: 14:11
 */

require 'vendor/autoload.php';

$email          = $_GET['email-verify'];
$source_email   = $_GET['source-email'];
$port           = $_GET['source-port'];

$ve = new hbattat\VerifyEmail($email, $source_email, $port);

$email_arr = explode('@', $email);
if(in_array(strtolower($email_arr[1]),['yahoo.com'])) {

    if ($ve->verify()){

        echo '<pre>';
        print_r($ve->get_errors());
        echo '</pre>';

        echo '<pre>';
        print_r($ve->get_debug());
        echo '</pre>';


        if(array_key_exists('EMAIL_FOUNDED', $ve->get_debug())){
            if($ve->get_debug()['EMAIL_FOUNDED'] == true){
                echo 1;
            }
        }else{
            echo 0;
        }

    }else{

        echo '<pre>';
        print_r($ve->get_errors());
        echo '</pre>';

        echo '<pre>';
        print_r($ve->get_debug());
        echo '</pre>';

    }

}else{


    echo '<pre>';
    print_r($ve->get_errors());
    echo '</pre>';

    echo '<pre>';
    print_r($ve->get_debug());
    echo '</pre>';


}





