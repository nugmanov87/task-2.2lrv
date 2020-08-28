<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\ConfigFacad;

class FacadController extends Controller
{
    public function index(): void
    {
        ConfigFacad::showInfo();
    }
}
