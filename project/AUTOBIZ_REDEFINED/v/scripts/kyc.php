<?php

$kyc_info = $portal_instance->kyc_info_all();
$check_if_step_is_saved = $kyc_info['step_one_save']['status'];

var_export($check_if_step_is_saved);
$check_if_user_has_account = $kyc_info['has_account'];
$check_if_user_has_done_bvn = $kyc_info['has_done_bvn']['status'];
$check_if_user_has_done_nin = $kyc_info['has_done_nin']['status'];
$nin_skipped = $kyc_info['nin_skipped']['data']['message'];
$bvn_skipped = $kyc_info['bvn_skipped']['data']['message'];
$verification_display = $kyc_info['display'];
$bvn_rate_limit =  $kyc_info['bvn_rate_limit'];
$nin_rate_limit =  $kyc_info['nin_rate_limit'];
$kyc_verified = $kyc_info['kyc_verified'];
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <?php
            if ($kyc_verified == "yes") { ?>
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-12">
                    <div id="general" style="padding:50px;" class="card border-left-success shadow h-100 py-2">
                        <?php if (!$check_if_step_is_saved) { ?>
                            <div id="first" style="padding: 40px;">
                                <h4 style="margin-bottom: 30px;">Platform General KYC</h4>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                               placeholder="Enter Your First Name">
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                               placeholder="Enter Your Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob" placeholder="">
                                    </div>

                                    <button type="submit" id="step_one" name="submit_step_one"
                                            onclick="return save_step_one_kyc();" class="btn btn-primary">Submit Step
                                        One
                                    </button>
                                </form>
                                <!-- Button 2: Show Form -->
                            </div>

                        <?php } elseif (!$check_if_user_has_done_nin && $nin_skipped == "no" && ($verification_display == "nin" || $verification_display =="nin_bvn")) { ?>

                            <div id="nin" style="margin-top: 50px; display: block">
                                <!-- Form -->
                                <div class="row">
                                    <div style="padding: 30px;" class="col-lg-6">
                                        <div>
                                            <h2>Why Verify Your NIN with Us:</h2>
                                            <ol>
                                                <li>
                                                    <h3>Enhanced Security:</h3>
                                                    <p>Protect your account with an additional layer of identity
                                                        verification.</p>
                                                    <p>Ensure a secure and trustworthy experience on our platform.</p>
                                                </li>

                                                <li>
                                                    <h3>Fraud Prevention:</h3>
                                                    <p>Safeguard against identity theft and fraudulent activities.</p>
                                                    <p>BVN verification helps us verify your identity, reducing the risk
                                                        of unauthorized access.</p>
                                                </li>

                                            </ol>

                                            <p><strong>Secure your account today — Verify your BVN for a safer online
                                                    experience.</strong></p>
                                        </div>

                                    </div>

                                    <div style="padding: 20px;  margin-top: 20px"
                                         class="card border-left-success shadow h-100 py-2 col-lg-6">

                                        <div style="padding: 50px;" class="form-container">
                                            <form method="post">
                                                <h4>Fill in your NIN Details</h4>
                                                <div class="form-group">
                                                    <label>NIN Name</label>
                                                    <input type="text" id="nin_name" class="form-control"
                                                           name="nin_name" placeholder="Enter your valid NIN Name">
                                                </div>

                                                <div class="form-group">
                                                    <label>NIN Number</label>
                                                    <input type="number" id="nin_number" class="form-control"
                                                           name="nin_number" placeholder="Enter your valid NIN Number">
                                                </div>

                                                <div class="form-group">
                                                    <label>NIN Phone Number</label>
                                                    <input type="number" id="nin_mobile" class="form-control"
                                                           name="nin_mobile"
                                                           placeholder="Enter your valid NIN Phone Number">
                                                </div>

                                                <div class="form-group">
                                                    <label>NIN Date Of Birth</label>
                                                    <input type="date" id="nin_dob" class="form-control" name="nin_dob"
                                                           placeholder="Enter your valid Date of Birth">
                                                </div>

                                                <button type="button" name="submit_nin" id="verify_nin"
                                                        onclick="return verify_user_nin();" class="btn btn-primary">
                                                    Validate Account With NIN
                                                </button>

                                                <button type="button" onclick="return skip_to_bvn();"
                                                        class="btn btn-primary">Skip
                                                </button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        <?php } elseif ((!$check_if_user_has_done_nin && ($nin_skipped == "yes" || $nin_skipped=="no")  && $bvn_skipped == "no" && !$check_if_user_has_done_bvn && (($verification_display =="bvn" ||  $verification_display =="nin_bvn")) || ( $check_if_user_has_done_nin &&  ($verification_display =="bvn" ||  $verification_display =="nin_bvn")) && $bvn_skipped=="no" && !$check_if_user_has_done_bvn)) { ?>
                            <div style="margin-top: 50px">
                                <!-- Form -->
                                <div class="row">
                                    <div style="padding: 30px;" class="col-lg-6">
                                        <div>
                                            <h2>Why Verify Your BVN with Us:</h2>
                                            <ol>
                                                <li>
                                                    <h3>Enhanced Security:</h3>
                                                    <p>Protect your account with an additional layer of identity
                                                        verification.</p>
                                                    <p>Ensure a secure and trustworthy experience on our platform.</p>
                                                </li>

                                                <li>
                                                    <h3>Fraud Prevention:</h3>
                                                    <p>Safeguard against identity theft and fraudulent activities.</p>
                                                    <p>BVN verification helps us verify your identity, reducing the risk
                                                        of unauthorized access.</p>
                                                </li>

                                            </ol>

                                            <p><strong>Secure your account today — Verify your BVN for a safer online
                                                    experience.</strong></p>
                                        </div>

                                    </div>

                                    <div style="padding: 20px;  margin-top: 20px"
                                         class="card border-left-success shadow h-100 py-2 col-lg-6">

                                        <div class="form-container">
                                            <form method="post">
                                                <h4>Fill in your BVN Details</h4>
                                                <div class="form-group">
                                                    <label>BVN Name</label>
                                                    <input type="text" id="bvn_name" class="form-control"
                                                           name="bvn_name" placeholder="Enter your valid BVN Name">
                                                </div>

                                                <div class="form-group">
                                                    <label>BVN Number</label>
                                                    <input type="number" id="bvn_number" class="form-control"
                                                           name="bvn_number" placeholder="Enter your valid BVN Number">
                                                </div>

                                                <div class="form-group">
                                                    <label>BVN Phone Number</label>
                                                    <input type="number" id="bvn_mobile" class="form-control"
                                                           name="bvn_mobile"
                                                           placeholder="Enter your valid BVN Phone Number">
                                                </div>

                                                <div class="form-group">
                                                    <label>BVN Date Of Birth</label>
                                                    <input type="date" id="bvn_dob" class="form-control" name="bvn_dob"
                                                           placeholder="Enter your valid Date of Birth">
                                                </div>

                                                <button type="button" name="submit_bvn" id="verify_bvn"
                                                        onclick="return verify_user_bvn();" class="btn btn-primary">
                                                    Verify BVN
                                                </button>

                                                <button type="button" onclick="return skip_bvn();"
                                                        class="btn btn-primary">Skip
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } elseif (!$check_if_user_has_done_nin && !$check_if_user_has_done_bvn && ($nin_skipped == "yes" || $bvn_skipped == "yes" || $verification_display=="nin" || $verification_display=="nin_bvn" || $verification_display="bvn") ) { ?>
                            <h6>KYC Completion Page</h6>
                            <p>KYC Verification Failed, Please Try Again</p>
                            <button type="button" id="try_again" onclick="return try_again();" class="btn btn-danger">Try Again</button>
                        <?php } elseif ($check_if_user_has_account && ($check_if_user_has_done_nin || $check_if_user_has_done_bvn)) { ?>
                            <?php if($check_if_user_has_done_nin && !$check_if_user_has_done_bvn) { ?>
                                <div>
                                    <h6>KYC Completion Page</h6>
                                    <p>KYC Verification Successful</p>
                                    <input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                    <button type="button" id="validate_bvn" onclick="return link_nin_to_account();" class="btn btn-dark btn-sm">
                                        Click here to Link  NIN to your account
                                    </button>
                                </div>

                            <?php }  else { ?>
                                <div>
                                    <h6>KYC Completion Page</h6>
                                    <p>KYC Verification Successful</p>
                                    <input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                    <button type="button" id="validate_bvn" onclick="return link_bvn_to_account();" class="btn btn-dark btn-sm">
                                        Click here to Link  BVN to your account
                                    </button>
                                </div>
                            <?php } ?>
                        <?php } elseif (!$check_if_user_has_account && ($check_if_user_has_done_nin || $check_if_user_has_done_bvn)) { ?>
                            <h6>KYC Completion Page</h6>
                            <p>KYC Verification Successful</p>
                            <input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <button id="create_account" onclick="return create_user_account();" class="btn btn-success">Click here to Generate Account Number</button>
                        <?php } ?>

                        <?php } elseif ($kyc_verified == "no" && $portal_instance->CheckDistributor()) { ?>
                            <div class="row">
                                <div class="col-xl-12 col-md-12 mb-12">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-uppercase mb-1"
                                                         style="color: #000; font-size: 16px"><h1>KYC System Activation
                                                            Required Today for Enhanced Security</h1></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                         style="display: none"></div>
                                                </div>
                                            </div>

                                            <div>
                                                <h3>Dear Clients,</h3>
                                                <p>We hope this message finds you well. In adherence to the Central Bank
                                                    of Nigeria's (CBN) KYC directive, we are implementing the KYC system
                                                    today.

                                                <h3>Advantages of KYC Implementation:</h3>
                                                <p><strong>Fraud Prevention:</strong> KYC adds a crucial layer of
                                                    security, preventing fraudulent activities.<br/>
                                                <p><strong>Enhanced Security:</strong> Your information is safer,
                                                    fostering trust and confidence in our services.<br/>
                                                <p><strong>Compliance:</strong> We're aligning with regulatory standards
                                                    to ensure a stable financial ecosystem.<br/>
                                                <p><strong>Streamlined User Experience:</strong> KYC makes onboarding
                                                    and verification faster and more convenient.<br/>

                                                <h2>Activation Today</h2>
                                                <p>We are implementing KYC today. To enjoy these benefits, a one-time
                                                    fee of N20,000 is required. This covers the cost of deploying and
                                                    maintaining this advanced security feature.

                                                <h3>Payment Details:</h3>
                                                <strong>Bank:</strong> Moniepoint MFB<br/>
                                                <strong>Account Name:</strong> Autobiz.app<br/>
                                                <strong>Account Number:</strong> 4418512196<br/>

                                                <h4>Your prompt payment ensures uninterrupted access to our secure
                                                    services.</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } elseif ($kyc_verified == "no" && !$portal_instance->checkDistributor()) { ?>
                            <div class="row">
                                <div class="col-xl-12 col-md-12 mb-12">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-uppercase mb-1"
                                                         style="color: #000; font-size: 16px"><h2>KYC System Activation
                                                            Required Today for Enhanced Security</h2></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"
                                                         style="display: none"></div>
                                                </div>
                                            </div>
                                            <h3 style="margin-top: 100px" class="text-center">Coming Soon</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>