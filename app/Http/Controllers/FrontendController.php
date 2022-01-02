<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMessage;
use App\TourPackage;
use App\HajjPackage;
use App\TourPackageBook;
use App\HajjPackageBook;
use App\Slider;
use App\Achievement;
use App\VisaService;
use App\newslatter;
use DB;
class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->get();
        $hajj_packages = HajjPackage::where('status', 1)->latest()->limit(4)->get();
        $tour_packages = TourPackage::where('status', 1)->latest()->limit(10)->get();

    	return view('frontend.index', compact('hajj_packages', 'tour_packages', 'sliders'));
    }

    public function companyProfile()
    {
    	return view('frontend.company-profile');
    }

    public function mdMessage()
    {
    	return view('frontend.md-message');
    }

    public function achievement()
    {
        $achievements = Achievement::where('status', 1)->latest()->get();
    	return view('frontend.achievement', compact('achievements'));
    }

    public function ticket()
    {
    	return view('frontend.ticket');
    }

    public function domestic()
    {
        $packages = TourPackage::where('type', 'Domestic')->where('status', 1)->latest()->get();
    	return view('frontend.domestic', compact('packages'));
    }

    public function international()
    {
        $packages = TourPackage::where('type', 'International')->where('status', 1)->latest()->get();
    	return view('frontend.international', compact('packages'));
    }

    public function visa()
    {
        $enlisteds = VisaService::where('is_enlisted_agent', 'Yes')->where('status', 1)->orderBy('country_name', 'asc')->get();
        $visas = VisaService::where('status', 1)->orderBy('country_name', 'asc')->get();
    	return view('frontend.visa', compact('enlisteds', 'visas'));
    }

    public function singleVisa(VisaService $visa)
    {
        $visas = VisaService::where('status', 1)->where('id', '!=' , $visa->id)->orderBy('country_name', 'asc')->get();

        return view('frontend.single-visa', compact('visas', 'visa'));
    }

    public function hajj()
    {
        $packages = HajjPackage::where('type', 'Hajj')->where('status', 1)->latest()->get();

    	return view('frontend.hajj', compact('packages'));
    }

    public function umrah()
    {
        $packages = HajjPackage::where('type', 'Umrah')->where('status', 1)->latest()->get();
    	return view('frontend.umrah', compact('packages'));
    }

    public function contact()
    {
    	return view('frontend.contact');
    }

    public function contactMessageStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => '',
        ]);

        ContactMessage::create($request->all());

        return back()->with('success', 'Thanks for Contact us!');

    }

    public function singleTourPackage(TourPackage $package)
    {
        $type = 'tour';
        return view('frontend.single-package', compact('package', 'type'));
    }

    public function singleHajjPackage(HajjPackage $package)
    {
        $type = 'hajj';

        return view('frontend.single-package', compact('package', 'type'));
    }

    public function tourPackageBooking(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|in:hajj,tour',
            'name' => 'required',
            'phone' => 'required',
        ]);
        $in = $request->only('name', 'phone', 'email', 'children', 'adults', 'note');
        $in['package_id'] = $id;

        if ($request->type == 'hajj') {
            HajjPackageBook::create($in);
        }else{
            TourPackageBook::create($in);
        }
        

        return back()->with('success', 'Thanks! for Booked. We will Contact you soon.');

    }
    public function security(){
        return view('frontend.security');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    public function order_status(){
        return view('frontend.order');
    }
    public function gallary(){
        $garrary= DB::table('galleries')->where('status', 1)->get();
        
        return view('frontend.gallery', compact('garrary'));
    }
    public function newslatter(Request $request){
       $request->validate([
            'email' => 'required',
        ]);

        newslatter::create($request->all());

        return back()->with('success', 'Thanks for Contact us!');
    }
}
