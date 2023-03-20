<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 14/06/2017
 * Time: 13:02
 */
session_start();

require 'dbconfig.php';
$telephone = mysql_real_escape_string($_POST['telephone']);
$formnumber = mysql_real_escape_string(strtoupper($_POST['numero']));
$_SESSION['numero'] = $formnumber;

// SQL Query
$sql = "SELECT * FROM writingresult WHERE nom='$formnumber'";
$runsql = mysql_query($sql);
if(mysql_num_rows($runsql)>0){
    $_objSmsProtocolGsm = new Com("ActiveXperts.SmsProtocolGsm");



    //create the nessecairy com objects
    $objMessage   = new Com ("ActiveXperts.SmsMessage");
    $objConstants = new Com ("ActiveXperts.SmsConstants");

    //get the submitted information
    $device       = "HUAWEI Mobile Connect - 3G Modem";
    $speed        = "Default";
    $pincode      = "";
    $recipient    = "+237".$telephone;
    $message      = "SUCCESS !! You have succeded the entrance ";
    $unicode      = "";


    //configure a logfile
    $_objSmsProtocolGsm->Logfile = "C:\SMSMMSToolLog.txt";

    //Clear the messageobject first
    $objMessage->Clear();

    //fill in the recipient
    if( $recipient == "" ) die("No recipient address filled in.");
    $objMessage->Recipient = $recipient;

    //fill in the messageformat
    if( $unicode != "" ) $objMessage->Format = $objConstants->asMESSAGEFORMAT_UNICODE;

    //fill in the message body
    $objMessage->Data = $message;

    //clear the gsm object
    $_objSmsProtocolGsm->Clear();

    //fill in the devicename
    $_objSmsProtocolGsm->Device = $device;

    //fill in the devicespeed
    if( $speed == "Default" ) $_objSmsProtocolGsm->DeviceSpeed = 0;
    if( $speed != "Default" ) $_objSmsProtocolGsm->DeviceSpeed = $speed;

    //fill in the pincode
    if( $pincode != "" ) $_objSmsProtocolGsm->EnterPin( $pincode );

    //send the message
    if( $_objSmsProtocolGsm->LastError == 0 ){
        $_objSmsProtocolGsm->Send( $objMessage );
    }

    //get the results
    $LastError        = $_objSmsProtocolGsm->LastError;
    $ErrorDescription = $_objSmsProtocolGsm->GetErrorDescription( $LastError );
}else{
    $_objSmsProtocolGsm = new Com("ActiveXperts.SmsProtocolGsm");



    //create the nessecairy com objects
    $objMessage   = new Com ("ActiveXperts.SmsMessage");
    $objConstants = new Com ("ActiveXperts.SmsConstants");

    //get the submitted information
    $device       = "HUAWEI Mobile Connect - 3G Modem";
    $speed        = "Default";
    $pincode      = "";
    $recipient    = "+237".$telephone;
    $message      = "FAILED !! You have failed the entrance ";
    $unicode      = "";


    //configure a logfile
    $_objSmsProtocolGsm->Logfile = "C:\SMSMMSToolLog.txt";

    //Clear the messageobject first
    $objMessage->Clear();

    //fill in the recipient
    if( $recipient == "" ) die("No recipient address filled in.");
    $objMessage->Recipient = $recipient;

    //fill in the messageformat
    if( $unicode != "" ) $objMessage->Format = $objConstants->asMESSAGEFORMAT_UNICODE;

    //fill in the message body
    $objMessage->Data = $message;

    //clear the gsm object
    $_objSmsProtocolGsm->Clear();

    //fill in the devicename
    $_objSmsProtocolGsm->Device = $device;

    //fill in the devicespeed
    if( $speed == "Default" ) $_objSmsProtocolGsm->DeviceSpeed = 0;
    if( $speed != "Default" ) $_objSmsProtocolGsm->DeviceSpeed = $speed;

    //fill in the pincode
    if( $pincode != "" ) $_objSmsProtocolGsm->EnterPin( $pincode );

    //send the message
    if( $_objSmsProtocolGsm->LastError == 0 ){
        $_objSmsProtocolGsm->Send( $objMessage );
    }

    //get the results
    $LastError        = $_objSmsProtocolGsm->LastError;
    $ErrorDescription = $_objSmsProtocolGsm->GetErrorDescription( $LastError );
}


?>