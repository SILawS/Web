<?php

namespace App\Http\Controllers\Render;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;

class OnePageController extends Controller
{
	public function index()
	{
		return view('sils.index');
	}
}
