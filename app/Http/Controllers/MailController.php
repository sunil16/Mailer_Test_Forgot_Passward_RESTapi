<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Mail;
use DB;
use Validator;
use Redirect;
use Session;
use Illuminate\Support\Facades\Log;
use App\Quotation;
use Auth;
use Hash;
use Response;
use App\mailer;
use App\Http\Requests\PublishBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MailController extends Controller {

  public function send_mail(Request $request)
  {
    $email = $request['email'];
    $mail_from_db = DB::table('mailers')->where('email', $email)->first();

    if(sizeof($mail_from_db)){
      $title = "Forgot password request";
      $content = "your current pasword is {$mail_from_db->password}";
      $myText = $mail_from_db->email;
      Mail::send('emails.mail', ['title' => $title, 'content' => $content], function($message)  use ($myText)
      {
        $message->from($myText, 'mailer test');
       $message->to("tomail@gmail.com");
      });

      return response()->json([
        "status" => "succussfully",
        "data" => [
          "description" => "mail sent succussfully"],
        ]);

  }else {
    return response()->json([
      "status" => "failure",
      "data" => [
        "description" => "Invalid email"],
      ]);
    }

  }
}
