<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use Illuminate\Http\Request;

class VeganController extends Controller
{
    public function index()
    {
        $sayur = Sayur::get();
        return $sayur;
    }
}
