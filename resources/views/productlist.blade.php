@extends('layout')
@section('content')
<div class="container-fluid">
     <h2>Danh sach san pham</h2>
     <table class="table table-striped">
          <tr>
               <th>Ma sp</th>
               <th>Ten sp</th>
               <th>Don vi tinh</th>
               <th>Don gia</th>
               <th>Loai</th>
               <th>Hinh sp</th>
               <th></th>
          </tr>
          @foreach($product as $item)
          <tr>
               <td>{{$item->ProductId}}</td>
               <td><a href="{{route('productdetail', $item->ProductId)}}">{{$item->ProductName}}</a></td>
               <td>{{$item->Unit}}</td>
               <td>{{$item->Price}}</td>
               <td>{{$item->Category->CategoryName}} </td>
               <td>
                    <img src="images/{{$item->Img}}" alt="" width="50" height="50">
               </td>
               <td>
                    <a href="{{route('deleteProduct' , ['ProductId'=> $item->ProductId])}}">Delete</a>
               </td>
          </tr>
          @endforeach
     </table>
     {{$product->links()}}

</div>

@stop