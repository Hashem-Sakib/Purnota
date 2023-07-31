
@extends('../navbar1')

@section('title','Visitors')

@section('scripts')

<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   
@endsection

@section('content')
<br><br>
<div class="card card-primary col-md-6" style="margin: auto">
  <div class="card-header">
      <h3 class="card-title">Visitor</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('visitors.store')}}" method="POST">
      <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="relationship">Relationship</label>
                <input type="text" name="relationship" class="form-control" id="relationship" placeholder="Enter Relationship">
            </div>
            <div class="form-group">
                <label for="goods_received">Goods</label>
                <input type="text" name="goods_received" class="form-control" id="goods_received" placeholder="Enter Received Goods Description">
            </div>
          <div class="form-group">
              <label for="monitored_by">Monitored By</label>
              <select name="monitored_by" class="custom-select rounded-0" id="monitored_by">
                @foreach ($employees as $e)
                  <option value="{{$e->id}}">{{$e->name}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
                <label for="admission_id">Admission ID</label>
                <input type="text" name="admission_id" class="form-control" id="admission_id" placeholder="Enter Admission ID">
            </div>

          
          <!-- Date and time -->
          {{-- <div class="form-group">
              <label>Date and time:</label>
              <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                  <input type="datetime-local" name="date_time" class="form-control datetimepicker-input" data-target="#reservationdatetime"
                      placeholder="Enter Date & Time" />
                  <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div> --}}

          <div class="form-group">
            <label for="date_time">Date & Time :</label>
            <input type="datetime-local"  class="form-control"  id="date_time" name="date_time">
        </div>
          


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
          <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </form>
</div>



@endsection


