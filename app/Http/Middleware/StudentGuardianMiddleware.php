<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Http\Request;

    class StudentGuardianMiddleware {

        public function handle(Request $request, Closure $next)
        {
            if(! $request->user()->is_student){
                return redirect()->route('admin.home');
            }
            return $next($request);
        }
    }
