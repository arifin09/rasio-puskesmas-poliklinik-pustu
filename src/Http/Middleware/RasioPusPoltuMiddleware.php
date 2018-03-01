<?php namespace Bantenprov\RasioPusPoltu\Http\Middleware;

use Closure;

/**
 * The RasioPusPoltuMiddleware class.
 *
 * @package Bantenprov\RasioPusPoltu
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioPusPoltuMiddleware
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
        return $next($request);
    }
}
