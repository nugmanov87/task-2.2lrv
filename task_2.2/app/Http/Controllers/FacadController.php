<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\Facad;

class FacadController extends Controller
{
    public function index(): void
    {
        Facad::showInfo();
    }
}
