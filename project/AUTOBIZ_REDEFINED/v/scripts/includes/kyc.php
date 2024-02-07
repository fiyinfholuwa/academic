<?php
//
//$user_data = new user($_SESSION['user_id'], $database);
//$website_data = new website($_SESSION['site'], $database);
//$general_functions = new general_functions($database);
//$distributor = new distributor($database);
//$get_bvn_rate_limit =  $distributor->setting("verification_rate_limit");
//$get_nin_rate_limit = $distributor->setting("verification_rate_limit_nin");
//
//$bvn_rate_limit = !empty($get_bvn_rate_limit) ? $get_nin_rate_limit : 1;
//$nin_rate_limit = !empty($get_nin_rate_limit) ? $get_nin_rate_limit : 1;
//
//if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'save_step_one_kyc'){
//
//    $first_name = general_functions::sanitize($_REQUEST['first_name']);
//    $last_name = general_functions::sanitize($_REQUEST['last_name']);
//    $dob = general_functions::sanitize($_REQUEST['dob']);
//    $kyc_instance = new kyc($database);
//    $data = array(
//        'first_name' => $first_name,
//        'last_name' => $last_name,
//        'dob' => $dob
//    );
//    $result = $kyc_instance->save_kyc_step_one($data);
//    if($result){
//        $message = "kyc step one saved";
//        echo $message;
//    }else{
//        $message = "kyc step one not saved";
//        echo $message;
//    }
//}
//
//if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'verify_bvn'){
//    $bvn_name = strtolower(general_functions::sanitize($_REQUEST['bvn_name']));
//    $bvn_mobile = general_functions::sanitize($_REQUEST['bvn_mobile']);
//    $bvn_dob = general_functions::sanitize($_REQUEST['bvn_dob']);
//    $bvn_number = general_functions::sanitize($_REQUEST['bvn_number']);
//    $kyc_instance = new kyc($database);
//    $data = array(
//        'bvn_name' => $bvn_name,
//        'bvn_mobile' => $bvn_mobile,
//        'bvn_dob' => $bvn_dob,
//        'bvn_number' => $bvn_number
//    );
//    $kyc_details = $kyc_instance->get_kyc_details();
//    $first_name = strtolower(encryptor::decryptText($kyc_details['first_name']));
//    $last_name = strtolower(encryptor::decryptText($kyc_details['last_name'])) ;
//    if ($kyc_instance->check_bvn_rate_limit() >= $bvn_rate_limit){
//        echo "You have exceeded your daily bvn verification limit, please try again later";
//    }else{
//        if (strpos($bvn_name, $first_name) !== false || strpos($bvn_name, $last_name) !== false) {
//            $result = $kyc_instance->verify_bvn($data);
//            $kyc_instance->update_bvn_rate_limit();
//            if($result=="Verified Successfully"){
//                $message = "BVN Verified";
//                echo $message;
//            }else{
//                $message = $result;
//                echo $message;
//            }
//        }else{
//            echo "Supplied Name doesnt match your previous information.";
//        }
//    }
//}
//
//if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'verify_nin') {
//    $nin_name = strtolower(general_functions::sanitize($_REQUEST['nin_name']));
//    $nin_mobile = general_functions::sanitize($_REQUEST['nin_mobile']);
//    $nin_dob = general_functions::sanitize($_REQUEST['nin_dob']);
//    $nin_number = general_functions::sanitize($_REQUEST['nin_number']);
//    $kyc_instance = new kyc($database);
//    $kyc_details = $kyc_instance->get_kyc_details();
//
//    $first_name = strtolower(encryptor::decryptText($kyc_details['first_name']));
//    $last_name = strtolower(encryptor::decryptText($kyc_details['last_name']));
//    if($kyc_instance->check_nin_rate_limit() >= $nin_rate_limit){
//        echo "You have exceeded your daily nin verification limit, please try again later";
//    }else{
//        if (strpos($nin_name, $first_name) !== false || strpos($nin_name, $last_name) !== false) {
//            $update_user_nin = $kyc_instance->save_user_nin_pending($nin_name, $nin_mobile, $nin_dob, $nin_number);
//            if ($update_user_nin > 0) {
//                $result = $kyc_instance->verify_nin($nin_number);
//                $kyc_instance->update_nin_rate_limit();
//                if ($result == "NIN Verification done") {
//                    $kyc_instance->update_user_nin_to_done();
//                    echo "NIN Verified";
//                } else {
//                    $kyc_instance->reverse_user_nin_to_null();
//                    echo $result;
//                }
//            } else {
//                echo "Error Occured";
//            }
//        } else {
//            echo "Supplied Name doesnt match your previous information.";
//        }
//    }
//}
//
//if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'create_user_account'){
//    $kyc_instance = new kyc($database);
//    $user_id = general_functions::sanitize($_REQUEST['user_id']);
//    $result = $kyc_instance->create_account_number($user_id);
//    if($result){
//        echo "Account Number successfully generated.";
//    }else{
//        echo "Account Number not generated, Please try again.";
//    }
//
//}
//
//
//
//if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'link_bvn_to_account'){
//    $kyc_instance = new kyc($database);
//    $user_id = general_functions::sanitize($_REQUEST['user_id']);
//    echo $kyc_instance->validate_kyc_for_user($user_id, "bvn");
//}
//if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'link_nin_to_account'){
//    $kyc_instance = new kyc($database);
//    $user_id = general_functions::sanitize($_REQUEST['user_id']);
//    echo $kyc_instance->validate_kyc_for_user($user_id, "nin");
//}
if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'skip_to_bvn'){
    echo  $portal_instance->update_nin_skipped("yes");
}
if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'skip_bvn'){
   echo $portal_instance->update_bvn_skipped("yes");
}
if ($_REQUEST['source'] == "ajax" && $_REQUEST['type'] == 'try_again'){
    echo $portal_instance->try_again();
}





?>

