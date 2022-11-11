@extends('layout')
@section('content')
<div class="container-fluid">
     <div class="row show">
          @foreach($product as $item)
          <div class="product col-md-3 col-lg-3">
               <a href="{{route('productdetail', $item->ProductId)}}">{{$item->ProductName}}</a>
               
               <br>
               <!-- <a href="#">{{$item->ProductId}}</a>
               <br> -->
               <a href="#"><img src="images/{{$item->Img}}" height="50px"></a>
               <br>
               @php echo number_format($item->Price, 0);
               @endphp
          </div>
          @endforeach
          
     </div>
</div>
{{$product->links()}}
@stop