@extends('Layouts.Tamu.app')
@section('content')
    <section class="flex flex-col h-[90vh] items-center chrome-md:justify-center gap-6 chrome-md:gap-8">
        <h1 class="font-extrabold text-3xl chrome-md:text-4xl chrome:text-5xl -mt-7 xl:mt-6 chrome-md:-mt-8 chrome:-mt-16 chrome:mb-1 tracking-wide">RESERVATION</h1>
        <div class="flex justify-center w-[60%] rounded-xl h-[75%] chrome-md:h-[75%] shadow-xl border">
            <div class="img rounded-l-xl bg-cover w-1/2 bg-no-repeat bg-center" style="background-image: url({{ url('form/images/cover.png') }});"></div>
            <form action="{{ url('simpan-bukutamu') }}" method="post" class="signin-form w-1/2 px-12 pt-[0.4rem] chrome-md:pt-2 flex flex-col justify-center chrome:gap-1">
                @csrf
                <div class="form-group chrome-md:text-base chrome:text-xl text-xs">
                    <label class="text-black" for="name">Name</label>
                    <input value="{{old('nama')}}" type="text" name="nama" class="form-control h-9 chrome-md:h-[2.7rem] chrome:h-14 text-xs chrome-md:text-sm placeholder:text-xs chrome-md:placeholder:text-sm chrome:placeholder:text-xl chrome:text-xl" placeholder="Name" required>
                </div>
                <div class="form-group chrome-md:text-base chrome:text-xl text-xs">
                    <label class="text-black" for="Kontak">Contact</label>
                    <input type="text" value="{{old('kontak')}}" name="kontak" class="form-control h-9 chrome-md:h-[2.7rem] chrome:h-14 text-xs chrome-md:text-sm placeholder:text-xs chrome-md:placeholder:text-sm chrome:placeholder:text-xl chrome:text-xl {{$errors->has('kontak') ? 'border-[1px] border-red-500' : ''}}" placeholder="Phone number" required>
                    @if ($errors->has('kontak'))
                        <p class="text-red-500 text-[0.64rem] chrome-md:text-xs chrome:text-base pl-2 mt-1">{{$errors->first('kontak')}}</p>
                    @endif
                </div>
                <div class="form-group chrome-md:text-base chrome:text-xl text-xs">
                    <label class="text-black" for="Alamat">Address</label>
                    <input type="text" value="{{old('alamat')}}" name="alamat" class="form-control h-9 chrome-md:h-[2.7rem] chrome:h-14 text-xs chrome-md:text-sm placeholder:text-xs chrome-md:placeholder:text-sm chrome:placeholder:text-xl chrome:text-xl" placeholder="Address" required>
                </div>
                <div class="form-group chrome-md:text-base chrome:text-xl text-xs">
                    <label class="text-black" for="Email">Email</label>
                    <input type="text" value="{{old('email_tamu')}}" name="email_tamu" class="form-control h-9 chrome-md:h-[2.7rem] chrome:h-14 text-xs chrome-md:text-sm placeholder:text-xs chrome-md:placeholder:text-sm chrome:placeholder:text-xl chrome:text-xl {{$errors->has('email_tamu') ? 'border-[1px] border-red-500' : ''}}" placeholder="Email" required>
                    @if ($errors->has('email_tamu'))
                        <p class="text-red-500 text-[0.64rem] chrome-md:text-xs chrome:text-base pl-2 mt-1">{{$errors->first('email_tamu')}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control bg-[#e3b04b] text-white mt-2 chrome-md:mt-3 chrome:mt-8 hover:bg-[#C99B3D] duration-200 rounded-md submit h-9 chrome-md:h-[2.7rem] chrome:h-14 text-sm chrome-md:text-base chrome:text-xl">Simpan</button>
                </div>
            </form>
        </div>
    </section>

    <script src="{{ asset('form/js/jquery.min.js') }}"></script>
    <script src="{{ asset('form/js/popper.js') }}"></script>
    <script src="{{ asset('form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('form/js/main.js') }}"></script>
@endsection
