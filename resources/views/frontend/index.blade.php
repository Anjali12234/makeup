@extends('frontend.layouts.master')
@section('container')
    <x-frontend.carousel :sliders="sliders()" />
    <div class="w-full  bg-pink-200" id="about">
        <div class="flex flex-col md:flex-row items-center gap-[3.25rem] mb-16">
            <!-- Video -->
            <div class="w-full md:w-1/2 mt-16 ml-[4.25rem]">
                <iframe src="{{ $about?->video_url }}" frameborder="0" class="w-full h-72 md:h-80 ">
                </iframe>
            </div>


            <!-- Text -->
            <div class="w-full md:w-1/2 p-4 mt-12">
                <h1 class="text-xl font-semibold text-pink-700 font-popins text-center">KNOW</h1>
                <h1 class="text-3xl font-bold font-lora text-center ">{{ $about?->title }}</h1>
                <div class="text-gray-600 mt-5 mr-16 text-justify text-lg font-medium">
                    {!! $about?->description !!}

                </div>
            </div>
        </div>

        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
                class="fill-current text-white"></path>
        </svg>

    </div>
    <section id="Projects"
        class="w-fit m-24 grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center gap-[5.25rem] justify-center mt-10 mb-5">

        <div class="w-[23rem] mt-5 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

            <div class="px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-plant-2 text-pink-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M2 9a10 10 0 1 0 20 0" />
                    <path d="M12 19a10 10 0 0 1 10 -10" />
                    <path d="M2 9a10 10 0 0 1 10 10" />
                    <path d="M12 4a9.7 9.7 0 0 1 2.99 7.5" />
                    <path d="M9.01 11.5a9.7 9.7 0 0 1 2.99 -7.5" />
                </svg>
            </div>

            <!-- Product Details -->
            <div class="px-4 py-3 w-[23rem]">
                <p class="text-2xl font-semibold text-black truncate block capitalize font-slabo">Wellness</p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <p class="font-lora text-base text-gray-600 hover:text-gray-800">
                        Our holistic approach encompasses treatments that nurture both body and mind, aiming to leave
                        you feeling refreshed, rejuvenated, and balanced.
                    </p>

                </div>
            </div>
        </div>
        <div class="w-[23rem] mt-5 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

            <div class="px-4 py-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-laurel-wreath-1 text-pink-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M6.436 8a8.6 8.6 0 0 0 -.436 2.727c0 4.017 2.686 7.273 6 7.273s6 -3.256 6 -7.273a8.6 8.6 0 0 0 -.436 -2.727" />
                    <path d="M14.5 21s-.682 -3 -2.5 -3s-2.5 3 -2.5 3" />
                    <path
                        d="M18.52 5.23c.292 1.666 -1.02 2.77 -1.02 2.77s-1.603 -.563 -1.895 -2.23c-.292 -1.666 1.02 -2.77 1.02 -2.77s1.603 .563 1.895 2.23" />
                    <path
                        d="M21.094 12.14c-1.281 1.266 -3.016 .76 -3.016 .76s-.454 -1.772 .828 -3.04c1.28 -1.266 3.016 -.76 3.016 -.76s.454 1.772 -.828 3.04" />
                    <path
                        d="M17.734 18.826c-1.5 -.575 -1.734 -2.19 -1.734 -2.19s1.267 -1.038 2.767 -.462c1.5 .575 1.733 2.19 1.733 2.19s-1.267 1.038 -2.767 .462" />
                    <path
                        d="M6.267 18.826c1.5 -.575 1.733 -2.19 1.733 -2.19s-1.267 -1.038 -2.767 -.462c-1.5 .575 -1.733 2.19 -1.733 2.19s1.267 1.038 2.767 .462" />
                    <path
                        d="M2.906 12.14c1.281 1.266 3.016 .76 3.016 .76s.454 -1.772 -.828 -3.04c-1.281 -1.265 -3.016 -.76 -3.016 -.76s-.454 1.772 .828 3.04" />
                    <path
                        d="M5.48 5.23c-.292 1.666 1.02 2.77 1.02 2.77s1.603 -.563 1.895 -2.23c.292 -1.666 -1.02 -2.77 -1.02 -2.77s-1.603 .563 -1.895 2.23" />
                    <path d="M11 9l1 -1v6" />
                </svg>
            </div>
            <!-- Product Details -->
            <div class="px-4 py-3 w-[23rem]">
                <p class="text-2xl font-semibold text-black truncate block capitalize font-slabo">Beauty</p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <p class="font-lora text-base text-gray-600 hover:text-gray-800">
                        Sarinda.artistry seamlessly merges the realms of beauty and wellness, offering a sanctuary
                        where indulgence and self-care intertwine
                    </p>

                </div>
            </div>
        </div>
        <div class="w-[23rem] mt-5 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

            <div class="px-4 py-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-loom text-pink-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M17.464 6.518a6 6 0 1 0 -3.023 7.965" />
                    <path d="M17.482 17.464a6 6 0 1 0 -7.965 -3.023" />
                    <path d="M6.54 17.482a6 6 0 1 0 3.024 -7.965" />
                    <path d="M6.518 6.54a6 6 0 1 0 7.965 3.024" />
                </svg>
            </div>
            <!-- Product Details -->
            <div class="px-4 py-3 w-[23rem]">
                <p class="text-2xl font-semibold text-black truncate block capitalize font-slabo">Confidence</p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <p class="font-lora text-base text-gray-600 hover:text-gray-800">
                        With every treatment and every touch, we strive to instill a sense of self-assurance that
                        radiates through your every move.
                    </p>

                </div>
            </div>
        </div>
        <div class="w-[23rem] mt-5 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

            <div class="px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-bulb text-pink-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" />
                    <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" />
                    <path d="M9.7 17l4.6 0" />
                </svg>
            </div>

            <!-- Product Details -->
            <div class="px-4 py-3 w-[23rem]">
                <p class="text-2xl font-semibold text-black truncate block capitalize font-slabo">Glow</p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <p class="font-lora text-base text-gray-600 hover:text-gray-800">
                        Experience our transformative skincare rituals, designed to unveil your natural radiance and
                        enhance your inner glow, leaving your skin luminous and vibrant. .
                    </p>

                </div>
            </div>
        </div>
        <div class="w-[23rem] mt-5 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

            <div class="px-4 py-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-moon-stars text-pink-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    <path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
                    <path d="M19 11h2m-1 -1v2" />
                </svg>
            </div>
            <!-- Product Details -->
            <div class="px-4 py-3 w-[23rem]">
                <p class="text-2xl font-semibold text-black truncate block capitalize font-slabo">Elegance </p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <p class="font-lora text-base text-gray-600 hover:text-gray-800">
                        Experience elegance at Sarinda.artistry. Our personalized services enhance your unique
                        beauty effortlessly, ensuring you radiate grace.
                    </p>

                </div>
            </div>
        </div>
        <div class="w-[23rem] mt-5 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

            <div class="px-4 py-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-refresh text-pink-500">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                </svg>
            </div>
            <!-- Product Details -->
            <div class="px-4 py-3 w-[23rem]">
                <p class="text-2xl font-semibold text-black truncate block capitalize font-slabo">Empowerment</p>

                <!-- View Product Button -->
                <div class="mt-4">
                    <p class="font-lora text-base text-gray-600 hover:text-gray-800">
                        Feel empowered with our transformative treatments. From subtle enhancements to bold
                        transformations, embrace your true self confidently.
                    </p>

                </div>
            </div>
        </div>


    </section>
    <div class="w-full h-8 mt-28">
        <svg viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 43.9999C106.667 43.9999 213.333 7.99994 320 7.99994C426.667 7.99994 533.333 43.9999 640 43.9999C746.667 43.9999 853.333 7.99994 960 7.99994C1066.67 7.99994 1173.33 43.9999 1280 43.9999C1386.67 43.9999 1440 19.0266 1440 9.01329V100H0V43.9999Z"
                class="fill-current text-pink-200"></path>
        </svg>
    </div>
    <div class="w-full bg-gradient-to-b from-pink-200 mt-5 to-pink-500">
        <div class="mt-14">

            <h1 class="text-xl font-semibold text-pink-700 font-popins text-center ">Our</h1>
            <h1 class="text-3xl font-bold font-lora text-center ">SERVICES OFFERED</h1>
            <section id="Projects"
                class="w-fit m-24 grid grid-cols-1 lg:grid-cols-4 h-full md:grid-cols-2 justify-items-center gap-[1.25rem] 
                        justify-center mt-10">

                        @foreach ($services as $service)
                        
                       
                <div class="max-w-sm  mb-10 rounded overflow-hidden shadow-lg bg-white">
                    <a href="{{route('serviceDetail',$service)}}"
                        target="_blank"><img class="w-full h-[21rem]"
                            src="{{$service->image}}"
                            alt="{{$service->title}}"></a>
                    <div class="px-6 py-4">
                        <div class="font-bold text-lg text-center mb-2 text-pink-500 hover:text-pink-800 font-popins">
                            {{$service->title}}</div>
                        <div class="text-gray-700 text-sm hover:text-gray-900 font-lora text-justify">
                            {!! Str::limit($service->description, 100, '...') !!}
                        </div>
                    </div>

                </div>
                @endforeach
               
            </section>
        </div>
        <div class="mt-16 px-[23rem] text-center">
            <h1 class="text-xl font-semibold text-pink-700 font-popins">Appointment</h1>
            <h1 class="text-5xl font-bold font-lora">Want to make booking or have any question?</h1>
            <p class="mt-5 text-base text-gray-700 font-lora">Call us on <span class="text-gray-900">
                    +977-9856047166</span></p>
            <p class="font-lora text-base text-gray-700">or simply book an appointment</p>
            <button
                class="bg-gray-700 hover:bg-transparent border border-white px-6 py-2 mb-10 mt-4 rounded-lg text-white">Book
                an appointment</button>
        </div>
    </div>
    <div class="w-full  bg-pink-200">
        <div class="flex flex-col md:flex-row items-center gap-[5.25rem] mb-16 mx-[21rem]">
            <div class="mt-28 mb-16">
                <div class="flex text-center">

                    <p id="counter" class="text-5xl font-bold text-gray-700 hover:text-gray-900">0 </p>
                    <p class="text-4xl font-bold text-gray-700 hover:text-gray-900">+</p>
                </div>
                <p class="text-sm text-gray-700 mt-2 tracking-[0.25rem]">EXPERTS</p>
            </div>
            <div class="mt-28 mb-16">
                <div class="flex text-center">

                    <p id="clientCounter" class="text-5xl font-bold text-gray-700 hover:text-gray-900">0 </p>
                    <p class="text-4xl font-bold text-gray-700 hover:text-gray-900">+</p>
                </div>
                <p class="text-sm text-gray-700 mt-2 tracking-[0.25rem]">CLIENT</p>
            </div>
            <div class="mt-28 mb-16">
                <div class="flex text-center">

                    <p id="offerCounter" class="text-5xl font-bold text-gray-700 hover:text-gray-900">0 </p>
                    <p class="text-4xl font-bold text-gray-700 hover:text-gray-900">+</p>
                </div>
                <p class="text-sm text-gray-700 mt-2 tracking-[0.25rem]">OFFERS</p>
            </div>
            <div class="mt-28 mb-16">
                <div class="flex text-center">

                    <p id="privateCounter" class="text-5xl font-bold text-gray-700 hover:text-gray-900">0 </p>
                    <p class="text-4xl font-bold text-gray-700 hover:text-gray-900">+</p>
                </div>
                <p class="text-sm text-gray-700 mt-2 tracking-[0.25rem]">PRIVATE ROOM</p>
            </div>


        </div>

    </div>
    <div class="text-center mt-8" id="contact">

        <h1 class="text-xl font-semibold text-pink-700 font-popins">What Are You Waiting For...</h1>
        <h1 class="text-5xl font-bold font-lora">Conatact Us</h1>
    </div>
    <div class="relative w-full sm:w-auto block md:grid grid-cols-2 mt-5">
        <div class="mx-5 my-5 lg:my-10">

            <div class="mt-4">
                <div
                    class="grid sm:grid-cols-2 items-start gap-10 p-8  max-w-4xl bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md font-[sans-serif]">
                    <div>
                        <h1 class="text-gray-800 text-3xl font-extrabold">Let's Talk</h1>
                        <p class="text-sm text-gray-500 mt-4">Have some big idea or brand to develop and need help?
                            Then
                            reach out we'd love to hear about your project and provide help.</p>

                        <div class="mt-12">
                            <h2 class="text-gray-800 text-base font-bold">Email</h2>
                            <ul class="mt-4">
                                <li class="flex items-center">
                                    <div
                                        class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill='#007bff' viewBox="0 0 479.058 479.058">
                                            <path
                                                d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                                                data-original="#000000" />
                                        </svg>
                                    </div>
                                    <a href="javascript:void(0)" class="text-[#007bff] text-sm ml-4">
                                        <h1 class="block">Mail</h1>
                                        <strong>{{ systemSetting()?->email }}</strong>
                                    </a>
                                </li>
                            </ul>
                            <h2 class="text-gray-800 text-base font-bold mt-5">Location</h2>

                            <ul class="mt-4">
                                <li class="flex items-center mt-5">
                                    <div
                                        class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill="#007bff" viewBox="0 0 512 512">
                                            <path
                                                d="M256 0C167.64 0 96 71.64 96 160c0 112 160 352 160 352s160-240 160-352c0-88.36-71.64-160-160-160zm0 240c-44.11 0-80-35.89-80-80s35.89-80 80-80 80 35.89 80 80-35.89 80-80 80z" />
                                        </svg>
                                    </div>
                                    <a href="javascript:void(0)" class="text-[#007bff] text-sm ml-4">
                                        <h1 class="block">Address</h1>
                                        <strong>{{ systemSetting()?->address }}</strong>
                                    </a>
                                </li>

                            </ul>
                            <h2 class="text-gray-800 text-base font-bold mt-5">Contact</h2>

                            <ul class="mt-4">
                                <li class="flex items-center mt-5">
                                    <div
                                        class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill="#007bff" viewBox="0 0 512 512">
                                            <path
                                                d="M493.4 24.6C466.9-1.9 425.9-1.9 399.4 24.6L349.6 74.4c-14.2 14.2-18.6 35.3-11 53.5 7.1 16.8 15.6 33.5 25.4 49.8 9.5 15.8 21.7 30.4 36.3 43.2l-36.2 36.2c-83.2-56.6-152.5-125.8-209-209l36.2-36.2c12.8 14.6 27.4 26.8 43.2 36.3 16.3 9.8 32.9 18.3 49.8 25.4 18.2 7.6 39.3 3.2 53.5-11l49.8-49.8c26.5-26.5 26.5-67.5 0-94L493.4 24.6zM380.5 93.5l49.8-49.8c6.2-6.2 16.4-6.2 22.6 0l19.8 19.8c6.2 6.2 6.2 16.4 0 22.6L423 136.1c-6.2 6.2-16.4 6.2-22.6 0l-19.8-19.8c-6.2-6.2-6.2-16.4 0-22.8zm-51.3 51.3l19.8 19.8c6.2 6.2 6.2 16.4 0 22.6L233.9 342.4c-6.2 6.2-16.4 6.2-22.6 0l-19.8-19.8c-6.2-6.2-6.2-16.4 0-22.6L329.2 144.8c6.2-6.2 16.4-6.2 22.6 0z" />
                                        </svg>
                                    </div>
                                    <a href="tel:{{ systemSetting()?->phone }}" class="text-[#007bff] text-sm ml-4">
                                        <h1 class="block">Phone</h1>
                                        <strong>{{ systemSetting()?->phone_number }}</strong>
                                    </a>
                                </li>


                            </ul>

                        </div>

                        <div class="mt-12">
                            <h2 class="text-gray-800 text-base font-bold">Socials</h2>

                            <ul class="flex mt-4 space-x-4">
                                <li
                                    class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a target="blank" href="{{ systemSetting()?->facebook_url }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill='#007bff' viewBox="0 0 24 24">
                                            <path
                                                d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                                                data-original="#000000" />
                                        </svg>
                                    </a>
                                </li>
                                <li
                                    class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a href="{{ systemSetting()?->twitter_url }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="#007bff" viewBox="0 0 24 24">
                                            <path
                                                d="M23.643 4.937c-.835.37-1.732.62-2.675.732a4.695 4.695 0 0 0 2.049-2.591 9.264 9.264 0 0 1-2.946 1.126 4.673 4.673 0 0 0-7.958 4.26A13.244 13.244 0 0 1 1.67 3.15a4.679 4.679 0 0 0-.633 2.348 4.674 4.674 0 0 0 2.079 3.891 4.646 4.646 0 0 1-2.114-.584v.057a4.683 4.683 0 0 0 3.743 4.583 4.673 4.673 0 0 1-2.106.08 4.68 4.68 0 0 0 4.366 3.239 9.374 9.374 0 0 1-5.806 2.004c-.376 0-.747-.022-1.116-.065a13.263 13.263 0 0 0 7.165 2.1c8.607 0 13.315-7.126 13.315-13.315 0-.2-.004-.4-.013-.598a9.525 9.525 0 0 0 2.348-2.42z" />
                                        </svg>
                                    </a>
                                </li>

                                <li
                                    class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a href="{{ systemSetting()?->instagram_url }}" target="blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill='#007bff' viewBox="0 0 24 24">
                                            <path
                                                d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li
                                    class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                    <a href="{{ systemSetting()?->youtube_url }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            fill="#FF0000" viewBox="0 0 24 24">
                                            <path
                                                d="M23.498 6.186a2.89 2.89 0 0 0-2.033-2.048C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.465.638a2.891 2.891 0 0 0-2.033 2.048A30.6 30.6 0 0 0 0 12a30.6 30.6 0 0 0 .502 5.814 2.89 2.89 0 0 0 2.033 2.048C4.5 20.5 12 20.5 12 20.5s7.5 0 9.465-.638a2.89 2.89 0 0 0 2.033-2.048A30.6 30.6 0 0 0 24 12a30.6 30.6 0 0 0-.502-5.814ZM9.75 15.568V8.432L15.568 12 9.75 15.568Z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <x-input-error />
                    <form class="ml-auo space-y-4" action="{{ route('admin.contact.store') }}" method="POST">
                        @csrf
                        <input type='text' placeholder='Name' name="name"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4 
                        border text-sm outline-blue-500" />
                        @error('name')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <input type='text' placeholder='Address' name="address"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4 
                        border text-sm outline-blue-500" />
                        @error('address')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <input type='email' placeholder='Email' name="email"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4
                         border text-sm outline-blue-500" />
                        @error('email')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <input type='phone_number' placeholder='Phone Number' name="phone_number"
                            class="w-full text-gray-800 rounded-md py-2.5 px-4
                         border text-sm outline-blue-500" />
                        @error('phone_number')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror

                        <textarea placeholder='Message' rows="6" name="message"
                            class="w-full text-gray-800 rounded-md px-4 border
                         text-sm pt-2.5 outline-blue-500"></textarea>
                        @error('message')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="terms"
                                class="text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700 dark:text-neutral-400">I agree to
                                the terms and conditions</span>
                        </label>
                        @error('terms')
                            <span class="text-sm text-red-600">{{ $message }}</span>
                        @enderror
                        <button type='submit'
                            class="text-white bg-blue-500 hover:bg-blue-600 rounded-md text-sm px-4 py-3 w-full !mt-6">Send</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="ml-[4rem] mx-5 my-5 lg:my-10">
            <div class="mt-6">
                <div class="w-50">

                    <iframe src="{{ systemSetting()?->map_url }}" width="600" height="600" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
@endsection
