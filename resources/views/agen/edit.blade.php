@extends('layouts.master')
@section('title','Edit Agen | Home Sale')
@section('content')
<div class="row">
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title"><span>Edit Agen</span></h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Agen</a>
                </li>
                <li class="breadcrumb-item active">Edit
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="seaction">
            @if (count($errors) > 0)
            <div class="card-alert card gradient-45deg-amber-amber">
              <div class="card-content white-text">
                <p>
                  <i class="material-icons">warning</i> WARNING : <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul></p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            @endif
            
            <div class="row">
              <form action="{{url('/admin/agen/update/'.$agen->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col s12 m6 l6">
                  <div id="prefixes" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        
                          <div class="row">
                            <div class="input-field col s12">
                              <input type="text" id="name"  name="name" value="{{$agen->name}}">
                              <label for="name" >Name</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="email" name="email" type="email" value="{{$agen->email}}">
                              <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="phone" name="phone" type="text" value="{{$agen->phone}}">
                              <label for="phone">Phone</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="no_wa" name="no_wa" type="text" value="{{$agen->no_wa}}">
                              <label for="no_wa">No Wa</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Picture</span>
                                    <input type="file" multiple name="picture">
                                    
                                </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                <small>Biarkan kosong jika tidak ingin mengubah foto</small>
                               </div>
                            </div>
                         </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea id="address" name="address" class="materialize-textarea">{{$agen->address}}</textarea>
                              <label for="address">Address</label>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                  <i class="material-icons right">send</i>
                                </button>
                              </div>
                            </div>
                          </div>
                       
                    </div>
                  </div>
                </div>
                
              </form>
                
            </div>
          </div>
        </div>
      </div>

           
</div>
@endsection
@push('bottom')
<script src="{{asset('backend/app-assets/js/scripts/ui-alerts.min.js')}}"></script>
@endpush