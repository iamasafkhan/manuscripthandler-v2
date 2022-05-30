<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewSubmissionsController extends Controller
{
      public function index()
      {
          return view('frontend.newsubmissions.submit-new-manuscript');
      }
}
