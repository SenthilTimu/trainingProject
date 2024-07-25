<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Traits\HttpResponses;

class studentDomainMiddleware
{
    use HttpResponses;
    public function handle(Request $request, Closure $next): Response
    {

        $auth = Auth::guard('student')->user();
        if($auth === null){
            return $this->error('', "Unauthenticated", 401);
        }
        return $next($request);
    }
}
