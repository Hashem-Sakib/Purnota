@extends('../navbar1')

@section('title','Packages')

@section('content')
<br><br>
 <!-- form start -->
 <div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header">
        <h3 class="card-title">Create New Package</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('packages.store')}}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name"class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" name="duration" class="form-control" id="duration" placeholder="Enter Duration">
            </div>
            
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount">
            </div>
           
          
            

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="button" class="btn btn-primary">Back</button>
            <button type="submit" class="btn btn-success" style="float:right">Submit</button>
        </div>
        
    </form>

@endsection


