<?php namespace Framework;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface as HttpKernelInterface;

class Core implements HttpKernelInterface
{
    protected $routes = [];

    protected $prefix = '\App\Http\Controllers\\';

    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = TRUE)
    {
        $path = trim($request->getPathInfo(), '/');

        // Does this URL match a route?
        if (array_key_exists($path, $this->routes)) {
            // execute the callback
            $controller = $this->routes[$path];
            $response   = $controller();
        } else {
            // no route matched, this is a not found.
            view('errors.404');
            $response = new Response('Not found!', Response::HTTP_NOT_FOUND);
        }

        return $response;
    }

    // Associates an URL with a callback function
    public function map($path, $controller)
    {
        $path = trim($path , '/');
        $controller = $this->prefix . str_replace('@', '::', $controller);

        $this->routes[$path] = $controller;
    }
}