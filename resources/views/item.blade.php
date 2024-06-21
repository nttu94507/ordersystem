@extends('layouts.app')
@section('title', 'Items')

@section('content')
<div class="container col-md-5">
    <div class="card">
        <div class="card-header">{{ __('新增商品') }}</div>
        <form role="form" method="post" action="{{url('items/store')}}">
            @csrf
            <div class="form-group">
                <label for="name">商品名稱</label>
                <input type="text" class="form-control" id="CommodityName" name="CommodityName" placeholder="請輸入商品名稱">
            </div>
            <!-- <div class="mb-3">
                <label for="formFileMultiple" class="form-label">上傳商品圖片</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div> -->
            <div class="form-group">
            <label for="name">商品價格</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="請輸入商品價格"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" id="CommodityPrice" name="CommodityPrice">
                    <span class="input-group-text" id="basic-addon2">NTD</span>
                </div>
            </div>
            <div class="form-group">
                <label for="name">商品數量</label>
                <input type="text" class="form-control" id="CommodityStocks" placeholder="請輸入商品數量" name="CommodityStocks">
            </div>
            <!-- <div class="checkbox">
                <label>
                    <input type="checkbox">请打勾
                </label>
            </div> -->
            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </div>
</div>
</div>
<!-- <p>test</p> -->
@endsection