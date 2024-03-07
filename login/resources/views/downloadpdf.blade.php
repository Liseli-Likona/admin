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
<style>

.content-info {
    background: #f9f9f9;
    padding: 40px 0;
    background-size: cover!important;
    background-position: top center!important;
    background-repeat: no-repeat!important;
    position: relative;
   padding-bottom:100px;
}

table {
    width: 100%;
    background: #fff;
    border: 1px solid #dedede;
}

table thead tr th {
    padding: 20px;
    border: 1px solid #dedede;
    color: #000;
}

table.table-striped tbody tr:nth-of-type(odd) {
    background: #f9f9f9;
}

table.result-point tr td.number {
    width: 100px;
    position: relative;
} 

.text-left {
    text-align: left!important;
}

table tr td {
    padding: 10px 20px;
    border: 1px solid #dedede;
}
table.result-point tr td .fa.fa-caret-up {
    color: green;
}

table.result-point tr td .fa {
    font-size: 20px;
    position: absolute;
    right: 20px;
}

table tr td {
    padding: 10px 40px;
    border: 1px solid #dedede;
}

table tr td img {
    max-width: 32px;
    float: left;
    margin-right: 11px;
    margin-top: 1px;
    border: 1px solid #dedede;
}


</style>

<body class="container-fluid mt-3">
    <div> 
       
        {{-- <a class="btn btn-sm btn-success mb-3" href="{{ route('employees.index') }}">HOME</a>
        <br>
        <br>
        <a  class="btn btn-sm btn-success mb-3" href="{{ route('pdf') }}">download</a>
        <br> --}}
        <table style="border: 1px solid black">
            <thead  >
                <tr> 
                    <th style="border: 1px solid black">NAME</th>
                    <th style="border: 1px solid black" >REASON</th>
                    <th style="border: 1px solid black" >AMOUNT</th>
                    <th style="border: 1px solid black">DATE APPLIED</th>


                </tr>

            </thead>
            @foreach ($adavances as $advance)
            <tbody >
                <tr>
                    <td style="border: 1px solid black">{{ $advance->name }}</td>
                    <td style="border: 1px solid black">{{ $advance->reason }}</td>
                    <td style="border: 1px solid black">K{{ $advance->amount }}</td>
                    <td style="border: 1px solid black">{{ $advance->created_at->toFormattedDateString()  }}</td>


                </tr>
            </tbody>
            @endforeach
            
        </table>
        <br>
        {{-- {{ $adavances->links() }} --}}
    </div>

<br>


<div class="min-h-screen bg-red-800 py-5">
    <div class='overflow-x-auto w-full'>
        <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
            <thead class="bg-gray-900">
                <tr class="text-white text-left">
                    <th class="font-semibold text-sm uppercase px-6 py-4"> Name </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4"> Designation </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> status </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> role </th>
                    <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://i.imgur.com/siKnZP2.jpg' /> </div>
                            <div>
                                <p> Mira Rodeo </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> mirarodeo23@mail.com </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class=""> Software Developer </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide"> Development </p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Active </span> </td>
                    <td class="px-6 py-4 text-center"> Developer </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-purple-800 hover:underline">Edit</a> </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://i.imgur.com/siKnZP2.jpg' /> </div>
                            <div>
                                <p> Mira Rodeo </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> mirarodeo23@mail.com </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class=""> Software Developer </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide"> Development </p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Active </span> </td>
                    <td class="px-6 py-4 text-center"> Developer </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-purple-800 hover:underline">Edit</a> </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://i.imgur.com/siKnZP2.jpg' /> </div>
                            <div>
                                <p> Mira Rodeo </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> mirarodeo23@mail.com </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class=""> Software Developer </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide"> Development </p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Active </span> </td>
                    <td class="px-6 py-4 text-center"> Developer </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-purple-800 hover:underline">Edit</a> </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://i.imgur.com/siKnZP2.jpg' /> </div>
                            <div>
                                <p> Mira Rodeo </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> mirarodeo23@mail.com </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class=""> Software Developer </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide"> Development </p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Active </span> </td>
                    <td class="px-6 py-4 text-center"> Developer </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-purple-800 hover:underline">Edit</a> </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10"> <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://i.imgur.com/siKnZP2.jpg' /> </div>
                            <div>
                                <p> Mira Rodeo </p>
                                <p class="text-gray-500 text-sm font-semibold tracking-wide"> mirarodeo23@mail.com </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class=""> Software Developer </p>
                        <p class="text-gray-500 text-sm font-semibold tracking-wide"> Development </p>
                    </td>
                    <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-green-600 font-semibold px-2 rounded-full"> Active </span> </td>
                    <td class="px-6 py-4 text-center"> Developer </td>
                    <td class="px-6 py-4 text-center"> <a href="#" class="text-purple-800 hover:underline">Edit</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>





     <!-- Bootstrap 5 JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
 </script>
</body>
</html>