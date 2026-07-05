<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class aliController extends Controller
{
    public function index() {
    $response = Http::get('https://fakestoreapi.com/products');
    return $response->json();
    }
}
?>