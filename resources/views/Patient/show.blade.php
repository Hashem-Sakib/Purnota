

@extends('../navbar1')

@section('title','Patient Details')

@section('content')
<br>

<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Patient Details</h3>
    </div>

<table class="table table-bordered table-striped table-hover" border="1px">
    <tr>
        <td>ID</td>
        <td>{{$patients->id}}</td>
    </tr>
    <tr>
        <td>NAME</td>
        <td>{{$patients->name}}</td>
    </tr>
    <tr>
        <td>Date of Birth</td>
        <td>{{$patients->dob}}</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>{{$patients->gender}}</td>
    </tr>
    <tr>
        <td>Religion</td>
        <td>{{$patients->religion}}</td>
    </tr>
    <tr>
        <td>Occupation</td>
        <td>{{$patients->occupation}}</td>
    </tr>
    <tr>
        <td>Marital Status</td>
        <td>{{$patients->marital_status}}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{$patients->phone}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$patients->email}}</td>
    </tr>
    <tr>
        <td>Present Address</td>
        <td>{{$patients->present_address}}</td>
    </tr>
    <tr>
        <td>Permanent Address</td>
        <td>{{$patients->permanent_address}}</td>
    </tr>
    <tr>
        <td>Father's Name</td>
        <td>{{$patients->father_name}}</td>
    </tr>
    <tr>
        <td>Father's NID</td>
        <td>{{$patients->father_nid}}</td>
    </tr>
    <tr>
        <td>Father's Occupation</td>
        <td>{{$patients->father_occ}}</td>
    </tr>
    <tr>
        <td>Father's Phone</td>
        <td>{{$patients->father_phone}}</td>
    </tr>
    <tr>
        <td>Mother's Name</td>
        <td>{{$patients->mother_name}}</td>
    </tr>
    <tr>
        <td>Mother's NID</td>
        <td>{{$patients->mother_nid}}</td>
    </tr>
    <tr>
        <td>Mother's Occupation</td>
        <td>{{$patients->mother_occ}}</td>
    </tr>
    <tr>
        <td>Mother's Phone</td>
        <td>{{$patients->mother_phone}}</td>
    </tr>
    <tr>
        <td>Guardian's Name</td>
        <td>{{$patients->guardian_name}}</td>
    </tr>
    <tr>
        <td>Guardian's NID</td>
        <td>{{$patients->guardian_nid}}</td>
    </tr>
    <tr>
        <td>Guardian's Occupation</td>
        <td>{{$patients->guardian_occ}}</td>
    </tr>
    <tr>
        <td>Guardian's Phone</td>
        <td>{{$patients->guardian_phone}}</td>
    </tr>
    
</table>

</div>


@endsection




