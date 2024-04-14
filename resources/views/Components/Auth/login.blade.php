<div id="login-modal" class="fixed top-0 left-0 flex justify-center items-center w-screen h-screen bg-black/70 z-[1000]">
    <div class="relative shadow-rata border-[0.5px] border-[#e3b04b] shadow-[#e3b04b] rounded-md flex flex-col items-center justify-center gap-5 bg-white w-1/4 chrome-md:w-[25%] chrome:w-1/4 chrome:h-1/2 py-10 chrome-md:py-12 px-[2rem] chrome:py-12">
        <button class="absolute right-[0.2rem] top-1 text-sm rounded-full hover:scale-110 duration-200 text-white z-10" onclick="closeModal()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#D24545" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 chrome:w-8 chrome:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>              
        </button>
        <img src="assets/img/pelantikan22.jpg" alt="" class="h-full absolute top-0 w-full object-cover rounded-md opacity-80">
        <h1 class="font-extrabold text-5xl chrome-md:text-6xl chrome:text-7xl z-10">Admin</h1>
        <form action="/login" method="POST" class="relative flex flex-col items-center gap-4 justify-center h-full w-full z-10">
            @csrf
            <input type="text" required value="{{old('email')}}" class="text-black shadow-md shadow-[#e3b04b] focus:outline-none h-10 chrome-md:h-12 chrome:h-14 rounded-md w-full placeholder:text-sm chrome:placeholder:text-lg chrome:text-lg pl-2" name="email" id="email" placeholder="Email...">
            <input type="password" required class="text-black chrome:mb-7 shadow-md shadow-[#e3b04b] focus:outline-none h-10 chrome-md:h-12 chrome:h-14 rounded-md w-full placeholder:text-sm chrome:placeholder:text-lg chrome:text-lg pl-2" name="password" id="password" placeholder="Password...">
            @if ($errors->has('email'))
                <p class="text-white absolute bottom-14 chrome-md:bottom-[3.9rem] chrome:bottom-[6.2rem] w-full py-1.5 px-3 rounded-md text-center font-bold pl-2 text-sm chrome:text-lg bg-red-600/60 shadow-md shadow-red-600">{{$errors->first('email')}}</p>
            @endif
            <button type="submit" class="mt-5 chrome:text-lg w-full text-white font-bold py-2 px-4 h-10 chrome-md:h-12 rounded-md shadow-xl chrome:h-14 shadow-[#e3b04b]/50 bg-[#e3b04b] drop-shadow-xl duration-200 hover:scale-[1.03]"> Login </button>
        </form>
    </div>
</div>
<script>
    const loginModal = document.getElementById('login-modal');

    const closeModal = () => {                                                                                                                                                           
        loginModal.style.display = 'none';
    };
</script>