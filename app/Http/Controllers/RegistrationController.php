<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   /* private $Email;*/
    function registration()
    {

   /* return view ('Registration',['Email'=>'abc@gmail.com','Password'=>'1234','RepeatPass'=>'1234']);*/
   return view ('Registration')
        ->with ('Email','abc@gmail.com')
        ->with ('policeId','1234')
        ->with ('licensenum','45678')
        ->with ('station','Ramna')
        ->with ('Password','123')
        ->with ('RepeatPass','123');

    }

    function getregister(Request $request)
    {
        $request->validate(
        ['Email'=>'required|min:3|string',
        'policeId'=>'required|min:18|numeric',
        'licensenum'=>'required|min:7|string',
        'Password'=>'required|min:8|string',
        'station'=>'required|min:18|numeric',
        ],

        [
        'Email.required' =>'Email required',
        'Email.min' =>'Enter min 3 char',

        'policeId.required' =>'policeId required',
        'policeId.min' =>'Enter min 18 char',

        'licensenum.required' =>'licensenum required',
        'licensenum.min' =>'Enter min 7 char',

        'station.required' =>'station required',
        'station.min' =>'Enter min 18 char',

        'Password.required' =>'Password required',
        'Password.min' =>'Enter min 8 char',
        ]);
    }

}
