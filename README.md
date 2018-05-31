# G-Tiny-framework
Smallest PHP framework depends on essential packages you want.



# Basic Routing
The most basic G-Tiny routes accept a URI and a Closure, providing a very simple and expressive method of defining routes:

```
$router->get('foo', function () {
    return 'Hello World';
});
```

The Default Route Files
```
$router->get('/user', 'UserController@index');
```


Available Router Methods
The router allows you to register routes that respond to any HTTP verb:

```
$router->get($uri, $callback);
$router->post($uri, $callback);
$router->put($uri, $callback);
$router->patch($uri, $callback);
$router->delete($uri, $callback);
$router->options($uri, $callback);
```
