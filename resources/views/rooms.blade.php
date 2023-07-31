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
    <form action="{{route('rooms.store')}}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="room_no">Room No</label>
                <input type="text" name="room_no" class="form-control" id="room_no" placeholder="Enter Room No">
            </div>
            <div class="form-group">
                <label for="room_type_id">Room Type</label>
                <select name="room_type_id" class="custom-select rounded-0" id="room_type_id">
                    <option  value="1">A</option>
                    <option  value="2">B</option>
                    
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


