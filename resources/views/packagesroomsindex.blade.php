


@extends('../navbar1')

@section('title','Packages Rooms')

@section('content')
<br>


<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Packages Rooms List</h3>
    </div>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>Package ID</th>
        <th>Room ID</th>
        
        
    </tr>
    @foreach ($packagesrooms as $p)
        <tr>
           
            <td>{{$p->package_name}}</td>
            <td>{{$p->room}}</td>
            
            
           
        </tr>
    @endforeach

    
</table>

</div>


@endsection




