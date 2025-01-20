<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricing = Pricing::orderBy('sequence', 'asc')->get();

        return view('pages.pricing', compact('pricing'));
    }
}
