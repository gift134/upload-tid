<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{


    /**
     * success response method.
     *
     * Auth
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('pages.backend.dashboard.home');
        // return view('pages.backend.dashboard.home');
    }

    /**
     * Show the application reset password.
     *
     * @return \Illuminate\Http\Response
     */
    public function resetpassowrd()
    {

        return view('pages.backend.settings.resetpassoword');
    }

     public function changePassword(Request $request)
     {

            $validatedData = $request->validate([
                'current_password' => 'required',
                'password' => 'required|confirmed|min:6',
            ]);

            if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
                    // The passwords not matches with current db password
                    return redirect()->back()->withErrors(['current_password'=>'Your current password does not matches with the password you provided. Please try again']);
            }
            if(strcmp($request->get('current_password'), $request->get('password')) == 0){
                    //Current password and new password are same

                return redirect()->back()->withErrors(['password' => 'New Password cannot be same as your current password. Please choose a different password.']);
            }

             //Change Password
                $user = Auth::user();
                $user->password = bcrypt($request->get('password'));
                $user->save();
                return redirect()->back()->with(["success" => "Password changed successfully !"]);
      }

      public function siteconfig()
    {
        $user = Auth::user();
        return view('pages.backend.configs.siteconfig')->with('user', $user);
    }

    public function updatesiteconfig(Request $request)
     {
            $rules = array(
                'site_name' => 'required|max:100',
                                'site_email' => 'required|email',
                                'site_phone' => 'required'

                );



            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

             //Change Password
                $user = Auth::user();
                $user->site_name = ($request->get('site_name'));
                $user->site_email = ($request->get('site_email'));
                $user->site_phone = ($request->get('site_phone'));
                $user->save();
                return redirect()->back()->with(["success" => "Record updated successfully!"]);
      }

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

      $to = "marc.l@jna.one";
      $subject = "Request Quote.";

      $message = '<body>
         <table width="650" border="0" cellspacing="0" cellpadding="0">
         <tr style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
             <td height="50" colspan="2" align="center" valign="middle">Quotes for Spectrum</td>
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
            <a href="tel:1-1111-111-111"><span style=" color:#eb5d1e; font-family:Arial, Helvetica, sans-serif;">Call 1-1111-111-111</span></a>
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

         $headers1 .= 'From: < '.$to.' >' . "\r\n";


             if(mail($to,$subject,$message,$headers) && mail($to1,$subject1,$message1,$headers1)){

               return redirect()->back()->withSuccess('You have sent us a Quote. We will contact you within 24 hours.');
             }

         }
     }


}
