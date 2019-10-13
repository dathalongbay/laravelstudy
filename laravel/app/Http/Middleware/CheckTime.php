<?php

namespace App\Http\Middleware;

use Closure;

class CheckTime
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
        //echo "<br>" . __METHOD__;
        /**
         * check time cho phép đi vào web từ 8h cho đến 18h
         * ngoài khung giờ đó thì ko đc vào
         */
        $hour = date("H");
        if ( ($hour < 8) || ($hour > 18) ) {
            echo "Bây giờ là :" . $hour . "giờ";
            echo "<br> Chúng tôi chỉ làm việc từ 8h cho đến 18h vui lòng quay lại vào khoảng thời gian này";
            die;
        }

        return $next($request);
    }
}
