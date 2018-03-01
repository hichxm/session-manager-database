# Session Manager Database

**Session Manager Database** will allow you to manage the sessions in the enclosure of your application with database implementation.

## Exemple:

```php
$session_method = new DATABASE_SessionManager([
    "type" => "mysql", //Type of your database
    "name" => "sessionmanager", //Name of your database
    "server" => "127.0.0.1", //Host
    "port" => 3306, //Port
    "username" => "root", //Username
    "password" => "" //Password
]);
$session = new SessionManager($session_method);

//Start session.
$session->start();

//Set data or different method to set data.
$session->set($key = "id", $value = "1545348");
$session['id'] = 1545348;

//Get data or different method to get data.
$session->get($key = "id");
$session['id'];

//Unset data.
$session->unset($key = "id");
unset($session['id']);

//Stop session.
$session->stop();
```

## Full doc

[Documentation.](DOC.md)

## License (MIT)

```
The MIT License (MIT)

Copyright (c) 2018 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
