<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\GeneralQuestion;
use App\Models\Notice;
use App\Models\Programme;
use App\Models\Semester;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function index()
    {      
        $about = About::latest()->first();
        $services = Service::all();
        return view('frontend.index',compact('about','services'));
    }
    public function booking()
{
    $customer = auth('customer')->user();
    $services = Service::all();

    return view('frontend.booking', compact('customer', 'services'));
}
    public function serviceList($service)
    {
        $services = Service::where('category',$service)->get();
        return view('frontend.service',compact('services'));
    }

    public function serviceDetail(Service $service)
    {
        return view('frontend.serviceDetail', compact('service'));
    }
   
    
  
}
