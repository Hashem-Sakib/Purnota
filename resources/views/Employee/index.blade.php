@extends('../navbar1')

@section('title','Employees')

@section('content')
<br>
<a style="float:right" class="btn btn-primary" href="{{route('employee.create')}}">Add New Employee</a>
<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Employee List</h3>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>ADDRESS</th>
            <th>DESIGNATION</th>
            <th>More</th>
        </tr>
        @foreach ($employees as $emp)
        <tr>
            <td>{{$emp->id}}</td>
            <td>{{$emp->name}}</td>
            <td>{{$emp->phone}}</td>
            <td>{{$emp->address}}</td>
            <td>{{$emp->designation}}</td>

            <td><a class="btn btn-info" href="{{route('employee.show',$emp->id)}}">Details</a></td>
        </tr>
        @endforeach


    </table>


</div>


@endsection
