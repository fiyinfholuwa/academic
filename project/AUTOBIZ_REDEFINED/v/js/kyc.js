function save_step_one_kyc(){
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var dob = $('#dob').val();
    document.getElementById('step_one').innerHTML = 'Please Wait...';
    if (first_name === '' && last_name === '' && dob === '') {
        document.getElementById('step_one').innerHTML = 'Submit Step One';
        bootbox.alert("Please fill in all required fields.");
        return false;
    }
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc", first_name:first_name, last_name:last_name, dob:dob,  source:"ajax" , type :"save_step_one_kyc"})
        .done(function( data )
        {
            myApp.hidePleaseWait();
            bootbox.alert(data);
            setTimeout(function(){
                window.location.reload();
            }, 5000);
            return false;
        });
    return false;
}

function show_verify_nin() {
    alert('This feature is not available yet, check back later');
}

function show_verify_bvn() {
    // Show the form container
    $('#formContainer').show();
}

function verify_user_bvn(){
    var bvn_name = $('#bvn_name').val();
    var bvn_number = $('#bvn_number').val();
    var bvn_dob = $('#bvn_dob').val();
    var bvn_mobile = $('#bvn_mobile').val();
    document.getElementById('verify_bvn').innerHTML = 'Please Wait...';
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc", bvn_name:bvn_name, bvn_number:bvn_number, bvn_dob:bvn_dob, bvn_mobile: bvn_mobile,  source:"ajax" , type :"verify_bvn"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                window.location.reload();
            }, 5000);
            return false;

        });
    return false;
}
function verify_user_nin(){
    var nin_name = $('#nin_name').val();
    var nin_number = $('#nin_number').val();
    var nin_dob = $('#nin_dob').val();
    var nin_mobile = $('#nin_mobile').val();
    document.getElementById('verify_nin').innerHTML = 'Please Wait...';
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc", nin_name:nin_name, nin_number:nin_number, nin_dob:nin_dob, nin_mobile: nin_mobile,  source:"ajax" , type :"verify_nin"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                window.location.reload();
            }, 5000);
            return false;
        });
    return false;
}


function skip_to_bvn() {
    var sendURL = window.location.protocol + "//" + window.location.host + "/v/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc",  source:"ajax" , type :"skip_to_bvn"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                window.location.reload();
            }, 5000);
            return false;
        });
    return false;
}


function skip_bvn() {
    var sendURL = window.location.protocol + "//" + window.location.host + "/v/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc",  source:"ajax" , type :"skip_bvn"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                window.location.reload();
            }, 5000);
            return false;
        });
    return false;
}

function try_again() {
    var sendURL = window.location.protocol + "//" + window.location.host + "/v/scripts/short_queries.php";
    document.getElementById('try_again').innerHTML = 'Please Wait...';
    $.get( sendURL, { app:"kyc",  source:"ajax" , type :"try_again"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                window.location.reload();
            }, 5000);
            return false;
        });
    return false;
}



function check_page_to_load(callback) {
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";

    $.get(sendURL, { app: "kyc", source: "ajax", type: "check_page_to_load" })
        .done(function(data) {
            callback(data);
        })
        .fail(function() {
            console.error("Failed to load page");
        });
}


function check_nin_bvn_status()
{
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc",  source:"ajax" , type :"check_nin_bvn_status"})
        .done(function( data )
        {
            return data;
        });
    return data;
}

function link_bvn_to_account(){
    var user_id = $('#user_id').val();
    document.getElementById('validate_bvn').innerHTML = 'Validating, Please Wait...';
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc", user_id: user_id, source:"ajax" , type :"link_bvn_to_account"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                newURL = window.location.protocol + "//" + window.location.host + "/" + 'v/dashboard';
                window.location=newURL;
            }, 5000);
            return false;
        });
    return false;
}

function link_nin_to_account(){
    var user_id = $('#user_id').val();
    document.getElementById('validate_bvn').innerHTML = 'Validating, Please Wait...';
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc", user_id: user_id, source:"ajax" , type :"link_nin_to_account"})
        .done(function( data )
        {
            bootbox.alert(data);
            setTimeout(function(){
                newURL = window.location.protocol + "//" + window.location.host + "/" + 'v/dashboard';
                window.location=newURL;
            }, 5000);
            return false;
        });
    return false;
}


function create_user_account(){
    var user_id = $('#user_id').val();
    document.getElementById('create_account').innerHTML = 'Creating Account, Please Wait...';
    var sendURL = window.location.protocol + "//" + window.location.host + "/scripts/short_queries.php";
    $.get( sendURL, { app:"kyc", user_id: user_id, source:"ajax" , type :"create_user_account"})
        .done(function( data )
        {
            if(data =="Account Number successfully generated."){
                bootbox.alert(data);
                setTimeout(function(){
                    newURL = window.location.protocol + "//" + window.location.host + "/" + 'v/dashboard';
                    window.location=newURL;
                }, 5000);
                return false;
            }else{
                bootbox.alert(data);
                setTimeout(function(){
                    newURL = window.location.protocol + "//" + window.location.host + "/" + 'v/kyc';
                    window.location=newURL;
                }, 5000);
                return false;
            }

        });
    return false;
}


