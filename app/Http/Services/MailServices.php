<?php

namespace App\Http\Services;

use App\Model\User;
use App\Model\Store;
use Hash;
use Input;
use Views;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class MailServices {

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data) {
        return Validator::make($data, [
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function sendWelcomeMail($user) {

        Mail::send('mail.welcome', [
            'store_name' => ucwords($user->store_name),
            'subDomain' => ucwords($user->subDomain),
            'email' => $user->user_email,
                ], function($message) use($user) {
            $message->to($user->user_email)
                    ->from(APP_EMAIL_SENDER, APP_NAME)
                    ->subject('Welcome To Quickmerch');
        });
    }

    /**
     * 
     * @param type $pass
     * @param type $user
     * @return type
     */
    public function ForgotPasswordEmailService($pass, $user) {
        return $mail_sent = Mail::send('mail.forgotpassword', array('password' => $pass, 'name' => $user->first_name), function($message) {
                    $message->to(Input::get('email'))
                            ->from(APP_EMAIL_SENDER, APP_NAME)
                            ->subject('New Password Set Successfully');
                });
    }

    /**
     * 
     * @param string $pass is random pass generated for subadmin
     * @param array $user is complete info about subadmin
     */
    public function subadminRegisterEmail($pass, $user, $role) {
        Mail::send('mail.subadmin_register', [
            'name' => ucwords($user->first_name),
            'username' => $user->email,
            'password' => $pass,
            'role' => $role,
            'link' => APP_DOMAIN . 'site/admin',
                ], function($message) use($user) {
            $message->to($user->email)
                    ->from(APP_EMAIL_SENDER, APP_NAME)
                    ->subject('Quickmerch Subadmin');
        });
    }

    public function subadminRoleChange($name, $email, $role) {
        Mail::send('mail.subadmin_role_change', [
            'name' => ucwords($name),
            'role' => $role,
                ], function($message) use($email) {
            $message->to($email)
                    ->from(APP_EMAIL_SENDER, APP_NAME)
                    ->subject('Role Change');
        });
    }

    public function sendOrderEmail($customer, $order, $items) {
        Mail::send('mail.order_placed', [
            'customer' => $customer,
            'order' => $order,
            'items' => $items,
                ], function($message) use($customer) {
            $message->to($customer['email'])
                    ->from(APP_EMAIL_SENDER, APP_NAME)
                    ->subject('Role Change');
        });
    }

    public function sendNewsletterMail($subject,$content,$visitor_email)
    {
    //echo $visitor_email.$subject.$content;
        $mail_sent = Mail::send('mail.newsletter', array('subject' => $subject, 'content' => $content), function($message) use($visitor_email) {
                    $message->to($visitor_email)
                            ->from(APP_EMAIL_SENDER, APP_NAME)
                            ->subject('News Letter');
                });
    }

    public function sendContactUsMail($adminemail,$userdata)
    {
        $mail_sent = Mail::send('mail.contactus', array(
            'name' => $userdata['name'],
            'email' => $userdata['email'],
            'phone' => $userdata['phone'],
            'info' => $userdata['message'],
            ), function($message) use($adminemail) {
                    $message->to($adminemail)
                            ->from(APP_EMAIL_SENDER, APP_NAME)
                            ->subject('Contact Us Info');
                });
        return true;
    }

}

