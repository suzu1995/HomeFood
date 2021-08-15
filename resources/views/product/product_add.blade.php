@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">商品登録</h2>
    </div><br>

    <form method="POST" action={{ route('product.store') }} enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form font-weight-bold h5">
            <label>商品名<br>
                @if($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span><br>
                @endif
                <input type="text" name="product_name" value= "{{ old('product_name') }}">
            </label>
        </div>

        <div class="form font-weight-bold h5">
            <label>価格<br>
                @if($errors->has('product_price'))
                    <span class="text-danger">{{ $errors->first('product_price') }}</span><br>
                @endif
                <input type="text" name="product_price" value= "{{ old('product_price') }}">
            </label>
        </div>

        <div class="form font-weight-bold h5">
            <label>商品画像<br>
                @if($errors->has('product_gazou'))
                    <span class="text-danger">{{ $errors->first('product_gazou') }}</span><br>
                @endif
                <input type="file" name="product_gazou">
            </label>
        </div>

        <div class="form">
            <a class="btn btn--kon btn--cubic" href={{ route('product.index') }}>戻る</a>
            <input class="btn btn--kon btn--cubic" type="submit" name="add" value="登録">
        </div>
    </form>
</div>
