<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
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

    protected $loginPath = '/login';
    protected $redirectPath = '/';
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                  => 'required|max:255',
            'password'              => 'required|min:3|confirmed',
            'country_id'            => 'required|not_in:0',
            'address'               => 'required|max:255',
            //'account_number'        => 'required|max:12',

            'email'                 => 'required|email|max:255|unique:users',
            'password_confirmation' => 'required|min:3',
            'zip'                   => 'required|max:255',
            'city'                  => 'required|max:255',
            'phone_number_prefix'   => 'required|max:4',
            'phone_number'          => 'required|max:12',
            //'vat_number'            => 'required|max:12',
            'terms_conditions'      => 'accepted',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'                  => $data['name'],
            'password'              => bcrypt($data['password']),
            'country_id'            => $data['country_id'],
            'address'               => $data['address'],
            'account_number'        => $data['account_number'] ?: null,

            'email'                 => $data['email'],
            'zip'                   => $data['zip'],
            'city'                  => $data['city'],
            'phone_number'          => $data['phone_number_prefix'] . $data['phone_number'],
            'vat_number'            => $data['vat_number'] ?: null,
        ]);
    }
}
