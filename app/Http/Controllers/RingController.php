<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


use Helper;

class RingController extends Controller
{
    //
    public function index(Request $request){
		$param = Helper::seo('ring_home_pg');
    	return view('pages.frontend.ring.index')->with('meta', $param);
    }

     //products
    public function indoor_product(){
        $param = Helper::seo('ring_indoor_camera_pg');
        return view('pages.frontend.ring.indoor-product')->with('meta', $param);
    }

    public function sticky_camera_product(){
        $param = Helper::seo('ring_stickup_camera_pg');
        return view('pages.frontend.ring.sticky-camera-product')->with('meta', $param);
    }

    public function spotlight_camera_product(){
        $param = Helper::seo('ring_spotlight_camera_pg');
        return view('pages.frontend.ring.spotlight-camera-product')->with('meta', $param);
    }

    public function retrofit_alarm_product(){
        $param = Helper::seo('ring_retrofit_alarm');
        return view('pages.frontend.ring.retrofit-alarm-product')->with('meta', $param);
    }

    public function alarm_ff_product(){
        $param = Helper::seo('ring_flood_freeze_sensor_pg');
        return view('pages.frontend.ring.alarm-ff-product')->with('meta', $param);
    }

    public function window_magnet_product(){
        $param = Helper::seo('ring_window_magnet_pg');
        return view('pages.frontend.ring.window-magnet-product')->with('meta', $param);
    }

    public function alarm_scl_product(){
        $param = Helper::seo('ring_smoke_co_alarm_pg');
        return view('pages.frontend.ring.alarm-listener-product')->with('meta', $param);
    }

    public function alarm_motion_product(){
        $param = Helper::seo('ring_motion_detector_pg');
        return view('pages.frontend.ring.alarm-motion-product')->with('meta', $param);
    }

    public function contact_sensor_product(){
        $param = Helper::seo('ring_door_contact_sensor_pg');
        return view('pages.frontend.ring.contact-sensor-product')->with('meta', $param);
    }

    public function connect_smart_product(){
        $param = Helper::seo('ring_smart_lock_pg');
        return view('pages.frontend.ring.connect-smart-lock-product')->with('meta', $param);
    }

    public function panic_button_product(){
        $param = Helper::seo('ring_panic_button_pg');
        return view('pages.frontend.ring.panic-button-product')->with('meta', $param);
    }

    public function alarm_keypad_product(){
        $param = Helper::seo('ring_alarm_keypad_pg');
        return view('pages.frontend.ring.alarm-keypad-product')->with('meta', $param);
    }

    public function pathlight_product(){
        $param = Helper::seo('ring_pathlight_pg');
        return view('pages.frontend.ring.pathlight-product')->with('meta', $param);
    }

    public function transformer_product(){
        $param = Helper::seo('ring_transformer_pg');
        return view('pages.frontend.ring.transformer-product')->with('meta', $param);
    }

    public function solar_steplight_product(){
        $param = Helper::seo('ring_steplight_pg');
        return view('pages.frontend.ring.solar-steplight-product')->with('meta', $param);
    }

    public function template_product(){
        $param = Helper::seo('ring_doorbell_pg');
        return view('pages.frontend.ring.template-product')->with('meta', $param);
    }

    public function quote(){
        return view('pages.frontend.vivint.quotes')->with('meta', $param);
    }

     public function store(Request $request){
      $rules = array(
           'name' => 'required|alpha_dash|max:255',
           'email' => 'required|email',
           'phone' => 'min:11|numeric'
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
           <td height="50" colspan="2" align="center" valign="middle">Request Quote for Ring Home Alarm Security:</td>
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

   $subject1 = "Hi ".$request->name."! We have received your Quote request.";

   $message1 = '
   <!DOCTYPE">
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
          <a href="tel:(888) 665-2165"><span style=" color:#eb5d1e; font-family:Arial, Helvetica, sans-serif;">Call (888) 665-2165</span></a>
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
