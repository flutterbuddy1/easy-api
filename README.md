# Easy Api
Easy Way to integrate API in you laravel application.

## Installation Guide
<br>

Install Package using [Composer]('https://getcomposer.org/download/').
```bash
composer require flutterbuddy1/easy-api
```

Paste the code below given.

Use this to your `route/api.php` 
```php
use Flutterbuddy1\EasyApi\EasyApi;
```

And add this inside you api middleware in `route/api.php`
```php
EasyApi::api();
```

### That's It your API's is ready to go 🚀
<br/>

## API's Docs
<br/>

### Get Data API
Send `GET` Request in this api.
```http
http://YOUR_APPLICATION_URL/api/{TABLE_NAME}

Example:

http://localhost:8000/api/posts
```
* Include Table
```http
http://YOUR_APPLICATION_URL/api/{TABLE_NAME}?include={OTHER_TABLE_NAME}

Example:

http://localhost:8000/api/posts?include=categories,users
```

### Get Data By Id API
Send `GET` Request in this api.
```http
http://YOUR_APPLICATION_URL/api/{TABLE_NAME}/{ID}

Example:

http://localhost:8000/api/posts/3
```

* Include Table
```http
http://YOUR_APPLICATION_URL/api/{TABLE_NAME}/{ID}?include={OTHER_TABLE_NAME}

Example:

http://localhost:8000/api/posts/3?include=categories,users
```
<br/>

### Post Data API

Send `POST` Request in this api.
```http
http://YOUR_APPLICATION_URL/api/{TABLE_NAME}

Example:

http://localhost:8000/api/posts

Post Data in JSON :

{
    "title:"Some Title",
    "content":"Some Content",
    "category":"YOUR CATEGORY ID",
    "user":"YOUR USER ID",
}

```


### Delete Data API

Send `PUT` Request in this api.
```http
http://YOUR_APPLICATION_URL/api/update/{TABLE_NAME}

Example:

http://localhost:8000/api/update/posts

Post Data in JSON :

{
    "title:"UPDATED TITLE",
    "content":"UPDATED CONTENT",
}

```

### Update Data API

Send `DELETE` Request in this api.
```http
http://YOUR_APPLICATION_URL/api/delete/{TABLE_NAME}/{ID}

Example: :
http://localhost:8000/api/delete/posts/3

```

<center>
<h3>Contribute for Adding New Features</h3>
<p>Created With ♥ By <a href="https://flutterbuddy.in">FlutterBuddy</a></p>
</center>