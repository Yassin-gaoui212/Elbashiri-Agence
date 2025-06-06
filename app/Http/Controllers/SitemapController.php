<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $routes = collect(Route::getRoutes())->filter(function ($route) {
            return strpos($route->uri, 'admin') === false &&
                   strpos($route->uri, 'login') === false &&
                   strpos($route->uri, 'register') === false &&
                   strpos($route->uri, 'password') === false &&
                   strpos($route->uri, 'language') === false;
        });

        $content = view('sitemap', [
            'routes' => $routes,
            'lastmod' => Carbon::now()->toAtomString()
        ])->render();

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
} 