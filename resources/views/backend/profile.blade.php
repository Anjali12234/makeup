@extends('backend.layouts.master')
@section('container')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Profile</h5>
            </div>
            <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                    <a href="{{route('admin.dashboard')}}" class="text-slate-400 dark:text-zink-200">Home</a>
                </li>
                <li class="text-slate-700 dark:text-zink-100">
                    Profile Settings
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                    <div class="lg:col-span-2 2xl:col-span-1">
                        <div class="relative inline-block rounded-full shadow-md size-20 bg-slate-100 profile-user xl:size-28">
                            @if(Auth::user()?->image == NULL)
                            <img src="{{asset('assets/images/avatar-1.png')}}" alt="{{ Auth::user()?->name }}" class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                            @else
                            <img src="{{ Auth::user()?->image }}" alt="{{ Auth::user()?->name }}" class="object-cover border-0 rounded-full img-thumbnail user-profile-image  h-full">
                           @endif
                           
                        </div>
                    </div><!--end col-->
                    <div class="lg:col-span-10 2xl:col-span-9">
                        <h5 class="mb-1">{{ Auth::user()?->name }} <i data-lucide="badge-check" class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                        <div class="flex gap-3 mb-4">
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle" class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i> CEO & Founder</p>
                            <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin" class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i> Los Angeles, California</p>
                        </div>
                        
                        
                    </div>
                  
                </div><!--end grid-->
            </div>
            <div class="card-body !py-0">
                <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                    <li class="group active">
                        <a href="javascript:void(0);" data-tab-toggle data-target="personalTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Personal Info</a>
                    </li>
                   
                    <li class="group">
                        <a href="javascript:void(0);" data-tab-toggle data-target="changePasswordTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Change Password</a>
                    </li>
                  
                </ul>
            </div>
        </div><!--end card-->

        <div class="tab-content">
            <div class="block tab-pane" id="personalTabs">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-1 text-15">Personal Information</h6>
                        <p class="mb-4 text-slate-500 dark:text-zink-200">Update your photo and personal details here easily.</p>
                        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                <div class="xl:col-span-6">
                                    <label for="inputValue" class="inline-block mb-2 text-base font-medium">Name</label>
                                    <input type="text" value="{{ old('name', $user->name) }}" name="name" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value">
                                </div><!--end col-->
                                <div class="xl:col-span-6">
                                    <label for="inputValue" class="inline-block mb-2 text-base font-medium">Image</label>
                                    <input type="file"  name="image"
                                     id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value">
                                </div><!--end col-->
                                
                                <div class="xl:col-span-6">
                                    <label for="inputValue" class="inline-block mb-2 text-base font-medium">Email Address</label>
                                    <input type="email" name="email"
                                    value="{{ old('email', $user->email) }}" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your email address" >
                                </div><!--end col-->
                                
                            </div><!--end grid-->
                            <div class="flex justify-end mt-6 gap-x-4">
                                <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Updates</button>
                            </div>
                        </form><!--end form-->
                    </div>
                </div>
            </div>
          
            <div class="hidden tab-pane" id="changePasswordTabs">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Changes Password</h6>
                        <form method="post" action="{{ route('password.update') }}"
                        class="mt-6 space-y-6">
                        @csrf
                        @method('put')
                            <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                <div class="xl:col-span-4">
                                    <label for="inputValue" class="inline-block mb-2 text-base font-medium">Old Password*</label>
                                    <div class="relative">
                                        <input type="password" name="current_password"
                                        value="{{ old('current_password', $user->current_password) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Enter current password">
                                        <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="inputValue" class="inline-block mb-2 text-base font-medium">New Password*</label>
                                    <div class="relative">
                                        <input type="password" name="password"
                                        type="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Enter new password">
                                        <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="inputValue" class="inline-block mb-2 text-base font-medium">Confirm Password*</label>
                                    <div class="relative">
                                        <input type="password" name="password_confirmation" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Confirm password">
                                        <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                    </div>
                                </div><!--end col-->
                                
                                <div class="flex justify-end xl:col-span-6">
                                    <button type="submit" class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">Change Password</button>
                                </div>
                            </div><!--end grid-->
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- container-fluid -->
</div>
@endsection
