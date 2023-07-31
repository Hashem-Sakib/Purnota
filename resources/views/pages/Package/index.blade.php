

@extends('../navbar1')

@section('title','Packages')

@section('content')
<br>
<a style="float:right" class="btn btn-primary" href="{{route('packages.create')}}">Add New Package</a>
<br><br>
<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Package List</h3>
    </div>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Duration</th>
        <th>Amount</th>
        
    </tr>
    @foreach ($packages as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->duration}}</td>
            <td>{{$p->amount}}</td>
           
        </tr>
    @endforeach

    
</table>

</div>


@endsection




