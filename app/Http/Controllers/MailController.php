<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request){
        request()->validate([
            "email" => ["required", "email"],
        ]);
        $mails = new Mail();
        $mails->email = $request->email;
        $mails->save();
        return redirect('/contact');
    }
}
