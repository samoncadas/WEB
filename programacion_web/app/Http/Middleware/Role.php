<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle(Request $request, Closure $next, $roles)
    {
        /*$user = Auth::user();
        if(!$user ||  !in_array($user->role, explode('|', $roles)) === false){
            return abort(403, 'Unauthorized action.');
        }
        else{

        }
        return $next($request);*/
        
        
        $newRol = explode('|', $roles);
        $rolName = strtolower($request->user()->role->name);
        if(!in_array($rolName, $newRol)){
            return abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
