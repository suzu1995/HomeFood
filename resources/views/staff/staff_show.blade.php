@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">スタッフ詳細</h2>
    </div><br>
        <div class="form font-weight-bold h5">
            <label>ID</label><br>
            <label>{{$staff_data['staff_id']}}</label>
        </div>
        <div class="form font-weight-bold h5">
            <label>名前</label><br>
            <label>{{$staff_data['staff_name']}}</label>
        </div>
        <a class="btn btn--kon btn--cubic" href={{ route('staff.index') }}>戻る</a>
</div>
