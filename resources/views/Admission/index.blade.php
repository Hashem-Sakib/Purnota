

@extends('../navbar1')

@section('title','Admissions')

@section('content')
<br>
<a style="float:right" class="btn btn-primary" href="{{route('admissions.create')}}">Add New Admission</a>
<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Admission List</h3>
    </div>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Patient Name</th>
        <th>Supervisor Name</th>
        
    </tr>
    @foreach ($admission as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->patient_name}}</td>
            <td>{{$a->employee_name}}</td>
           
           
        </tr>
    @endforeach

    
</table>

</div>


@endsection




