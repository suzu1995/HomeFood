@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">スタッフ登録</h2>
    </div><br>
    <div class="form font-weight-bold h5">
        <label>名前<br>
            <input type="text">
        </label>
    </div>
    <div class="form font-weight-bold h5">
        <label>パスワード<br>
            <input type="text">
        </label>
    </div>
    <div class="form">
        <a class="btn btn--kon btn--cubic" href={{route('staff.index')}}>戻る</a>
        <a class="btn btn--kon btn--cubic" href={{route('staff.store')}}>更新</a>
    </div>
</div>
