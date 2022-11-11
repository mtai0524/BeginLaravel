<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <base href="{{asset('')}}">
     <link rel="stylesheet" href="prod_style.css">
</head>

<body>
     <div class="container-fluid">
          <div class="row">
               <h1 class="banner">Quan ly ban hang</h1>
               <hr>
               <nav class="navbar navbar-default">
                    <div class="container-fluid">
                         <ul class="nav navbar-nav">
                              <li class="active"><a href="{{route('homepage')}}">Trang chu</a></li>
                              <li><a href="{{route('add')}}">Them san pham</a></li>
                              <li><a href="{{route('productlist')}}">Danh muc san pham</a></li>
                         </ul>
                    </div>
               </nav>
               @yield('content')
               <hr>
               <p class="footer">
                    Copyright <?php echo date('m/Y'); ?>
               </p>
          </div>
     </div>

</body>

</html>