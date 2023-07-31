


@extends('../navbar1')

@section('title','Payments')

@section('content')
<br>

<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Payment List</h3>
    </div>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Patient ID</th>
        <th>Patient Name</th>
        <th>More</th>
        
    </tr>
    @foreach ($patients as $p)
        <tr>
           
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td><a class="btn btn-info" href="{{route('payment.show',$p->id)}}">Details</a></td>
            
           
        </tr>
    @endforeach

    
</table>

</div>


@endsection




