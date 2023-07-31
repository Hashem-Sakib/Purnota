@extends('../navbar1')

@section('title','Employees')

@section('content')
<br><br>
 <!-- form start -->
 <div class="card card-primary" >
    <div class="card-header">
        <h3 class="card-title">Add New Employee</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('employee.store')}}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"  name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
           
            <div class="form-group">
                <label for="designation">Designation</label>
                <select name="designation" class="custom-select rounded-0" id="designation">
                    <option  value="Employee">Employee</option>
                    <option  value="Supervisor">Supervisor</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text"  name="phone"  class="form-control" id="phone" placeholder="Enter phone">
            </div>
           
            <div class="form-group">
                <label for="present_address">Address</label><br>
                
                <textarea name="address" id="address"class="form-control" rows="5" placeholder="Enter Address"></textarea>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"  name="password" class="form-control" id="password" placeholder="Enter Password">
            </div>
            

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="button" class="btn btn-primary">Back</button>
            <button type="submit" class="btn btn-success" style="float:right">Submit</button>
        </div>
        
    </form>

@endsection


