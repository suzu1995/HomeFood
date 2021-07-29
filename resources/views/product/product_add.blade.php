@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">スタッフ登録</h2>
    </div><br>

    <form method="POST" action={{ route('product.store') }}>
        {{ csrf_field() }}
        <div class="form font-weight-bold h5">
            <label>名前<br>
                @if($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span><br>
                @endif
                <input type="text" name="product_name" value= "{{ old('product_name') }}">
            </label>
        </div>

        <div class="form font-weight-bold h5">
            <label>パスワード<br>
                @if($errors->has('product_password'))
                    <span class="text-danger">{{ $errors->first('product_password') }}</span><br>
                @endif
                <input type="password" name="product_password">
            </label>
        </div>
        <div class="form font-weight-bold h5">
            <label>確認用パスワード<br>
                @if($errors->has('product_password2'))
                    <span class="text-danger">{{ $errors->first('product_password2') }}</span><br>
                @endif
                <input type="password" name="product_password2">
            </label>
        </div>
        <div class="form">
            <a class="btn btn--kon btn--cubic" href={{ route('product.index') }}>戻る</a>
            <input class="btn btn--kon btn--cubic" type="submit" name="add" value="登録">
        </div>
    </form>
</div>
