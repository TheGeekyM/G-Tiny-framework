# G-Tiny-framework
Smallest PHP framework depends on essential packages you want.



# Basic Routing
The most basic G-Tiny routes accept a URI and a Closure, providing a very simple and expressive method of defining routes:

```
Route::get('foo', function () {
    return 'Hello World';
});
```

The Default Route Files
```
Route::get('/user', 'UserController@index');
```


Available Router Methods
The router allows you to register routes that respond to any HTTP verb:

```
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
```
