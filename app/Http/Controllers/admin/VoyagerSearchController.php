<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class VoyagerSearchController extends VoyagerBaseController
{
     public function indexSearch () {
         return view('search');
    }

    public function indexForm() {
        return view('form');
    }

    public function ShowSearch(Request $request) {
        $products = Products::search($request->searchQueryInput)->get();
        $users = User::search($request->searchQueryInput)->get();
        dd($users);
    }
}
