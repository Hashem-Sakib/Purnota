@extends('../navbar1')

@section('title','Rooms')

@section('content')
<br><br>
 <!-- form start -->
 <div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Create Rooms</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('packages.store')}}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="package_id">Package</label>
                <select name="package_id" class="custom-select rounded-0" id="package_id">
                  <option value="-1" selected disabled>--Select One--</option>
                  @foreach ($packages as $p)
                  <option value="{{$p->id}}">{{$p->name}}</option>
                 @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="room_id">Room No</label>
                <select name="room_id" class="custom-select rounded-0" id="room_id">
                  <option value="-1" selected disabled>--Select One--</option>
                  @foreach ($rooms as $r)
                  <option value="{{$r->id}}">{{$r->room_no}}</option>
                 @endforeach
                </select>
            </div>
            
           
           
          
            

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="button" class="btn btn-primary">Back</button>
            <button type="submit" class="btn btn-success" style="float:right">Submit</button>
        </div>
        
    </form>

@endsection


