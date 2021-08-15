@extends('common.parent')
@include('common.head')
@include('common.header')
<div class="content">
    <div class="content-title">
        <h2 class="heading18">商品詳細</h2>
    </div><br>
        <div class="form font-weight-bold h5">
            <label>ID</label><br>
            <label>{{$product_data['product_id']}}</label>
        </div>
        <div class="form font-weight-bold h5">
            <label>商品名</label><br>
            <label>{{$product_data['product_name']}}</label>
        </div>
        <div class="form font-weight-bold h5">
            <label>価格</label><br>
            <label>{{$product_data['product_price']}}</label>
        </div>
        <div class="form font-weight-bold h5">
            <label>画像</label><br>
          @if($product_data['product_gazou'] == null)
            画像なし
          @else
            <img src="{{asset('storage/'.$product_data['product_gazou'])}}">
          @endif
        </div>
        <a class="btn btn--kon btn--cubic" href={{ route('product.index') }}>戻る</a>
</div>
