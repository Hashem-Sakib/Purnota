


@extends('../navbar1')

@section('title','Patients')

@section('content')
<br>
<a style="float:right" class="btn btn-primary" href="{{route('patients.create')}}">Add New Patient</a>
<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Patient List</h3>
    </div>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Patient ID</th>
        <th>Patient Name</th>
        
    </tr>
    @foreach ($patients as $p)
        <tr>
           
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            
           
        </tr>
    @endforeach

    
</table>

</div>


@endsection




