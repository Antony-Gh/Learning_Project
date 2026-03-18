<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\SystemGuard;

class CheckLicense
{
     /**
      * Handle an incoming request.
      *
      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
      */
     public function handle(Request $request, Closure $next): Response
     {
          // Don't protect the suspended route itself to avoid loop
          if ($request->is('sys-suspended') || $request->routeIs('sys.suspended')) {
               return $next($request);
          }

          $guard = app(SystemGuard::class);

          if (!$guard->isSystemHealthy()) {
               return redirect()->route('sys.suspended');
          }

          return $next($request);
     }
}
