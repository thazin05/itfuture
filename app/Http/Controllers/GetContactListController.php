<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class GetContactListController extends Controller
{
    public function index()
    {
    	$contacts = Contact::all();
    	return view('contact.show',compact('contacts'));
    }

    public function destroy($id)
    {
    	Contact::find($id)->delete();
    	return redirect()->route('contact.list');
    }
}
