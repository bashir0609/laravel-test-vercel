<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        $stats = [
            'total_blogs' => Blog::count(),
            'total_users' => User::where('role', 'user')->count(),
            'total_admins' => User::where('role', 'admin')->count(),
            'recent_blogs' => Blog::latest()->take(5)->get(),
            'recent_users' => User::latest()->take(5)->get(),
            'blogs_this_month' => Blog::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count(),
            'users_this_month' => User::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->where('role', 'user')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
