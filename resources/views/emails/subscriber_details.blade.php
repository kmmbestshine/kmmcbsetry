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
<title>Subscriber Details</title>
</head>
<style>
    element.style {
        border: solid 1px #bfbfbf;
    }
    /*table[Attributes Style] {
        width: 600px;
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
        -webkit-margin-start: auto;
        -webkit-margin-end: auto;
        -webkit-border-horizontal-spacing: 0px;
        -webkit-border-vertical-spacing: 0px;
    }*/
    /* user agent stylesheet*/
    table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: grey;
    }
    /*Inherited from div#:k3.ii.gt.adP.adO*/

    .ii {
        direction: ltr;
        margin: 5px 15px;
        padding-bottom: 20px;
        position: relative;
    }

    .gt {
        font-size: 80%;
    }
    Inherited from div.nH.hx

    .hx {
        background-color: transparent;
        color: #222;
        min-width: 502px;
        padding: 4px 0;
    }
    Inherited from td.Bu

    body, td, input, textarea, select {
        margin: 0;
        font-family: arial,sans-serif;
    }
    body, td, input, textarea, select {
        font-family: arial,sans-serif;
    }
    Inherited from table.Bs.nH.iY

    .Bs {
        position: relative;
        border-spacing: 0;
        padding: 0;
        border-collapse: collapse;
    }
    user agent stylesheet
    table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: grey;
    }
    Inherited from body.aAU

    body, td, input, textarea, select {
        margin: 0;
        font-family: arial,sans-serif;
    }
    body, td, input, textarea, select {
        font-family: arial,sans-serif;
    }
</style>
<body>

<div id="mailsub" class="notification" align="center">

    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #bfbfbf">
        <tbody>
        <tr>
            <td align="center" bgcolor="#337ab7">
                <div style="font-size: 10px;"> </div>
                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                    <tr>

                        <td align="left">

                            <div class="mob_center_bl" >

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
         <tr>
             <td height="35" bgcolor="#F0F0F0" style="padding:5px">
                 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tbody>
                     <tr>
                         <td height="35" align="center" style="font-size:20px;color:#666666;font-family:Arial,Helvetica,sans-serif">
                             <strong>
                                 Subscriber Details
                                 <br>
                             </strong>
                         </td>
                     </tr>
                     </tbody>
                 </table>
             </td>
         </tr>
        <tr>
            <td width="582" style="font-size:12px;font-family:Arial,Helvetica,sans-serif;line-height:18px;padding-left:80px">
                {{--Dear Employee,--}}
                <br>
                <br>
                <strong>
                    User Email Id :
                </strong>{{ $subscriber_email }}
                <br>
                <br>
                <strong>
                    Total Visit Subscriber :
                </strong>{{ $total_subscriber }}
                <br>
                <br>
                <br>

            </td>
        </tr>
        <tr>
            <td bgcolor="#F3F3F3" style="background-color:#f3f3f3;padding:0px;font-family:Arial,Helvetica,sans-serif;font-size:10px;color:#666666;border-top:solid 1px #bfbfbf"><table width="100%" height="20" border="0" cellpadding="5" cellspacing="0">
                    <tbody>
                    <tr>
                        <td width="10%" valign="top">
                            <img height="100px;" width="100px;"
                                 src="https://ci6.googleusercontent.com/proxy/Ivw194dx472qSsQQMW3SofsSpCaYr3j695Ze1La7jaO8FrJFXTb4KiB44k2fYu2evnttiFxYmmhYrkCwGey1vWgez9Pagr3y-klkbRPLjvg=s0-d-e1-ft#http://media.monsterindia.com/monster_2012/boy_100x100.jpg" class="CToWUd">
                        </td>
                        <td width="90%"  style="line-height:25px;border-right:1px #bfbfbf solid;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#000">
                            THANKS,
                            <br>
                            <span style="color:#666">THE CUSTOMER CARE TEAM</span>
                            <br>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="7">
                    <tbody>
                    <tr>
                        <td height="60" align="center"  color="#bfbfbf ">

                            <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                                2018 ©
                                <a href="http://stjosephspallalakuppam.in/" target="_blank">
                                    <strong>St.Josephs School App</strong>
                                </a>. ALL Rights Reserved.
                            </font>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

</div>
</body>
</html>
