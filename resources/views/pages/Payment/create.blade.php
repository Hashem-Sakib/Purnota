@extends('../navbar1')

@section('title','Patient Info')

@section('content')

<br>

 <h1  style="text-align: center; font-family:Candara; color:rgb(66, 97, 13); text-shadow:7px; ">Purnata Rehab</h1>

 {{-- <div style="margin: auto"><i class="fas fa-map-marker-alt"   >SHAIBAL, Comilla Medical College Road, Cumilla, Bangladesh</i></div>
 <i class="fa fa-phone" style=" text-align: center; padding-left:45%;  ">01728400040</i>

 
<br><br> --}}
<div class="card card-primary col-md-8" style="margin: auto; ">
    <div class="card-header" >
        <h3 class="card-title">Payment Information</h3>
    </div>
    <!-- /.card-header -->		
    <!-- form start -->
    <form   action="{{route('payments.store')}}" method="POST">
        <div class="card-body" >
            <div class="form-group">
                <label for="name">Patient Name</label>
                <input type="text" name="name" value="{{$patients->name}}" class="form-control" id="name" value="">
            </div>
            <div class="form-group">
                <label for="name">Patient ID</label>
                <input type="text" name="patient_id" value="{{$patients->id}}" class="form-control" id="name" value="">
            </div>
            <div class="form-group">
                <label for="dob">Admission ID</label>
                <input type="text" name="admission_id" value="{{$admissions->id}}" class="form-control"  id="dob" required>
            </div>
          
            <div class="form-group">
                <label for="date_time">Date & Time :</label>
                <input type="datetime-local" name="date_time" class="form-control"  id="date_time" required>
            </div>
            
            <div class="form-group">
                <label for="total_amount">Total Amount</label>
                <input type="text" name="total_amount" class="form-control" id="total_amount" placeholder="Enter Total Amount" required>
            </div>
            <div class="form-group">
                <label for="paid_amount">Paid Amount</label>
                <input type="text" name="paid_amount" class="form-control" id="paid_amount" placeholder="Enter Paid Amount" required>
            </div>
            <div class="form-group">
                <label for="paid_by">Paid By</label>
                <input type="text" name="paid_by" class="form-control" id="paid_by" placeholder="Paid By" required>
            </div>
            <div class="form-group">
                <label for="relationship">Relationship With Patient</label>
                <select name="relationship" class="custom-select rounded-0" id="relationship" required>
                    <option  value="Unmarried">Father</option>
                    <option  value="Married">Mother</option>
                    <option  value="Divorced">Guardian</option>
                
                </select>
            </div>
            <div class="form-group">
                <label for="paid_method">Paid Method</label>
                <input type="text" name="paid_method" class="form-control" id="paid_method" placeholder="Enter Paid Method" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control" id="status" placeholder="Enter status" required>
            </div>
            <div class="form-group">
                <label for="received_by">Received By</label>
                <select name="received_by" class="custom-select rounded-0" id="received_by" required>
                    <option value="-1" selected disabled>--Select One--</option>
                @foreach ($employees as $e)
                <option value="{{$e->id}}">{{$p->name}}</option>
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


    <script>

    var checkbox = document.getElementById('checkbox');
    var delivery_div = document.getElementById('delivery');
    checkbox.onclick = function() {
        console.log(this);
    if(this.checked) {
        delivery_div.style['display'] = 'block';
    } else {
        delivery_div.style['display'] = 'none';
   }
};




    </script>

@endsection


