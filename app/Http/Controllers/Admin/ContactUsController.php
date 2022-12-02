<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function index(){
        $contacts = DB::table('contact_us')->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function destroy(ContactUs $contactus){

        $contactus->delete();

        return back()->with('success','Contact deleted successfully!');
    }
}
