<?php

namespace App\Http\Middleware;

use App\Models\OtherSessionsInfo; // Import the OtherSessionsInfo model
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RequestInformationMiddleware {}
