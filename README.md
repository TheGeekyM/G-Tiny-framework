# G-Tiny-framework
Smallest PHP framework depends on essential packages you want.



# Basic Routing
The most basic Laravel routes accept a URI and a Closure, providing a very simple and expressive method of defining routes:

Route::get('foo', function () {
    return 'Hello World';
});
The Default Route Files
All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by the framework. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.

For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in routes/web.php may be accessed by entering the defined route's URL in your browser. For example, you may access the following route by navigating to  http://your-app.test/user in your browser:

Route::get('/user', 'UserController@index');
Routes defined in the routes/api.php file are nested within a route group by the  RouteServiceProvider. Within this group, the /api URI prefix is automatically applied so you do not need to manually apply it to every route in the file. You may modify the prefix and other route group options by modifying your RouteServiceProvider class.

Available Router Methods
The router allows you to register routes that respond to any HTTP verb:

Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
