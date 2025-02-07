<header class='shadow-md font-popins tracking-wide relative z-50'>
    <section class="py-3 bg-pink-200 px-10 flex justify-between items-center border-b border-pink-300 shadow-md">
        <p class="text-sm font-medium text-gray-700 flex items-center">
            <strong class="mr-2 text-pink-600">📍 Address:</strong> {{ systemSetting()?->address }}
        </p>
        <p class="text-sm font-medium text-gray-700 flex items-center">
            <strong class="mr-2 text-pink-600">📞 Contact:</strong> {{ systemSetting()?->phone_number }}
        </p>
    </section>

    <div class='flex flex-wrap items-center justify-between gap-4 px-10 py-4  min-h-[70px] bg-pink-700'>
        <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/logo.png') }}" alt="logo" class='w-36' />
        </a>

        <div id="collapseMenu"
            class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose"
                class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex lg:gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-pink-700 max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='mb-6 hidden max-lg:block'>
                    <a href="javascript:void(0)"><img src="{{ asset('assets/frontend/logo.png') }}" alt="logo"
                            class='w-36' />
                    </a>
                </li>
                <li class='max-lg:border-b max-lg:py-3 px-3'>
                    <a href='{{ route('welcome') }}'
                        class='hover:text-purple-700  block font-medium text-[19px] {{ request()->is('/') ? 'text-purple-700' : 'text-white hover:text-purple-700' }}'>Home</a>
                </li>
                <li class='max-lg:border-b max-lg:py-3 px-3'><a href='#about'
                        class='hover:text-purple-700 text-white block font-medium text-[19px] {{ request()->is('/' . 'about') ? 'text-purple-700' : 'text-white hover:text-purple-700' }}'>About</a>
                </li>
                <li class='group max-lg:border-b max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                        class='hover:text-purple-700 text-white text-[19px] font-medium lg:hover:fill-[#007bff] block '>Services<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                            class="ml-1 inline-block text-white hover:text-purple-700 transition-colors duration-300"
                            viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>

                    </a>
                    <ul
                        class='absolute shadow-lg bg-white space-y-3 lg:top-[3.25rem] max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>

                        @foreach (\App\ServiceType::cases() as $service)
                            <li class='border-b py-1'>
                                <a href="{{ route('serviceList', $service) }}"
                                    class='hover:text-purple-700 text-gray-600 text-[16px] font-medium block'>
                                    {{ $service->label() }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                        class='hover:text-purple-700 text-white block font-medium text-[19px]'>Courses</a>
                </li>

                <li class='max-lg:border-b max-lg:py-3 px-3'><a href='#contact'
                        class='hover:text-purple-700 text-white block font-medium text-[19px]'>Contact</a>
                </li>
                @if (Auth::guard('customer')->check())
                    <li class='group max-lg:border-b max-lg:py-3 relative float-end'>
                        <a href='javascript:void(0)'
                            class='hover:text-purple-700 text-white text-[19px] font-medium lg:hover:fill-[#007bff] block '>{{ auth()->guard(name: 'customer')->user()->name }}<svg
                                xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                class="ml-1 inline-block text-white hover:text-purple-700 transition-colors duration-300"
                                viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                    data-name="16" data-original="#000000" />
                            </svg>

                        </a>
                        <ul
                            class='absolute shadow-lg bg-white space-y-3 lg:top-[3.25rem] max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500'>

                            <li class='border-b py-1'>
                                <a href="{{ route('booking') }}"
                                    class='hover:text-purple-700 text-gray-600 text-[16px] font-medium block'>
                                    Book an appointment
                                </a>
                            </li>
                            <li class='border-b py-1'>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class='hover:text-purple-700 text-gray-600 text-[16px] font-medium block'>
                                        Log Out
                                    </button>
                                </form>
                            </li>


                        </ul>
                    </li>
                @else
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='{{ route('customerLogin') }}'
                            class='hover:text-purple-700 text-white block font-medium text-[19px]'>Book an
                            Appointment</a>
                    </li>
                @endif
            </ul>
        </div>
        <form action="{{ route('search') }}" method="GET">
            <input
                class="py-3 ps-10 pe-4 block w-full border-gray-200 rounded-lg 
            text-sm focus:border-blue-500 focus:ring-blue-500 
            disabled:opacity-50 disabled:pointer-events-none 
            dark:bg-neutral-900 dark:border-neutral-700 
            dark:text-neutral-400 dark:placeholder-neutral-500 
            dark:focus:ring-neutral-600"
                name="query" type="text" role="combobox" aria-expanded="false"
                placeholder="Search.." value="{{ request('query') }}"
                data-hs-combo-box-input="">
        </form>
        <div class='flex max-lg:ml-auto'>
            <button id="toggleOpen" class='lg:hidden'>
                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</header>
