<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 25-10-2017
 * Time: 12:36
 */
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>User Enquiry Details</title>
</head>
<style>
body {
    padding: 0;
    margin: 0;
}

html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) {
    *[class="table_width_100"] {
        width: 96% !important;
    }
    *[class="border-right_mob"] {
        border-right: 1px solid #dddddd;
    }
    *[class="mob_100"] {
        width: 100% !important;
    }
    *[class="mob_center"] {
        text-align: center !important;
    }
    *[class="mob_center_bl"] {
        float: none !important;
        display: block !important;
        margin: 0px auto;
    }
    .iage_footer a {
        text-decoration: none;
        color: #929ca8;
    }
    img.mob_display_none {
        width: 0px !important;
        height: 0px !important;
        display: none !important;
    }
    img.mob_width_50 {
        width: 40% !important;
        height: auto !important;
    }
}
.table_width_100 {
    width: 680px;
}

.mail-btn, .mail-btn:link, .mail-btn:visited {
    color: #FFFFFF;
    background-color: #337ab7;
}

.mail-bar a, .mail-button, .mail-btn {
    text-decoration: none !important;
}

.mail-margin-top {
    margin-top: 10px!important;
}

.mail-btn, .mail-button {
    border: none;
    display: inline-block;
    outline: 0;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}

.float_left
{
    margin-left: 120px;
}

</style>
<body>

<div id="mailsub" class="notification" align="center">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;">
        <tr>
            <td align="center" bgcolor="#eff3f8">

                <table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
                    <tr>
                        <td>
                            <div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <!--header -->
                    <tr>
                        <td align="center" bgcolor="#337ab7">
                            <div style="height: 5px; line-height: 30px; font-size: 10px;"> </div>
                            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                <tr>

                                    <td align="left">

                                        <div class="mob_center_bl" {{--style="float: right; display: inline-block; width: 88px;"--}}>

                                            <table width="88" border="0" cellspacing="0" cellpadding="0" align="right" style="border-collapse: collapse;">
                                                <tr>
                                                    <td align="right" valign="middle">
                                                        <div style="height: 20px; line-height: 20px; font-size: 10px;"> </div>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                                            <tr>
                                                                <td align="center">
                                                                    <div class="mob_center_bl" style="width: 88px;">
                                                                        <table border="0" cellspacing="0" cellpadding="0">
                                                                            <tr>
                                                                                <td width="100%" align="right" style="line-height: 19px;">
                                                                                    <a href="http://stjosephspallalakuppam.in/" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                                                                       <img src="http://stjosephspallalakuppam.in/users/img/st-joseph.png" width="100%" height="50%" alt="St.Josephs schoolapp"/>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div style="height: 10px; line-height: 50px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <!--header END-->

                    <!--content -->
                    <tr>
                        <td align="center" bgcolor="#ffffff">
                            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <div style="height: 30px; line-height: 60px; font-size: 10px;"> </div>
                                        <div style="line-height: 44px;">
                                            <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e" style="font-size: 34px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 28px; color: #57697e;text-transform: uppercase;">
                                                ENQUIRY TO St.JOSEPHS SCHOOL APP
                                            </span>
                                            </font>
                                        </div>
                                        <div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td >

                                        <div style="line-height: 24px;" align="center">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;font-weight: bold;">
                                                    User Enquiry Details :
                                                </span>
                                            </font>
                                        </div>

                                        <div style="line-height: 24px;" class="float_left">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                                 <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                     User Name : {{ ucwords(trans($name)) }}
                                                 </span>
                                            </font>
                                        </div>

                                        <div style="line-height: 24px;" class="float_left">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                    User Email Id : {{ $user_mail }}
                                                </span>
                                            </font>
                                        </div>
                                        <div style="line-height: 24px;" class="float_left">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                    User Contact No : {{ $user_mobile }}
                                                </span>
                                            </font>
                                        </div>
                                        <div style="line-height: 24px;" class="float_left">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                    Message : {{ ucfirst(trans($user_message)) }}
                                                </span>
                                            </font>
                                        </div>
                                        <div style="line-height: 24px;" class="float_left">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                                <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                  Received Enquiries Today : {{ $totalEnquiry }}
                                                </span>
                                            </font>
                                        </div>

                                        {{--<div style="line-height: 24px" align="center">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                <a target="_blank" href="#" class="mail-btn mail-margin-top">Reply</a>
                                            </span>
                                            </font>
                                        </div>--}}

                                        <div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <div style="line-height: 24px;">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                Thanks,
                                            </span>
                                            </font>
                                        </div>

                                        <div style="line-height: 24px;">
                                            <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;text-transform: uppercase;">
                                                THE  CUSTOMER CARE TEAM
                                            </span>
                                            </font>
                                        </div>
                                        <div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!--content END-->

                    <!--footer -->
                    <tr>
                        <td class="iage_footer" align="center" bgcolor="#fbfcfd">
                            <div style="height: 30px; line-height: 80px; font-size: 10px;"> </div>

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                                            2018 ©
                                                <a href="http://stjosephspallalakuppam.in/" target="_blank">
                                                    <strong>St.Josephs School App</strong>
                                                 </a>. ALL Rights Reserved.
                                            </span>
                                        </font>
                                    </td>
                                </tr>
                            </table>

                            <div style="height: 30px; line-height: 30px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <!--footer END-->
                    <tr>
                        <td>
                            <div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
