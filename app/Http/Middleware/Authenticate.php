<?php

namespace App\Http\Middleware;

use JWT;
use Config;
use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Redirect;
use Cookie;
class Authenticate {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $user_id = cookie::get('cookieUserId');
        if(!empty($user_id))
        {
             Auth::loginUsingId($user_id, true);
        }
       
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }
        
        
        return $next($request);
    }

}

