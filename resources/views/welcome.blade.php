<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
      <h1>welcom to test digitalocean</h1>
      <p>users are :</p>
      <table>
          <thead>
              <th>name</th>
              <th>email</th>
          </thead>
          <tbody>
            @foreach( $users as $key=>$user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
          </tbody>
      </table>
    </body>
</html>
