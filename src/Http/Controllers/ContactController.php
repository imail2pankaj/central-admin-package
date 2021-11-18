<?php

namespace ScenicItSolutions\CentralAdmin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ScenicItSolutions\CentralAdmin\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view("central-admin::contact");
    }

    public function send(Request $request) {
        $contact = Contact::create($request->all());
        return redirect()->back();
    }
}
