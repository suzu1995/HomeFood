@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2>スタッフ一覧画面</h2>
    </div>
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
</div>
