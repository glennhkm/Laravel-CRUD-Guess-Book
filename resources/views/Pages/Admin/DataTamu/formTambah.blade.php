@extends('Layouts.Admin.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width:40%">
            <div class="card-header">
                Add New Guest
            </div>
            <div class="card-body">
                <form action= "{{url('admin/simpan-data')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input value="{{old('nama')}}" type="name" class="form-control" required name="nama" id="name" aria-describedby="Name">
                    </div>
                     <div class="form-group">
                        <label for="kontak">Contact</label>
                        <input value="{{old('kontak')}}" type="kontak" class="form-control" required name="kontak" id="kontak" aria-describedby="Contact">
                        @if ($errors->has('kontak'))
                            <p class="text-danger text-xs pl-2 mt-1">{{$errors->first('kontak')}}</p>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="alamat">Address</label>
                        <input value="{{old('alamat')}}" type="alamat" class="form-control" required name="alamat" id="alamat" aria-describedby="Address">
                    </div>
                    <div class="form-group">
                        <label for="email_tamu">Email</label>
                        <input value="{{old('email_tamu')}}" type="email_tamu" class="form-control" required name="email_tamu" id="email_tamu" aria-describedby="Email">
                        @if ($errors->has('email_tamu'))
                            <p class="text-danger text-xs pl-2 mt-1">{{$errors->first('email_tamu')}}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>

        </div>
    </div>
@endsection
