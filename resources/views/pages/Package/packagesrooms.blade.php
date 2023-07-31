@extends('../navbar1')

@section('title','Packages Rooms')

@section('content')
<br><br>
 <!-- form start -->
 <div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Create Package Rooms</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="package">Package</label>
                <select name="package" class="custom-select rounded-0" id="package">
                    <option>Package 1</option>
                    <option>Package 2</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="room">Room</label>
                <select name="room" class="custom-select rounded-0" id="room">
                    <option>Room 1</option>
                    <option>Room 2</option>
                    
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


