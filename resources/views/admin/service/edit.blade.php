@extends('backend.layouts.master')
@section('container')
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu 
        group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md 
        group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm 
        pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 
        group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 
        group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl 
        group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto 
        group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto 
        group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] 
        group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
<x-input-error/>
            <x-frontend.breadcumb : list="Service Category" />
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Service Category</h6>
                    <form method="post" action="{{ route('admin.service.update',$service) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                            <x-input-label : id="title" value="{{ old('title',$service->title) }}" title="Title"
                                spanClass="text-red-500" type="text" />
                            <x-input-label : id="price" value="{{ old('price',$service->price) }}" title="Price"
                                spanClass="text-red-500" type="text" />

                                <img src="{{ $service?->image }}" alt="" class="h-20">

                                <x-input-label : id="image" value="{{ old('image') }}" title="Image"
                                spanClass="text-white" type="file" />
                                <x-select 
                                id="category" 
                                selected="{{ old('category', $service->category?->value) }}" 
                                title="Category"
                                spanClass="text-white" 
                                :list="\App\ServiceType::cases()" 
                            />
                      


                        </div>

                        <div class="form-group col-md-12">
                            <label for="description" class="inline-block mb-2 text-base font-medium">
                                Description <span class="text-white">*</span>
                            </label>
                            <textarea name="description" id="editor" cols="50" rows="10">{{ old('description', $service->description) }}</textarea>

                            <span class="text-warning">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="flex justify-end gap-2 mt-5">

                            <button type="submit"
                                class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100">Submit</button>
                        </div>
                </div>




                </form>
            </div>
        </div>



    </div>
   
@endsection
