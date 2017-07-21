<?php

namespace Rmazarei\Jalali;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JalaliController extends Controller
{
    public function index($name='Ali')
	{
		return "Hello ".$name;
	}
}
