<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Helper;

class ContactController extends Controller
{

    public function index(){
        Helper::seo('contact_us_pg');
    	return view('pages.frontend.contact.index');
    }

    public function store(Request $request){
    	 $rules = array(
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'min:11',
            'subject' => 'required|max:255',
            'message' => 'required|max:500'
        );


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        	return redirect()->back()->withErrors($validator)->withInput(); 
        }else{
       
    $to = "marc.l@jna.one";
    $subject = "Receive Inquiry.";

    $message = '<body>
        <table width="650" border="0" cellspacing="0" cellpadding="0">
        <tr style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
            <td height="50" colspan="2" align="center" valign="middle">Contact us Message:</td>
        </tr>
        <tr style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
        <td width="50%" height="30" align="left" valign="middle" bgcolor="#f5f5f5">Name:</td>
        <td height="30" align="left" valign="middle" bgcolor="#f5f5f5">'.$request->name.'</td>
        </tr>
        <tr style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#FFF;">
        <td width="50%" height="30" align="left" valign="middle" bgcolor="#1a7cab">Email:</td>
        <td height="30" align="left" valign="middle" bgcolor="#1a7cab">'.$request->email.'</td>
        </tr>
        <tr style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
        <td width="50%" height="30" align="left" valign="middle" bgcolor="#f5f5f5">Phone Number:</td>
        <td height="30" align="left" valign="middle" bgcolor="#f5f5f5">'.$request->phone.'</td>
        </tr>
        <tr style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#FFF;">
        <td width="50%" height="30" align="left" valign="middle" bgcolor="#1a7cab">Subject:</td>
        <td height="30" align="left" valign="middle" bgcolor="#1a7cab">'.$request->subject.'</td>
        </tr>
        <tr style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
        <td width="50%" height="30" align="left" valign="middle" bgcolor="#f5f5f5">Message:</td>
        <td height="30" align="left" valign="middle" bgcolor="#f5f5f5">'.$request->message.'</td>
        </tr>
    </table>
    <p>&nbsp;</p>
    </body>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: <'.$request->email.'>' . "\r\n";

    $to1 = $request->email;
    $subject1 = "Hi! We have receive your inquiry.";

    $message1 = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    </head>

    <body>
    <table width="650" border="0" cellspacing="0" cellpadding="0">
 
    <tr>
        <td style="font-family:Arial, Helvetica, sans-serif;"><p>Hello, '.$request->name.'</p></td>
    </tr>
    
    <tr>
        <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
            <p>We just receive inquiry. 
            </p>
        </td>
    </tr>

    <tr>
        <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px"><p>Thank you.<br />
        </p>
    </td>
    </tr>
    </table>
    </body>
    </html>';

// Always set content-type when sending HTML email
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers1 .= 'From: < '.$to.' >' . "\r\n";


            if(mail($to,$subject,$message,$headers) && mail($to1,$subject1,$message1,$headers1)){
	
	            return redirect()->back()->withSuccess('Your message sent successfully to the administrator.'); 
            }
        	
        }
    }
}
