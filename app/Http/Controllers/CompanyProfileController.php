<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProductTrait;
use App\Traits\CompanyPlant;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;


class CompanyProfileController extends Controller
{

    public function productInIndex()
    {
        $products = ProductTrait::allDataProducts();
        return view('pages.index',[
            'products' => $products,
        ]);
    }

    public function aboutUs()
    {
        $companyPlant = CompanyPlant::allCompanyPlant();
        return view('pages.about-us',[
            'company_plant' => $companyPlant,
        ]);
    }

    public function product()
    {
        $products = ProductTrait::allDataProducts();

        return view('pages.product',[
            'products' => $products,
        ]);
    }

    public function detailProductByCategory($category)
    {
        
    }

    public function switchLang($lang)
    {
        Session::put('locale', $lang);
        Artisan::call('optimize:clear');
        return redirect()->back();
    }
}
