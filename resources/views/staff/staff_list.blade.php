<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>スタッフ一覧</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="bg_pattern Polka_v2"></div>
        <h2>スタッフ一覧画面</h2>
        <table class="info">
            <thead>
                <tr>
                    <th></th>
                    <th>スタッフID</th>
                    <th>名前</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($staff_list as $row)
                <tr>
                    <td><button class="btn">詳細</button></td>
                    <td>{{$row['staff_id']}}</td>
                    <td>{{$row['staff_name']}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </body>
</html>
