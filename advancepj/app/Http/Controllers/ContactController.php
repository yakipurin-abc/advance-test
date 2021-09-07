<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post()
    {
        return view('confilm', ['result' => '']);
    }
    public function posted(ClientRequest $request)
    {
        $inputs = $request->all();
        $gender = $request->gender;
        if (isset($inputs['postcode']))
        $inputs['postcode'] = mb_convert_kana($inputs['postcode'] ,'as');
        if($gender == 1){
            return view('confirm', ['inputs' => $inputs, 'gender' => '男性']);
        }else{
            return view('confirm', ['inputs' => $inputs, 'gender' => '女性']);
        }
    }

    public function send(ClientRequest $request)
    {
        $action = $request->input('action');
        $inputs = $request->except('action');
        if ($action !== 'submit') {
            return view('fix', ['inputs'=>$inputs]);
        } else {
            $firstname = $request->input('first-name');
            $lastname = $request->input('last-name');
            $fullname = $firstname.$lastname;
            Contact::create([
                'fullname' => $fullname,
                'gender' => $request->input('gender'),
                'email' => $request->input('email'),
                'postcode' => $request->input('postcode'),
                'address' => $request->input('address'),
                'building_name' => $request->input('building_name'),
                'opinion' => $request->input('opinion'),
            ]);
            return view('thanks');
        }
    }
    
}
