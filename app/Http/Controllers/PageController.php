<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\ContactUs;

class PageController extends Controller
{
    public function contact()
    {
    	return view('contact');
    }

    public function about()
    {
    	return view('about');
    }

    public function service()
    {
    	return view('service');
    }

    public function storeContact(Request $request)
    {
        $this->Validate($request,[ 
            'contact_name'      => 'required',
            'contact_mail'      => 'required',
            'contact_subject'   => 'required',
            'contact_message'   => 'required'
            ]);
        ContactUs::create($request->all());
        Session::flash('success','Sent');
        return redirect()->back();
    }

    public function contactAdminIndex()
    {
        $contacts = ContactUs::orderBy('created_at','asc')->paginate(10);
        $contacts = ContactUs::get();
        return view('admin.contact.index',compact('contacts'));
    }

    public function anyContact(User $user)
    {
        $contact = ContactUs::all();
    }
}
