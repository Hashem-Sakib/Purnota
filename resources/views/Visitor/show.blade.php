

@extends('../navbar1')

@section('title','Patient Details')

@section('content')
<br>

<div class="card card-primary " style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Patient Details</h3>
    </div>

    <table class="table table-bordered table-striped table-hover" border="1px">
        {{-- <tr>
            <td>ID</td>
            <td>{{$payments->id}}</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>{{$payments->total_amount}}</td>
        </tr>  --}}
        <tr>
            <td>Admission ID</td>
            <td>{{$visitors->admission_id}}</td>
        </tr>
        {{-- <tr>
            <td>Due</td>
            <td>{{$due=$payments->total_amount-$total}}</td>
        </tr> --}}
    
        
        
    </table>

</div>


@endsection




