@extends('../navbar1')

@section('title','Patient Info')

@section('content')

<br>

 <h1  style="text-align: center; font-family:Candara; color:rgb(66, 97, 13); text-shadow:7px; ">Purnata Rehab</h1>
 <h6 style="text-align: center;">SHAIBAL, Comilla Medical College Road, Cumilla, Bangladesh.</h6>
 <h6 style="text-align: center;">Contact: 01728400040</h6>
 {{-- <div style="margin: auto"><i class="fas fa-map-marker-alt"   >SHAIBAL, Comilla Medical College Road, Cumilla, Bangladesh</i></div>
 <i class="fa fa-phone" style=" text-align: center; padding-left:45%;  ">01728400040</i>

 
<br><br> --}}
 <div class="card card-primary col-md-8" style="margin: auto; ">
    <div class="card-header" >
        <h3 class="card-title">Patient Information Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form   action="{{route('patients.store')}}" method="POST">
        <div class="card-body" >
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date & Time :</label>
                <input type="datetime-local" name="dob" class="form-control"  id="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="custom-select rounded-0" id="gender" required>
                    <option  value="Male">Male</option>
                    <option  value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="pet-select">Gender</label>
                <br>
                <select name="pets" id="pet-select">
                    <option value="">--Select--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Others</option>
                </select>
            </div> -->
            <div class="form-group">
                <label for="religion">Religion</label>
                <input type="text" name="religion" class="form-control" id="religion" placeholder="Enter Religion" required>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Enter Occupation" required>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital Status</label>
                <select name="marital_status" class="custom-select rounded-0" id="marital_status" required>
                    <option  value="Unmarried">Unmarried</option>
                    <option  value="Married">Married</option>
                    <option  value="Divorced">Divorced</option>
                
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" >
            </div>
            <div class="form-group">
                <label for="present_address">Present Address</label><br>
                {{-- <input type="text" class="form-control" id="present_address" placeholder="Enter Present Address"> --}}
                <textarea name="present_address" id="present_address"class="form-control" rows="5" placeholder="Enter Present Address" required> </textarea>
            </div>
            <div class="form-group">
                <label for="permanent_address">Permanent Address</label>
                {{-- <input type="text" class="form-control" id="permanent_address"
                    placeholder="Enter Permanent Address "> --}}
                    <textarea name="permanent_address" id="permanent_address"class="form-control" rows="5" placeholder="Enter Permanent Address" required></textarea>
                    
            </div>
            <div class="form-group">
                <label for="father_name">Father's Name</label>
                <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter Father's Name" required>
            </div>
            <div class="form-group">
                <label for="father_nid">Father's NID (Not Mandatory)</label>
                <input type="text" name="father_nid" class="form-control" id="father_nid" placeholder="Enter Father's NID" >
            </div>
            <div class="form-group">
                <label for="father_phone">Father's Phone</label>
                <input type="text" name="father_phone" class="form-control" id="father_phone" placeholder="Enter Father's Phone" >
            </div>
            <div class="form-group">
                <label for="father_occ">Father's Occupation</label>
                <input type="text" name="father_occ" class="form-control" id="father_occ" placeholder="Enter Father's Occupation" >
            </div>
            <div class="form-group">
                <label for="mother_name">Mother's Name</label>
                <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Mother's Name" required>
            </div>
            <div class="form-group">
                <label for="mother_nid">Mother's NID (Not Mandatory)</label>
                <input type="text" name="mother_nid" class="form-control" id="mother_nid" placeholder="Enter Mother's NID" >
            </div>
            <div class="form-group">
                <label for="mother_phone">Mother's Phone</label>
                <input type="text" name="mother_phone" class="form-control" id="mother_phone" placeholder="Enter Mother's Phone" >
            </div>
            <div class="form-group">
                <label for="mother_occ">Mother's Occupation</label>
                <input type="text" name="mother_occ" class="form-control" id="mother_occ" placeholder="Enter Mother's Occupation" >
            </div>

{{-- tryyyy --}}
{{-- Checkbox1 --}}


            <div class="form-group">
                <label for="">Select Guardian</label>
                &nbsp;<input type="checkbox" name="father" value="father" id="father" >Father &nbsp;&nbsp;
                &nbsp;<input type="checkbox" name="mother" value="mother" id="mother" >Mother &nbsp;&nbsp;
                
                &nbsp;<input id="checkbox" type=checkbox>Other &nbsp;&nbsp;
              </div>
        
              <div id="delivery" style="display:none;">
                <div class="form-group">
                    <div class="form-group">
                        <label for="guardian_name">Guardian's Name</label>
                        <input type="text" name="guardian_name" class="form-control" id="guardian_name" placeholder="Enter Guardian's Name">
                    </div>
                    <div class="form-group">
                        <label for="guardian_nid">Guardian's NID (Not Mandatory)</label>
                        <input type="text" name="guardian_nid" class="form-control" id="guardian_nid" placeholder="Enter Guardian's NID">
                    </div>
                    <div class="form-group">
                        <label for="guardian_phone">Guardian's Phone</label>
                        <input type="text" name="guardian_phone" class="form-control" id="guardian_phone" placeholder="Enter Father's Phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="guardian_occ">Guardian's Occupation</label>
                        <input type="text" name="guardian_occ" class="form-control" id="guardian_occ" placeholder="Enter Guardian's Occupation">
                    </div>
                </div>
              </div>


              {{-- try --}}

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


