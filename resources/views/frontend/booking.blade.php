@extends('frontend.layouts.master')
@section('container')



<div class="mt-18 mb-16">

    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="text-2xl  py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
            Book an Appointment
        </div>
        <form class="py-4 px-6" action="{{route('bookingStore')}}" method="POST">
            @csrf
            <x-input-error/>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="name" type="text" placeholder="Enter your name" value="{{old('name',$customer->name)}}">
                    <x-error : id="name" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" name="email" type="email" placeholder="Enter your email" value="{{old('email',$customer->email)}}">
                    <x-error : id="email" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                    Phone Number
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="phone" name="phone_number" type="tel" placeholder="Enter your phone number" value="{{old('phone_number',$customer->phone_number)}}">
                    <x-error : id="phone_number" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">
                    Preferred Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" name="preferred_date" type="date" placeholder="Select a date" value="{{old('preferred_date')}}">
                    <x-error : id="preferred_date" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="time">
                    Time
                </label>
                <div class="flex">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="time" name="preferred_time" type="time" placeholder="hh:mm" value="{{ old('preferred_time') }}">
                    
                    
                </div>
                <x-error : id="preferred_time" />
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="service">
                    Service
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="service" name="service_id" value="{{old('service_id')}}">

                    <option value="">Select a service</option>
                    @foreach ($services as $service )
                    
                    <option value="{{$service->id}}">{{$service->title}}</option>
                   
                    @endforeach
                </select>
                <x-error : id="service_id" />
            </div>
           
            <div class="flex items-center justify-center mb-4">
                <button
                    class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                    type="submit">
                    Book Appointment
                </button>
            </div>
    
        </form>
    </div>

</div>
@endsection