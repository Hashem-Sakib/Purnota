

@extends('../navbar1')

@section('title','Employe Details')

@section('content')
<br>
<a style="float:right" class="btn btn-primary" href="{{route('employee.create')}}">Add New Employee</a>
<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Employee Details</h3>
    </div>

<table class="table table-bordered table-striped table-hover" border="1px">
    <tr>
        <td>ID</td>
        <td>{{$emp->id}}</td>
    </tr>
    <tr>
        <td>NAME</td>
        <td>{{$emp->name}}</td>
    </tr>
    <tr>
        <td>PHONE</td>
        <td>{{$emp->phone}}</td>
    </tr>
    <tr>
        <td>ADDRESS</td>
        <td>{{$emp->address}}</td>
    </tr>
    <tr>
        <td>DEPARTMENT</td>
        <td>{{$emp->designation}}</td>
    </tr>
</table>

</div>


@endsection




