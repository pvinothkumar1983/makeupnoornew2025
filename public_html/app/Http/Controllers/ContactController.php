<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{


    public function index()
    {

        $contacts = Contact::paginate(10);

        return view('admin.contact.index',compact('contacts'));
    }

    public function delete($id)
    {
        $obj = Contact::where('id', $id)->first();

        $obj->delete();

        flashMessage('success', 'Deleted Successfully !');

        return response()->json(['status' => 1]);
    }
}

