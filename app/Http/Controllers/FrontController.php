<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }
    public function nft() {
        return view('pages.nft');
    }
    public function discography() {
        return view('pages.discography');
    }
    public function tour() {
        return view('pages.tour');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function press() {
        return view('pages.press');
    }
    public function gallery() {
        return view('pages.gallery');
    }
    public function links() {
        return view('pages.links');
    }
}
