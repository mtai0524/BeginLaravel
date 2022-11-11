@extends('layout')
@section('content')
<div class="container-fluid">
     <div class="productdetail">
          Ma san pham: {{$prod->ProductId}}<br>
          Ten san pham: {{$prod->ProductName}}<br>
          Don vi tinh: {{$prod->Unit}}<br>
          Don gia: @php echo number_format($prod->Price); @endphp<br>
          <img src="images/{{$prod->Img}}" width="150" height="150">
     </div>
</div>

@stop