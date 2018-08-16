<?php

namespace App\Http\Middleware;

use Closure;

class corss
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $domains = ['http://localhost:8080'];
        if(isset($request->server()['HTTP_ORGIN'])){

        
        $orgin = $request->server()['HTTP_ORIGIN'];
        if(in_array($orgin, $domains)){
            header('Access-Control-Allow-Origin: '.$origin);
             header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
        }

       
    }
        return $next($request);
    }
}
