@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">スタッフ一覧</h2>
    </div>
    <a class="btn btn--kon btn--cubic" href="{{ route('staff.create') }}">新規登録</a>
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
                <td><a class="btn btn--kon btn--cubic" href="">詳細</a></td>
                <td>{{$row['staff_id']}}</td>
                <td>{{$row['staff_name']}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
