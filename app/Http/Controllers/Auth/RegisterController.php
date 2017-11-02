<?php

namespace App\Http\Controllers\Auth;

use App\Magaza;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data['account-type'] == 1){
            return Validator::make($data, [
                'name' => 'required|max:255',
                'surname' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);
        }else{
            if($data['company-type'] == 1){
                return Validator::make($data, [
                    'name' => 'required|max:255',
                    'surname' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
                    'mobile-phone' => 'required|min:10',
                    'faaliyet-alani' => 'required',
                    'il-bilgisi' => 'required',
                    'ilce-bilgisi' => 'required',
                    'vergi-dairesi' => 'required',
                    'tc-vergi-no' => 'required|digits:11|unique:magaza_bilgileri,magaza_vergi_tc_no',
                    'sirket-telefon' => 'required|digits:10',
                    'adres-bilgisi' => 'required',
                ]);
            }else{
                return Validator::make($data, [
                    'name' => 'required|max:255',
                    'surname' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
                    'mobile-phone' => 'required|min:10',
                    'faaliyet-alani' => 'required',
                    'il-bilgisi' => 'required',
                    'ilce-bilgisi' => 'required',
                    'ticari-unvan' => 'required',
                    'vergi-dairesi' => 'required',
                    'tc-vergi-no' => 'required|digits:10|unique:magaza_bilgileri,magaza_vergi_tc_no',
                    'sirket-telefon' => 'required|digits:10',
                    'adres-bilgisi' => 'required',
                ]);
            }
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['account-type'] == 1){
            return User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'fk_user_uyelik_tip_id' => $data['account-type'],
            ]);
        }else{
            if($data['company-type'] == 1){
                $user = User::create([
                    'name' => $data['name'],
                    'surname' => $data['surname'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'mobile-phone' => $data['mobile-phone'],
                    'fk_user_uyelik_tip_id' => $data['account-type'],
                ]);
                $insertedID = $user->id;
                $ticariUnvan = $user->name ." ". $user->surname;
                Magaza::create([
                    'yetkili_id' => $insertedID,
                    'magaza_adi' => "tanımsız",
                    'magaza_faaliyet' => $data['faaliyet-alani'],
                    'fk_magaza_ulke_id' => 1,
                    'fk_magaza_il_id' => $data['il-bilgisi'],
                    'fk_magaza_ilce_id' => $data['ilce-bilgisi'],
                    'magaza_ticari_unvan' => $ticariUnvan,
                    'magaza_vergi_dairesi' => $data['vergi-dairesi'],
                    'magaza_vergi_tc_no' => $data['tc-vergi-no'],
                    'magaza_tel_no' => $data['sirket-telefon'],
                    'magaza_adres' => $data['adres-bilgisi'],
                    'fk_magaza_sirket_tip_id' => $data['company-type'],
                ]);
                return $user;
            }else{
                $user = User::create([
                    'name' => $data['name'],
                    'surname' => $data['surname'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'mobile-phone' => $data['mobile-phone'],
                    'fk_user_uyelik_tip_id' => $data['account-type'],
                ]);
                $insertedID = $user->id;
                Magaza::create([
                    'yetkili_id' => $insertedID,
                    'magaza_adi' => "tanımsız",
                    'magaza_faaliyet' => $data['faaliyet-alani'],
                    'fk_magaza_ulke_id' => 1,
                    'fk_magaza_il_id' => $data['il-bilgisi'],
                    'fk_magaza_ilce_id' => $data['ilce-bilgisi'],
                    'magaza_ticari_unvan' => $data['ticari-unvan'],
                    'magaza_vergi_dairesi' => $data['vergi-dairesi'],
                    'magaza_vergi_tc_no' => $data['tc-vergi-no'],
                    'magaza_tel_no' => $data['sirket-telefon'],
                    'magaza_adres' => $data['adres-bilgisi'],
                    'fk_magaza_sirket_tip_id' => $data['company-type'],
                ]);
                return $user;
            }

        }
    }
}
