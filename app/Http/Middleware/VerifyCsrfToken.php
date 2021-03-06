<?php

namespace ERPunab\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'inventario/add/form',
        'ventas/add/form',
        'usuarios/add/form'
    ];
}
