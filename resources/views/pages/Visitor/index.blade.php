


@extends('../navbar1')

@section('title','Visitors')

@section('content')
<br>
<a style="float:right" class="btn btn-primary" href="{{route('visitors.create')}}">Add New Visit</a>
<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Visit History</h3>
    </div>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Patient Name</th>
        <th>NAME</th>
        <th>Relationship</th>
        <th>Monitored By</th>
        <th>Good Received</th>
        <th>Date-Time</th>
        
    </tr>
    @foreach ($visitors as $v)
        <tr>
           
            <td>{{$v->patient_name}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->relationship}}</td>
            <td>{{$v->monitored_by}}</td>
            <td>{{$v->goods_received}}</td>
            <td>{{$v->date_time}}</td>
           
        </tr>
    @endforeach

    
</table>

</div>


@endsection




