<html>
    <body>
        <h1>Hello, {{ $name }}</h1>
    </body>
</html>

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});