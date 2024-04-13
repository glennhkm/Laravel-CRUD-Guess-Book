<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tamu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class TamuController extends Controller
{
    public function index(){
        $data = Tamu::all();
        return view('Pages.Admin.DataTamu.index', compact('data'));
    }

    public function formTambah(){
        return view('Pages.Admin.DataTamu.formTambah');
    }

    public function simpanData(Request $request){
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
            $newTamu = Tamu::create($validatedData);
            // toast($newTamu->nama . ' saved successfully!','success')->position('top')->autoClose(3000);
            return redirect('admin/tamu')->with('status', $newTamu->nama . ' saved successfully!');
        }
        else {
            return redirect('/')->withInput($request->only(['nama', 'kontak', 'alamat', 'email_tamu']));
        }

    }

    public function formEdit($id){
        $data = Tamu::find($id);

        return view('Pages.Admin.DataTamu.formEdit',compact('data'));
    }

    public function updateTamu(Request $request){
        $id = $request->id;

        $validatedData = $request->validate([
            'nama' => 'required',
            'kontak' => ['required', 'regex:/^(\+62|0|62)(\d{8,15})$/'],
            'alamat' => 'required',
            'email_tamu' => ['required','email', Rule::unique('tamu', 'email_tamu')->ignore($id),]
        ], [
            'kontak.regex' => 'Your phone number is not valid!',
            'email_tamu.email' => 'Your email is not valid!',
            'email_tamu.unique' => 'Email has been used before!',
        ]);

        if ($validatedData) {
            $data = Tamu::findOrFail($id);
            $data->update($validatedData);
            return redirect('admin/tamu')->with('status', $data->nama . ' updated successfully!');
        }
        else {
            return redirect('admin/form-edit/' .  $id)->withInput($request->only(['nama', 'kontak', 'alamat', 'email_tamu']));
        }
    }

    public function hapusTamu(request $request){
        $id = $request->id;
        $data = Tamu::find($id);
        $data->delete();

        // toast('Data deleted successfully!','success')->position('top')->autoClose(3000);
        return redirect('admin/tamu')->with('status', 'Data deleted successfully!');
    }
}
