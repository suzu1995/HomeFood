@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">スタッフ編集</h2>
    </div><br>

    <form method="PUT" action={{ route('staff.update',$staff['staff_id']) }}>
        {{ csrf_field() }}
        <div class="form font-weight-bold h5">
            <label>名前<br>
                @if($errors->has('staff_name'))
                    <span class="text-danger">{{ $errors->first('staff_name') }}</span><br>
                @endif
                <input type="text" name="staff_name" value= "{{$staff['staff_name']}}{{ old('staff_name') }}">
            </label>
        </div>

        <div class="form font-weight-bold h5">
            <label>パスワード<br>
                @if($errors->has('staff_password'))
                    <span class="text-danger">{{ $errors->first('staff_password') }}</span><br>
                @endif
                <input type="password" name="staff_password">
            </label>
        </div>
        <div class="form font-weight-bold h5">
            <label>確認用パスワード<br>
                @if($errors->has('staff_password'))
                    <span class="text-danger">{{ $errors->first('staff_password') }}</span><br>
                @endif
                <input type="password" name="staff_password2">
            </label>
        </div>
        <div class="form">
            <a class="btn btn--kon btn--cubic" href={{ route('staff.index') }}>戻る</a>
            <input class="btn btn--kon btn--cubic" type="submit" name="add" value="登録">
        </div>
    </form>
</div>
