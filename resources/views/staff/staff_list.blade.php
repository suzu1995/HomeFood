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
                <th></th>
                <th>スタッフID</th>
                <th>名前</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($staff_list as $row)
            <tr>
                <td><a class="btn btn--kon btn--cubic" href="{{ route('staff.edit', ['staff' => $row['staff_id']]) }}">詳細</a></td>
                <td><a class="btn btn--kon btn--cubic" href="{{ route('staff.show', ['staff' => $row['staff_id']]) }}">参照</a></td>
                <td>{{$row['staff_id']}}</td>
                <td>{{$row['staff_name']}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

<style>
    table.info > thead > tr > th:nth-child(1),
    table.info > tbody > tr > td:nth-child(1){
       width: 60px;
       text-align: center;
   }
    table.info > thead > tr > th:nth-child(2),
    table.info > tbody > tr > td:nth-child(2){
       width: 60px;
       text-align: center;
   }

   table.info > thead > tr > th:nth-child(3),
   table.info > tbody > tr > td:nth-child(3){
        width: 100px;
        text-align: center;
   }

   table.info > thead > tr > th:nth-child(4),
   table.info > tbody > tr > td:nth-child(4){
        width: 250px;
        text-align: center;
   }
</style>
