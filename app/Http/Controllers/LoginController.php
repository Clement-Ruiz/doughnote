<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
 
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
        'login'    => 'required|string|min:2|alpha_dash',
        'password' => 'required|string|min:6'
        );


        // run the validation rules on the inputs from the form
        $validator = Validator::make($input, $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator); // send back all errors to the login form
        } 
        else 
        {
            // create our user data for the authentication
            $userdata = array(
                'login'     => $input['login'],
                'password'  => $input['password']
                );

          if(Auth::attempt($userdata)){
              return redirect("/");
          }
          else{
              return redirect()->back();
          }


        }
    }

    public function deconnexion(){
        Auth::logout();
        return redirect("/");
    }
    public function updatepass(Request $request)
    {
        $input = $request->all();
        $user_update = User::findOrFail($input['id']);
        $this->validate($request, User::$rules["update"]);//Valide avec le model
        $status_update = $user_update->update($input);
        if($status_update){
            return redirect("/");
        }
        else{
            //return redirect("/");
        }
    }
}
