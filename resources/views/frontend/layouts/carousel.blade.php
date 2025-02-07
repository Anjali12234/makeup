<div class="relative w-full overflow-hidden">
    <div class="flex transition-transform duration-700 ease-in-out" id="carousel">
        @foreach ($sliders as )
        
        @endforeach
        <div class="w-full flex-shrink-0 relative">
            <img src="{{ asset('assets/frontend/slider.jpg') }}" class="w-full h-[32rem] object-cover "
                alt="Slide 1">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white">
                    <h2 class="text-3xl font-bold">Welcome to the Shadow Beauty Parlour</h2>
                    <p class="text-lg">At Shadows Beauty Parlour, we redefine beauty with our personalized wellness services.</p>
                
                    @if (Auth::guard('registered-user')->check()) 
                        <a href="{{ route('booking') }}" 
                           class="bg-pink-700 hover:bg-transparent border border-white px-6 py-2 mt-4 rounded-lg">
                           Book an appointment
                        </a>
                    @else
                        <a href="{{ route('customerLogin') }}" 
                           class="bg-pink-700 hover:bg-transparent border border-white px-6 py-2 mt-4 rounded-lg">
                           Book an appointment
                        </a>
                    @endif
                </div>
                
        </div>
      
    </div>
    <button class="absolute left-5 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow"
        id="prev">&#10094;</button>
    <button class="absolute right-5 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow"
        id="next">&#10095;</button>
</div>