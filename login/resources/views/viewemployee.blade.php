<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     {{-- font aweson link --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <title>Tech World Innovations Ltd</title>

<!-- Bootstrap 5 CSS -->
 <!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>
<body class="container-fluid mt-3">
</div>
<form action="{{ route('employees.adavances.store',$employee->id)}}" method="POST">
    @csrf

    <input type="text" class="form-control" style="width: 50%" name="reason"  placeholder="REASON" id="">
    <br>
    <input type="text" class="form-control" style="width: 50%" name="amount" placeholder="AMOUNT" id="">
    <br>
    {{-- <input type="text" class="form-control" style="width: 50%" name="netpay" placeholder="net pay" id=""> --}}

    <br>

    <button class="btn btn-sm btn-success">SAVE</button>



</form>
</div>




      <!-- Bootstrap 5 JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
 </script>
</body>
</html> 
