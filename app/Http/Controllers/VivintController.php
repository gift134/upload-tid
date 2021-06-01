<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use Helper;

class VivintController extends Controller
{
    //
    public function index(Request $request){
		$param = Helper::seo('vivint_home_pg');
    	return view('pages.frontend.vivint.index')->with('meta',$param);
    }

    public function vivint_template(){
        // Helper::seo('vivint_smart_lock_pg');
        return view('pages.frontend.vivint.vivint-product-template');
    }

    //products
    public function vivint_doorbell_camera_pro(){
        // Helper::seo('vivint_doorbell_pg');
        return view('pages.frontend.vivint.vivint-doorbell-camera-pro');
    }

    public function vivint_outdoor_camera_pro(){
        // Helper::seo('vivint_outdoor_camera_pg');
        return view('pages.frontend.vivint.vivint-outdoor-camera-pro');
    }

    public function vivint_ping_camera(){
        // Helper::seo('vivint_ping_camera_pg');
        return view('pages.frontend.vivint.vivint-ping-camera');
    }

    public function vivint_element_thermostat(){
        // Helper::seo('vivint_element_thermostat_pg');
        return view('pages.frontend.vivint.vivint-element-thermostat');
    }

    public function vivint_playback_dvr(){
        // Helper::seo('vivint_playback_dvr_pg');
        return view('pages.frontend.vivint.vivint-playback-dvr');
    }

    public function vivint_smart_lock(){
        // Helper::seo('home_pg');
        return view('pages.frontend.vivint.vivint-smart-lock');
    }

    public function vivint_247_monitoring(){
        // Helper::seo('vivint_247_monitoring_pg');
        return view('pages.frontend.vivint.vivint-247-monitoring');
    }

    public function vivint_garage_door_controll(){
        // Helper::seo('vivint_garage_control_pg');
        return view('pages.frontend.vivint.vivint-garage-door-controll');
    }

    public function quote(){
        // Helper::seo('vivint_quote_pg');
        return view('pages.frontend.vivint.quotes');
    }

    public function store(Request $request){
      $rules = array(
           'first_name' => 'required|max:155',
           'last_name' => 'required|max:155',
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
           <td height="50" colspan="2" align="center" valign="middle">Request Quote for Vivint Home Alarm Security:</td>
       </tr>
       <tr style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
       <td width="50%" height="30" align="left" valign="middle" bgcolor="#f5f5f5">Name:</td>
       <td height="30" align="left" valign="middle" bgcolor="#f5f5f5">'.$request->first_name.' '.$request->last_name.'</td>
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
   $subject1 = "Hi '.$request->name.'! We have received your Quote request.";

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
       <td style="font-family:Arial, Helvetica, sans-serif;"><p>Hello, '.$request->first_name.' '.$request->last_name.'</p></td>
   </tr>

   <tr>
       <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:14px">
           <p>Thank you interest. We will contact you within 24 hours
           </p>
       </td>
       </tr>
       <tr>
       <td>
          <a href="tel:(844) 529-3458"><span style=" color:#eb5d1e; font-family:Arial, Helvetica, sans-serif;">Call (844) 529-3458</span></a>
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
