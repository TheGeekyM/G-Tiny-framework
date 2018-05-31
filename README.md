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

Route parameter
```
$router->get('user/{id}', function($id)
{
    return 'User '.$id;
});
```

Optional Route Parameters With Defaults
```
$router->get('user/{id}', function($id)
{
    return 'User '.$id;
});
```

Regular Expression Route Constraints
```
$router->get('user/{name}', function($name)
{
    //
})
->where('name', '[A-Za-z]+');

$router->get('user/{id}', function($id)
{
    //
})
->where('id', '[0-9]+');
```

Sometimes you may need to apply filters to a group of routes. Instead of specifying the filter on each route, you may use a route group:
```
$router->group(array('namespace' => 'Admin'), function()
{
    //
});
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
