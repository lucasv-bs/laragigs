<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'headings' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

}
