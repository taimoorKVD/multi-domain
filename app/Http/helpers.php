<?php

// Route function for client domain
if (!function_exists('domain_route')) {
    function domain_route($name, $params = [], $absolute = true)
    {
        $params['subdomain'] = request()->route('subdomain');
        return app('url')->route($name, $params, $absolute);
    }
}