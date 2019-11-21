<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAuthentication
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
        // 1) Check if the token is there in the session
        if(!Session::get('authentication')){
            return redirect('/selfcare/login');
        }
        $responseData = sendRequest('POST', config('xox_middleware_path.verify_token'));
        if($responseData->status){
            if($responseData->code == 24139 && $responseData->data->active){
                return $next($request);
            }
        }
        return redirect('/selfcare/login');
    }
}
