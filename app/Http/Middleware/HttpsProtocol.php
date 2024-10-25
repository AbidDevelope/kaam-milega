<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
     
            if (!$request->secure()) {
                return redirect()->secure(str_replace('index.php','',$request->getRequestUri()));
            }
            
            if ($request->secure()) {
                //dd(str_replace('index.php','',$request->getRequestUri()));
                return redirect()->secure(str_replace('index.php','',$request->getRequestUri()));
            }

            return $next($request); 
    }
}
?>
