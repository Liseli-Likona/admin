@extends('template')
@section('content')
    <div>
        <div>
            @if(session()->has('success'))
            <span class="text-warning">{{ session('success') }}</span>
            @endif
        </div>
        <form action="{{ route('employees.store') }}" method="post">
            @csrf

            <input type="text" class="form-control" style="width: 50%" name="name"  placeholder="name" id="">
            <br>
            <input type="text" class="form-control" style="width: 50%" name="basicpay" placeholder="basic pay" id="">
            <br>
            <input type="text" class="form-control" style="width: 50%" name="netpay" placeholder="net pay" id="">

            <br>

            <button class="btn btn-sm btn-success">SAVE</button>
 


        </form>
    </div>

    <br>
    <div>
        <table class="table table-bordered" >
            <thead class="bg-warning" >
                <tr>
                    <th>NAME</th>
                    <th>BASIC PAY</th>
                    <th>NET PAY</th>

                </tr>

            </thead>
            @foreach ($employees as $employee)
            <tbody>
                <tr>
                    <td>
                        <a href="{{ route('employees.show',$employee->id) }}">{{ $employee->name }}</a>
                    </td>
                    <td>{{ $employee->basicpay }}</td>
                    <td>{{ $employee->netpay }}</td>

                </tr>
            </tbody>
            @endforeach
            
        </table>
        <br>
        {{ $employees->links() }}
    </div>
@endsection