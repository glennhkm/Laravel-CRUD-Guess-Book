@extends('Layouts.Tamu.app')
@section('content')
    <section class="w-full h-[90vh] flex flex-col items-center gap-6 xl:gap-8 xl:justify-center">
        <h1 class="font-extrabold text-3xl xl:text-4xl 2xl:text-5xl -mt-7 xl:-mt-12 2xl:-mt-16 2xl:mb-1 tracking-wide">GUESS LIST</h1>
        <div class="w-[60%] h-[75%] xl:h-[75%] rounded-md shadow-xl border relative scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thin scrollbar-thumb-[#e3b04b]/85 scrollbar-track-transparent overflow-y-scroll">
            <table class="w-full">
                <thead class="bg-[#e3b04b] sticky top-0">
                    <tr class="text-black h-12 2xl:h-14 rounded-md 2xl:text-xl">
                        <th class=" text-center">No</th>
                        <th class=" text-center border-l">Name</th>
                        <th class=" text-center border-l">Reservation time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tamuAll as $tamu)
                        <tr class="bg-white h-10 2xl:h-14 2xl:text-xl">
                            <td class=" border border-black text-center">{{ $loop->iteration }}</td>
                            <td class="pl-3 border border-black">{{ $tamu->nama }}</td>
                            <td class="pl-3 border border-black">{{ $tamu->created_at->locale('en')->translatedFormat('l, d F Y - H:i:s') }}</td>
                        </tr>
                    @endforeach
                    @for ($i = 0; $i < 15 - count($tamuAll); $i++)
                        <tr class="bg-white h-10 2xl:h-14">
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
