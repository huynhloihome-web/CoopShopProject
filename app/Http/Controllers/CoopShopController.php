<?php

namespace App\Http\Controllers;

class CoopShopController extends Controller
{
    public function index()
    {
        return view('coop-shop.index', [
            'pageTitle' => 'Coop Shop',
        ]);
    }

    public function login()
    {
        return redirect()->route('coop-shop.home');
    }

    public function cart()
    {
        return redirect()->route('coop-shop.home');
    }
}