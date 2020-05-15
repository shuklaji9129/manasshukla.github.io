<?php
$firstname = $_REQUEST['first name'];
$secondname = $_REQUEST['second name'];
$lastname = $_REQUEST['last name'];
$gender = $_REQUEST['g'];
$dob = $_REQUEST['dob'];
$mob = $_REQUEST['mobile number'];
$address = $_REQUEST['address'];
$state = $_REQUEST['state'];
$pincode = $_REQUEST['pincode'];
$email = $_REQUEST['email'];
$aadhar = $_REQUEST['aadhar_number'];
$pan = $_REQUEST['pan_number'];
$id = $_REQUEST['idtype'];

//check input fields
if (empty($firstname) || 
    empty($secondname) || 
    empty($lastname) ||
    empty($dob) ||
    empty($mob) ||
    empty($address) ||
    empty($state) ||
    empty($pincode) ||
    empty($email) ||
    empty($aadhar) ||
    empty($pan))
    {
        echo "please fill all the fields";
    }
else{
    mail("manasofdata@gmail.com", "Micspay id Creation Data",$firstname & $secondname & $lastname & $gender & $dob & $mob &
      $address & $state & $pincode & $email & $aadhar & $pan & $id, );
    

    }
    

?>