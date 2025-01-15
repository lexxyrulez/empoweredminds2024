<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the About Us page.
     */
    public function about()
    {
        return view('about'); // Points to resources/views/about.blade.php
    }

    /**
     * Show the Our Services page.
     */
    public function services()
    {
        return view('services'); // Points to resources/views/services.blade.php
    }

    /**
     * Show the Contact Us page.
     */
    public function contact()
    {
        return view('contact'); // Points to resources/views/contact.blade.php
    }

    public function news()
    {
        return view('newsandevents'); // Points to resources/views/contact.blade.php
    }


    public function newsdetails()
    {
        return view('news-details'); // Points to resources/views/contact.blade.php
    }

    
    public function enroll()
    {
        return view('enroll'); // Points to resources/views/contact.blade.php
    }


    
}
