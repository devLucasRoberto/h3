<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SaloesController extends Controller
{
    public function index()
    {
        $salao = DB::table('Salaos')->where('status', 0)->get();

        return view('site.saloes', compact('salao'));
    }

    public function salao($id)
    {
        return 'teste';
    }
}