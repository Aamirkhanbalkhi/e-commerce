<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // DASHBOARD FUNCTION
    public function Dashboard()
    {
        return view('Admin.dashboard');
    }
}
