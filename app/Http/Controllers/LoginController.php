<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $input = $request->all()

        $rules = array(
        'login'    => 'required|string|min:2|unique:users|alpha_dash',
        'password' => 'required|string|min:8'

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } 
        else 
        {
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password')
                );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful!
                return Redirect::to('listeEtudiant');

            } else {        

                // validation not successful, send back to form 
                return Redirect::to('login');

            }

        }
    }    
}
