<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */

     

     public function register(Request $request)
     {
         $this->validate($request,[
             'email'=>'required|email',
             'password' => 'required'
         ]);
         if (strcmp($request->input('password'),$request->input('password2'))==0)
            {   
                $request['api_token']=str_random(60);
                $hash=app()->make('hash');
                $email=$request->input('email');
                $password=$hash->make($request->input('password'));


                $register=User::create([
                    'email'=> $email,
                    'password' => $password,
                    'api_token' => $request['api_token']
                ]);
                if ($register)
                    {
                        return redirect('/login');
                    }
                else 
                    {
                        $res['success']=false;
                        $res['message']='Something went wrong';
                        return response($res);
                    }
            }
            else 
            {
                $res['success']=false;
                $res['message']='Passwords dont match';
                return response($res);
            }
     }

    public function login(Request $request)
    {
        $hash=app()->make('hash');
        $email= $request->input('email');
        $password=$request->input('password');
        $login=User::where('email',$email)->first();
        if ($login)
        {
            if ($hash->check($password, $login->password)){
                $api_token=$login->api_token;
                if ($api_token)
                {
                    $res['success']=true;
                    $res['message']='Welcome';
                    $res['api_token']=$api_token;
                    return response($res);
                }
                else{
                    $res['success']=false;
                    $res['message']='Something went wrong';
                    return response($res);
                }
        }
        else{
            $res['success']=false;
            $res['message']='Incorrect email or password';
            return response($res);
            }

        }
        else{
            $res['success']=false;
            $res['message']='Incorrect email or password';
            return response($res);
            }
    }
}