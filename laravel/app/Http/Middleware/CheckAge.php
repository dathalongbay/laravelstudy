<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        //echo __METHOD__;


        //if ((date("H") < 8) || (date("H") > 18)) {
            echo "Bây giờ đang là : " .  date("H") . " giờ";
            echo "<br>";
            echo "Chúng tôi làm việc từ 8h đến 18h vui lòng quay lại vào giờ làm việc";
            die;
        //}

        return $next($request);
    }
}
