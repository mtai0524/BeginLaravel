@extends('layout')
@section('content')
<form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="productname">Ten san pham</label>
        <input type="text" name="productname" id="productname" class="form-control">
        <div class="form-group">
            <label for="unit">Don vi</label>
            <select name="unit" id="unit" class="form-control">
                <option value="Cai">Cai</option>
                <option value="Bo">Bo</option>
                <option value="Chiec">Chiec</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Don gia</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="categories">Loai san pham</label>
            <select name="categories" id="categories" class="form-control">
                @foreach($category as $c)
                    <option value="{{$c->CategoryId}}">{{$c->CategoryName}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="img">Hinh san pham</label>
            <input type="file" name = "fileUpLoad" id = "fileUpLoad" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection