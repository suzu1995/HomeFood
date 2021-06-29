@extends('common.parent')
@include('common.head')
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
