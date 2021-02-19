<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class Controller extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
