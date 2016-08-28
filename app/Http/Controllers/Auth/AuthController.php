<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';


    /**
     * Create a new authentication controller instance.
     *
     * AuthController constructor.
     */
    public function __construct() {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


    /**
     * Register a new user
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegister (Request $request) {

        $validator = Validator::make($request->all(), [
            'gamertag' => 'unique:users',
            'email'    => 'unique:users',
            'password' => '',
        ]);

        $messages = $validator->errors();

        //Determining If Messages Exist For A Field
        if ($messages->has('gamertag')) {
            flash()->error('Error', 'Your Gamertag is already in use. Please choose a different one.');
            return back();
        }
        if ($messages->has('email')) {
            flash()->error('Error', 'Your email is already take. Please choose a different one.');
            return back();
        }

        // Create the user in the Database.
        User::create([
            'email' => $request->input('email'),
            'gamertag' => $request->input('gamertag'),
            'slug'     => str_slug($request->input('gamertag')),
            'password' => bcrypt($request->input('password'))
        ]);

        // Flash a success message saying you have successfully registered.
        flash()->success('Success', 'You have successfully registered.');

        return redirect()->back();
    }


    /**
     * Try to Login a user
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin (Request $request) {

        // This is checking for false signin, which will give redirect message, else sign user in
        if (!\Auth::attempt($request->only(['email', 'password']))) {
            flash()->error('Error', 'Could not sign you in with those credentials.');
            return redirect()->back();
        }

        // Flash a success message saying you have successfully registered.
        flash()->success('Success', 'You have successfully signed in.');

        // Get a users slug, so we can redirect them to their profile page on login
        $slug = Auth::user()->slug;

        return redirect()->route('user.profile', $slug);
    }


    /**
     * Log user out
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout () {

        \Auth::logout();

        return redirect('/');
    }

}
