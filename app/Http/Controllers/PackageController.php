<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Package;

class PackageController extends Controller
{
    public function index(){

        // $packages = Package::all();
        // dump($packages);

        $packages = Package::paginate(6);


        return view('home', compact('packages'));
    }
}
