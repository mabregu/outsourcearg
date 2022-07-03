# outsourcearg
> PHP Challenge

### Install the dependencies

```composer install```

```php artisan migrate:fresh --seed```

### Test user
    
```"email": "test@example.com" , "password": "password"```


### Users routes

| Endpoint | HTTP | Description |
| --- | --- | --- |
| `/api/register` | POST | User register |
| `/api/login` | POST | User login |
| `/api/logout` | POST | User logout |
| `/api/me` | GET | Get logged in user |
| `/api/user/profile-information` | PUT | Update a existing user |
| `/api/users` | GET | Retrieve all users |
| `/api/users/:email` | GET | Retrieve a specific user with `email` |