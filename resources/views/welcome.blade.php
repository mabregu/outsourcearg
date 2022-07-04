<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: Avenir, Helvetica, Arial, sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-align: center;
                color: #2c3e50;
                margin-top: 60px;
            }

            .routes {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-top: 60px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1>API</h1>
            <div class="routes">
                <table border="1" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Endpoint</th>
                            <th>HTTP</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>/api/register</code></td>
                            <td>POST</td>
                            <td>User register</td>
                        </tr>
                        <tr>
                            <td><code>/api/login</code></td>
                            <td>POST</td>
                            <td>User login</td>
                        </tr>
                        <tr>
                            <td><code>/api/logout</code></td>
                            <td>POST</td>
                            <td>User logout</td>
                        </tr>
                        <tr>
                            <td><code>/api/me</code></td>
                            <td>GET</td>
                            <td>Get logged in user</td>
                        </tr>
                        <tr>
                            <td><code>/api/user/profile-information</code></td>
                            <td>PUT</td>
                            <td>Update a existing user</td>
                        </tr>
                        <tr>
                            <td><code>/api/users</code></td>
                            <td>GET</td>
                            <td>Retrieve all users</td>
                        </tr>
                        <tr>
                            <td><code>/api/users/:email</code></td>
                            <td>GET</td>
                            <td>Retrieve a specific user with <code>email</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
