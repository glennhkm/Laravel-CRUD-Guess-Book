<?php

namespace App\Http\Controllers\USer;

use App\Http\Controllers\Controller;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index () {
        return view('Pages.Tamu.index');
    }

    public function simpanTamu(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required',
            'kontak' => ['required', 'regex:/^(\+62|0|62)(\d{8,15})$/'],
            'alamat' => 'required',
            'email_tamu' => 'required|email|unique:tamu,email_tamu',
        ], [
            'kontak.regex' => 'Your phone number is not valid!',
            'email_tamu.email' => 'Your email is not valid!',
            'email_tamu.unique' => 'Email has been used before!',
        ]);

        if ($validatedData) {
            Tamu::create($validatedData);
            toast('Reservation success!','success')->position('top')->autoClose(3000);
            return redirect('/');
        }
        else {
            return redirect('/')->withInput($request->only(['nama', 'kontak', 'alamat', 'email_tamu']));
        }
    }

    public function showTamu() {
        $tamuAll = Tamu::all();
        return view('Pages.Tamu.list-tamu', compact('tamuAll'));
    }
}
