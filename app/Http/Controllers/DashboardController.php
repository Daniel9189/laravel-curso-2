<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Override;

class DashboardController extends Controller
{
    
    public function index() 
    {
        return view('admin.dashboard');
    }
}