<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redis;
use Closure;

class Index
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
        Redis::incr('index');
        $a=Redis::get('index');
        echo '请求次数'.$a;
        if($a>=5){
            echo '请不要频繁请求此接口10秒后重试';
            Redis::expire('index',10);
            die;
        }
        return $next($request);
    }
}
