<div class="w-full h-16 chrome-md:h-20 chrome:h-24 bg-white shadow-md text-black flex justify-between px-14 items-center">
    <a class="hover:text-[#e3b04b] font-bold hover:scale-110 duration-150 text-lg chrome:text-xl" href="/">ATHAR RAYYAN M</a>
    <ul class=" list-none flex gap-10 items-center">
        <li class="hover:scale-110 duration-150">
            <a class="hover:text-[#e3b04b] font-semibold text-sm chrome-md:text-base chrome:text-xl {{request()->is('/') ? 'text-[#e3b04b]' : ''}}" href="/">Reservation</a>
        </li>
        <li class="hover:scale-110 duration-150">
            <a class="hover:text-[#e3b04b] font-semibold text-sm chrome-md:text-base chrome:text-xl {{request()->is('guest-list') ? 'text-[#e3b04b]' : ''}}" href="/guest-list">Guest List</a>
        </li>
        <li class="hover:scale-[1.03] duration-150">
            <a class=" font-semibold text-white" href="/admin">
                <button class="hover:bg-[#C99B3D] bg-[#e3b04b] flex justify-center gap-2 px-3 lg:px-[2rem] py-1.5 chrome:px-[1.8rem] chrome-md:py-2 chrome:py-3 rounded-md items-center text-sm chrome-md:text-base chrome:text-xl">
                    Admin
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                </button>
            </a>
        </li>
    </ul>
</div>
