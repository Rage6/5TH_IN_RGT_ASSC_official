<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Expiration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      $current_user = Auth::user();
      if ($current_user) {
        $user_expiration = $current_user->expiration_date;
        $time_now = date("Y-m-d h:m:s",time());
        if ($time_now > $user_expiration && $user_expiration != "1970-01-01 00:00:00") {
          abort(403, "According to records, your membership fee has expired. Please contact the Bobcat staff to learn how you can reactivate your account.");
        };
        return $next($request);
      } else {
        return redirect('login');
      };
    }
}
