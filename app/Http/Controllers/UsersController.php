<?php

namespace App\Http\Controllers;

use App\User;
use App\Filters\UserFilter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index(UserFilter $filter)
    {
        return User::with(
            'TypeUser:id,type')
        ->get();
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'typeUserId' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
            'sex' => 'required',
            'birth' => 'required|date',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        //$this.SendMail($user, $password);
        User::create(request()->all());

        return response()->json([
            'message' => 'Successful created'
        ]);
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'typeUserId' => 'sometimes|required',
            'name' => 'sometimes|required',
            'email' => ['sometimes', 'required', 'email', Rule::unique('users')->ignore($user->id)],
            'sex' => 'sometimes|required',
            'birth' => 'sometimes|required|date',
        ]);

        $user->fill(request()->all())->save();

        return response()->json([
            'message' => 'Successful edited'
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'message' => 'The user has been successfully deleted'
        ], Response::HTTP_ACCEPTED);
    }

    public function MailBoidy($user,$pass)
  {
    return '<!DOCTYPE html>
          <html>
          <head>
          <style>
          *    { margin: 0;padding: 0; }
          body { font-size: 14px; }
          h3 {
          margin-bottom: 10px;
          font-size: 15px;
          font-weight: 600;
          }.ps {
          width: 496px; 
          border-radius: 4px;
          box-sizing: border-box;
          padding: 0 45px;
          margin: 40px auto;
          overflow: hidden;
          border: 1px solid #b0afb5;
          font-family: \'Open Sans\', sans-serif;
          color: #4f5365;
          }.ps-reminder {
          position: relative;
          top: -1px;
          padding: 9px 0 10px;
          font-size: 11px;
          text-transform: uppercase;
          text-align: center;
          color: #ffffff;
          background: #000000;
          }.ps-info {
          margin-top: 26px;
          position: relative;
          }.ps-info:after {
          visibility: hidden;
          display: block;
          font-size: 0;
          content: " ";
          clear: both;
          height: 0;
          }.ps-brand {
          width: 45%;
          float: left;
          }.ps-brand img {
          max-width: 150px;
          margin-top: 2px;
          }.ps-amount {
          width: 55%;
          float: right;
          }.ps-amount h2 {
          font-size: 36px;
          color: #000000;
          line-height: 24px;
          margin-bottom: 15px;
          }.ps-amount h2 sup {
          font-size: 16px;
          position: relative;
          top: -2px
          }.ps-amount p {
          font-size: 10px;
          line-height: 14px;
          }.ps-reference {
          margin-top: 14px;
          }h1 {
          font-size: 27px;
          color: #000000;
          text-align: center;
          margin-top: -1px;
          padding: 6px 0 7px;
          border: 1px solid #b0afb5;
          border-radius: 4px;
          background: #f8f9fa;
          }.ps-instructions {
          margin: 32px -45px 0;
          padding: 32px 45px 45px;
          border-top: 1px solid #b0afb5;
          background: #f8f9fa;
          }ol {
          margin: 17px 0 0 16px;
          }li + li {
          margin-top: 10px;
          color: #000000;
          }a {
          color: #1475ce;
          }.ps-footnote {
          margin-top: 22px;
          padding: 22px 20 24px;
          color: #108f30;
          text-align: center;
          border: 1px solid #108f30;
          border-radius: 4px;
          background: #ffffff;
          }
          </style>
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
          </head>
          <body>
          <div class="ps">
          <div class="ps-header">
          <div class="ps-reminder">Ha sido dado de Alta en OnlineLearning.</div>
          <div class="ps-info">          
          <h3>Su usuario es: '.$user.'</h3>
          <h3>Su Contraseña es: '.$pass.'</h3>
          </div>
          </div>
          </div>
          </div>
          </body>
          ';
  }

  public function SendMail($user, $password)
  {

    $to  = $user;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    $headers .= 'From: Enrique Ruiz <pablo_enrique_r@hotmail.com>' . "\r\n";
    mail($to, "Bienvenido a OnlineLearning", $this->MailBoidy($user,$password), $headers);

  }
}
