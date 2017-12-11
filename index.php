<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 11/12/17
 * Time: 14:11
 */

require 'vendor/autoload.php';

$email = $_GET['email-verify'];

$ve = new hbattat\VerifyEmail($email, 'alan@prismasolucao.com.br');
echo '<pre>';
var_dump($ve->verify());
echo '</pre>';
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


