@extends('Layouts.Admin.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width:40%">
            <div class="card-header">
                Edit Guess
            </div>
            <div class="card-body">
                <form action= "{{url('admin/update-data')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" required name="nama" id="name" aria-describedby="Name" value="{{$data->nama}}">
                    </div>
                     <div class="form-group">
                        <label for="kontak">Contact</label>
                        <input type="kontak" class="form-control" required name="kontak" id="tlpon" aria-describedby="Contact" value="{{ $errors->has('kontak') ? old('kontak') : $data->kontak }}">
                        @if ($errors->has('kontak'))
                            <p class="text-xs pl-1 text-danger mt-1">{{$errors->first('kontak')}}</p>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="alamat">Address</label>
                        <input type="alamat" class="form-control" required name="alamat" id="alamat" aria-describedby="Address" value="{{$data->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="email_tamu">Email</label>
                        <input type="email_tamu" class="form-control" required name="email_tamu" id="email_tamu" aria-describedby="Email" value="{{ $errors->has('email_tamu') ? old('email_tamu') : $data->email_tamu }}">
                        @if ($errors->has('email_tamu'))
                            <p class="text-xs pl-1 text-danger mt-1">{{$errors->first('email_tamu')}}</p>
                        @endif
                    </div>
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>

        </div>
    </div>
@endsection
