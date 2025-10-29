<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        public function form(){
            return view("page.biodata");
        }

        public function bergabung(Request $request)
        {
            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $gender = $request->input('Gender');
            $nationality = $request->input('Nationality');
            $languagespoken = $request->input('LanguageSpoken');
            $bio = $request->input('Bio');

            return view('page.bergabung', ['firstname' => $firstname, 'lastname' => $lastname, 'Gender' => $gender, 'Nationality' => $nationality, 'LanguageSpoken' => $languagespoken, 'Bio' => $bio]);
        }
}
