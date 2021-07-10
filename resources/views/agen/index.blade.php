@extends('layouts.master')
@section('title','List Agen | Home Sale')

@section('content')
<div class="row">
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title"><span>Agen List</span></h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Agen</a>
                </li>
                <li class="breadcrumb-item active">List
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="section section-data-tables">
            @if(session('success'))
            <div class="card-alert card gradient-45deg-green-teal">
              <div class="card-content white-text">
                <p>
                  <i class="material-icons">check</i> SUCCESS : {{session('success')}}</p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            @endif
            <div class="row">
              <div class="col s12">
                <div class="card">
                  <div class="card-content">
                    <h4 class="card-title"></h4>
                    <div class="row">
                      <div class="col s12">
                        <table id="page-length-option" class="display">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Picture</th>
                              <th>No Wa</th>
                              <th>Address</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($agen as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td><img src="{{asset('avatar_agen/'.$row->picture)}}" widht="50px" height="50px"></td>
                                    <td>{{$row->no_wa}}</td>
                                    <td>{{$row->address}}</td>
                                    
                                    <td>
                                      <a href="{{url('admin/agen/edit/'.$row->id)}}" title="Edit" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light amber accent-2 white-text">
                                        <i class="material-icons">edit</i>
                                      </a>
                                      <a href="#" title="Delete" class="btn-floating mb-1 btn-small btn-flat waves-effect waves-light red accent-2 white-text btn-delete"
                                      agen-id="{{$row->id}}">
                                        <i class="material-icons">delete</i>
                                      </a>
                                      {{-- <button class="btn btn-warning-confirm waves-effect waves-light">Try Me!</button> --}}
                                        
                                    </td>
                                </tr>
                            @endforeach
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

           
</div>
@endsection
@push('bottom')
<script src="{{asset('backend/app-assets/js/scripts/ui-alerts.min.js')}}"></script>
{{-- <script src="{{asset('backend/app-assets/js/scripts/extra-components-sweetalert.min.js')}}"></script> --}}
<script>
  $('.btn-delete').click(function(){
    var agen_id = $(this).attr('agen-id');
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "Are you sure you want to delete it",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    window.location = "/admin/agen/destroy/"+agen_id+"";
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
  });
</script>


@endpush