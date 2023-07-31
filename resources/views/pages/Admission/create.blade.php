
@extends('../navbar1')

@section('title','Admission Info')

@section('scripts')

<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   
@endsection

@section('content')
<br><br>


{{-- Searchbox Start --}}
  <div class="form-inline" style="float:right">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar " type="search" placeholder="Search Patient" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
{{-- Search box end --}}

<br><br><br>
{{-- <ion-icon name="person-add-outline"></ion-icon> --}}
<a href="patientinfo" style="float:right" class="btn btn-primary ">Add New Patient </a>




<div class="card card-primary col-md-6" style="margin: auto">
  <div class="card-header">
      <h3 class="card-title">Admission Form</h3>
  </div>
  
  <form action="{{route('admissions.store')}}" method="POST">
      <div class="card-body">
        <div class="form-group">
          <label for="patient_id">Patient ID </label>
          <input type="text" name="patient_id" class="form-control" id=""  value="{{$patients->id}}" placeholder="pi">
      </div>
          <div class="form-group">
              <label for="package_room_id">Package</label>
              <select name="package_room_id" class="custom-select rounded-0" id="package_room_id">
                <option value="-1" selected disabled>--Select One--</option>
                @foreach ($packages as $p)
                <option value="{{$p->id}}">{{$p->package_name}}-{{$p->room}}</option>
               @endforeach
              </select>
          </div>
          <div class="form-group">
              <label for="supervisor_id">Supervisor</label>
              <select name="supervisor_id" class="custom-select rounded-0" id="supervisor_id">
                <option value="-1" selected disabled>--Select One--</option>
                @foreach ($supervisors as $s)
                <option value="{{$s->id}}">{{$s->name}}</option>
               @endforeach
              </select>
          </div>

          <div class="form-group">
              <label for="discount">Discount Amount </label>
              <input type="text" class="form-control" id="discount" placeholder="Enter Discounted Amount">
          </div>
          <div class="form-group">
              <label for="total_amount">Total Amount</label>
              <input type="text" name="total_amount" class="form-control" id="total_amount" placeholder="Enter Total Amount">
          </div>
          <div class="form-group">
              <label for="total_paid">Total Paid</label>
              <input type="text" name="total_paid" class="form-control" id="total_paid" placeholder="Enter Total Paid Amount">
          </div>
          <!-- Date and time -->
          <div class="form-group">
            <label for="date_time">Date & Time :</label>
            <input type="datetime-local" name="date_time" class="form-control"  id="date_time" required>
        </div>
          
          <div class="form-group">
            <label for="admitted_by">Admitted By</label>
            <select name="admitted_by" class="custom-select rounded-0" id="admitted_by">
              <option value="-1" selected disabled>--Select One--</option>
              @foreach ($employees as $e)
              <option value="{{$e->id}}">{{$e->name}}</option>
             @endforeach
            </select>
        </div>


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
          <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </form>
</div>


  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
  <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script>
  <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
  <script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
  <script src="{{asset('plugins/dropzone/min/dropzone.min.js')}}"></script>
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  {{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}


  {{-- <!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script> --}}
<!-- Bootstrap4 Duallistbox -->
{{-- <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script> --}}
{{-- <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script> --}}
<!-- date-range-picker -->
{{-- <script src="../../plugins/daterangepicker/daterangepicker.js"></script> --}}
<!-- bootstrap color picker -->
{{-- <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
<!-- Bootstrap Switch -->
{{-- <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script> --}}
<!-- BS-Stepper -->
{{-- <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script> --}}
<!-- dropzonejs -->
{{-- <script src="../../plugins/dropzone/min/dropzone.min.js"></script> --}}
<!-- AdminLTE App -->
{{-- <script src="../../dist/js/adminlte.min.js"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src="../../dist/js/demo.js"></script> --}}
<!-- Page specific script -->
<script>
$(function () {
//Initialize Select2 Elements
$('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
  theme: 'bootstrap4'
})

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', {
  'placeholder': 'dd/mm/yyyy'
})
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', {
  'placeholder': 'mm/dd/yyyy'
})
//Money Euro
$('[data-mask]').inputmask()

//Date picker
$('#reservationdate').datetimepicker({
  format: 'L'
});

//Date and time picker
$('#reservationdatetime').datetimepicker({
  icons: {
    time: 'far fa-clock'
  }
});

//Date range picker
$('#reservation').daterangepicker()
//Date range picker with time picker
$('#reservationtime').daterangepicker({
  timePicker: true,
  timePickerIncrement: 30,
  locale: {
    format: 'MM/DD/YYYY hh:mm A'
  }
})
//Date range as a button
$('#daterange-btn').daterangepicker({
    ranges: {
      'Today': [moment(), moment()],
      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
        'month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate: moment()
  },
  function (start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  }
)

//Timepicker
$('#timepicker').datetimepicker({
  format: 'LT'
})

//Bootstrap Duallistbox
$('.duallistbox').bootstrapDualListbox()

//Colorpicker
$('.my-colorpicker1').colorpicker()
//color picker with addon
$('.my-colorpicker2').colorpicker()

$('.my-colorpicker2').on('colorpickerChange', function (event) {
  $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
})

$("input[data-bootstrap-switch]").each(function () {
  $(this).bootstrapSwitch('state', $(this).prop('checked'));
})

})
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function () {
window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})

// DropzoneJS Demo Code Start
Dropzone.autoDiscover = false

// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template")
previewNode.id = ""
var previewTemplate = previewNode.parentNode.innerHTML
previewNode.parentNode.removeChild(previewNode)

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
url: "/target-url", // Set the url
thumbnailWidth: 80,
thumbnailHeight: 80,
parallelUploads: 20,
previewTemplate: previewTemplate,
autoQueue: false, // Make sure the files aren't queued until manually added
previewsContainer: "#previews", // Define the container to display the previews
clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
})

myDropzone.on("addedfile", function (file) {
// Hookup the start button
file.previewElement.querySelector(".start").onclick = function () {
  myDropzone.enqueueFile(file)
}
})

// Update the total progress bar
myDropzone.on("totaluploadprogress", function (progress) {
document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
})

myDropzone.on("sending", function (file) {
// Show the total progress bar when upload starts
document.querySelector("#total-progress").style.opacity = "1"
// And disable the start button
file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
})

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function (progress) {
document.querySelector("#total-progress").style.opacity = "0"
})

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function () {
myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
}
document.querySelector("#actions .cancel").onclick = function () {
myDropzone.removeAllFiles(true)
}
// DropzoneJS Demo Code End

</script>

@endsection


