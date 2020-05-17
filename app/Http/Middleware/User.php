<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User
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
        if(Auth::check()){
            $id = $request->session()->get('user');
            $type = $request->session()->get('type');
            if($type == '0'){
                return redirect('home/'.$id);
            }else if($type == '1'){
                return redirect('business/'.$id);
            }else if($type == '2'){
                return redirect('acount/'.$id);
            }
            return redirect('business/'.$id);
        }
        return $next($request);
    }
}
