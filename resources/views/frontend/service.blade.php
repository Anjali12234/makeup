@extends('frontend.layouts.master')
@section('container')
<x-frontend.carousel :sliders="sliders()" />   

        <section>

            <!-- Content Section -->
            <div class="  mx-16 mt-20 mb-20">
                @foreach ($services as $service)
                    <div class="grid grid-cols-3 gap-7 mt-5">

                        <div class="">
                            <img src="{{ $service->image }}" style="width: 385px; height: 350px;" alt="">
                        </div>
                        <div class="col-span-2 ">
                            <h1 class="text-3xl font-slabo font-bold">{{$service->title}}</h1> 
                            <h1 class="text-2xl font-lora font-bold mt-5"> Category : <span class="font-popins text-xl font-medium text-pink-600">{{$service->category->label()}}</span> </h1> 
                            <h1 class="text-2xl font-lora font-bold ">Price: <span class="font-popins text-xl font-medium text-pink-600">{{$service->price}}</span> </h1>
                         
                         <div class="font-lora text-lg mt-5" >
                            {!! $service->description !!}
                            </div>  
                        </div>
                    </div>

                @endforeach
               
            </div>
        </section>

@endsection
