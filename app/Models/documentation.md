Edit your database file from `framework/Database.php` Using The Query Builder

`$users = Capsule::table('users')->where('votes', '>', 100)->get();`

Other core methods may be accessed directly from the Capsule in the same manner as from the DB facade:
`$results = Capsule::select('select * from users where id = ?', array(1));`

Using The Schema Builder

`Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('email')->unique();
    $table->timestamps();
});`

Using The Eloquent ORM

`class User extends Illuminate\Database\Eloquent\Model {}
$users = User::where('votes', '>', 1)->get();`

You can add your models in `app/models`