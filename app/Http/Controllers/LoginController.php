<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function connexion(Request $request)
    {
        $input = $request->all();

        $rules = array(
            'login' => 'required|string|min:2|unique:users|alpha_dash',
            'password' => 'required|string|min:8'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make($input, $rules);
                // if the validator fails, redirect back to the form
                if ($validator->fails()) {
                    return redirect('/')
                    ->withErrors($validator); // send back all errors to the login form
                }
                else
                {
        // create our user data for the authentication
        $userdata = array(
            'email' => $input['login'],
            'password' => $input['password']
        );
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful!
                return Redirect::to('listeEtudiant');

            } else {        

                // validation not successful, send back to form 
                return Redirect::to('/');

            }

        }
    }    
}
