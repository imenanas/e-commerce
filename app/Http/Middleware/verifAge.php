<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verifAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->age && $request->age >20){
        echo' up 20';
        return $next($request);
    }elseif ($request->age <20) {
        return redirect()->route('racine');
    }

      //  return $next($request);
    }
}
