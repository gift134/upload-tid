<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use Helper;

class ADTController extends Controller
{
    //
    public function index(Request $request){
		$param = Helper::seo('adt_home_pg');
    	return view('pages.frontend.adt.index')->with('meta',$param);
    }

    public function adt_security_system(){
        // Helper::seo('adt_system_pg');
        return view('pages.frontend.adt.adt-security-system');
    }

    //products

    public function adt_security_cameras(){
        // Helper::seo('adt_camera_pg');
        return view('pages.frontend.adt.adt-security-cameras');
    }

    public function adt_emergency_alarm(){
        // Helper::seo('adt_emergency_alarm_pg');
        return view('pages.frontend.adt.adt-emergency-alarm');
    }

    public function adt_home_automation(){
        // Helper::seo('adt_home_automation_pg');
        return view('pages.frontend.adt.adt-home-automation');
    }

    // public function quote(){
    //     Helper::seo('home_pg');
    //     return view('pages.frontend.vivint.quotes');
    // }

    public function store(Request $request){
      $rules = array(
           'name' => 'required|max:255',
           'email' => 'required|email',
           'phone' => 'min:10'
       );

       $validator = Validator::make($request->all(), $rules);
       if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
       }else{


   $to = "info@homealarmsecurity.org";

   $subject = "Receive Inquiry.";

   $message = '<body>
       <table width="650" border="0" cellspacing="0" cellpadding="0">
       <tr style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
           <td height="50" colspan="2" align="center" valign="middle">Request Quote for ADT Home Alarm Security:</td>
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
   </table>
   <p>&nbsp;</p>
   </body>';

   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

   $headers .= 'From: <'.$request->email.'>' . "\r\n";

   $to1 = $request->email;

   $subject1 = "Hi '.$request->name.'! We have received your request.";

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
           <p>Thank you interest. We will contact you within 24 hours
           </p>
       </td>
       </tr>
       <tr>
       <td>
          <a href="tel:(844) 529-7254"><span style=" color:#eb5d1e; font-family:Arial, Helvetica, sans-serif;">Call (844) 529-7254</span></a>
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

       $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $headers1 .= 'From: < '.$to.' >' . "\r\n";


           if(mail($to,$subject,$message,$headers) && mail($to1,$subject1,$message1,$headers1)){

             return redirect()->back()->withSuccess('You have sent us a Quote. We will contact you within 24 hours.');
           }

       }
   }



}
