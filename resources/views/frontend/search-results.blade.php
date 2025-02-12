@extends('frontend.layouts.master')
@section('container')



    <div class="sm:pl-20 sm:pr-30 min-h-screen mt-10">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Search Results for "{{ $query }}"</h1>

            <div class="mt-4">
                @if ($services->isEmpty())
                    <p class="text-gray-500">No results found. Please try searching with different keywords.</p>
                @else
                    <div class="space-y-8">
                       

                        @if (!$services->isEmpty())
                            <div class="mt-8">
                                <h2 class="text-xl font-semibold text-blue-600 mb-4">Services</h2>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                    @foreach ($services as $service)
                                        
                                        <div
                                            class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                                            <div class="">
                                                <a
                                                    href="
                                                 ">
                                                 <img class="w-full h-[21rem]"
                                                 src="{{$service->image}}"
                                                 alt="{{$service->title}}">
                                                </a>
                                            </div>

                                            <div class="p-6 text-center">
                                                <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $service->title }}
                                                </h3>
                                                <p class="text-sm text-gray-600 mb-4">
                                                    {!! Str::limit($service->description, 100, '...') !!}</p>
                                                <a href="
                                                {{route('serviceDetail',$service)}}
                                                 "
                                                    class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                                                    View Details
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
