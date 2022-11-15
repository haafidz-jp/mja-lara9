<?php

namespace App\Http\Controllers;

use App\Models\Quotation;

class QuotationController extends Controller
{
    public function index_view ()
    {
        return view('pages.quotation.quotation-data', [
            'quotation' => Quotation::class
        ]);
    }
}
