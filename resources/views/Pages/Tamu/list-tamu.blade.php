@extends('Layouts.Tamu.app')
@section('content')
    <section class="w-full h-[90vh] flex flex-col items-center gap-6 chrome-md:gap-8 chrome-md:justify-center">
        <h1 class="font-extrabold text-3xl chrome-md:text-4xl chrome:text-5xl -mt-7 xl:mt-6 chrome-md:-mt-8 chrome:-mt-16 chrome:mb-1 tracking-wide">GUEST LIST</h1>
        <div class="w-[60%] h-[75%] chrome-md:h-[75%] rounded-md shadow-xl border relative scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thin scrollbar-thumb-[#e3b04b]/85 scrollbar-track-transparent overflow-y-scroll">
            <table class="w-full">
                <thead class="bg-[#e3b04b] sticky top-0">
                    <tr class="text-black h-12 chrome:h-14 rounded-md chrome:text-xl">
                        <th class=" text-center">No</th>
                        <th class=" text-center border-l">Name</th>
                        <th class=" text-center border-l">Reservation time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tamuAll as $tamu)
                        <tr class="bg-white h-10 chrome:h-14 chrome:text-xl">
                            <td class=" border border-black text-center">{{ $loop->iteration }}</td>
                            <td class="pl-3 border border-black">{{ $tamu->nama }}</td>
                            <td class="pl-3 border border-black">{{ $tamu->created_at->locale('en')->translatedFormat('l, d F Y - H:i:s') }}</td>
                        </tr>
                    @endforeach
                    @for ($i = 0; $i < 15 - count($tamuAll); $i++)
                        <tr class="bg-white h-10 chrome:h-14">
                            <td class="pl-3 border border-black"></td>
                            <td class="pl-3 border border-black"></td>
                            <td class="pl-3 border border-black"></td>
                        </tr>   
                    @endfor
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
