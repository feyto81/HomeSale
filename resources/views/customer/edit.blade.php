@extends('layouts.master')
@section('title','Edit Customer | Home Sale')
@section('content')
<div class="row">
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title"><span>Edit Customer</span></h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Customer</a>
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
              <form action="{{url('/admin/customer/update/'.$customer->id)}}" method="POST">
                @csrf
                <div class="col s12 m6 l6">
                  <div id="prefixes" class="card card card-default scrollspy">
                    <div class="card-content">
                      <h4 class="card-title"></h4>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="name" name="name" type="text" value="{{$customer->name}}">
                          <label for="name">Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">email</i>
                          <input id="email" name="email" type="email" value="{{$customer->email}}">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">contact_phone</i>
                          <input id="mobile_number" name="mobile_number" type="text" value="{{$customer->mobile_number}}">
                          <label for="mobile_number">Mobile Number</label>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l6">
                  <div id="prefixes" class="card card card-default scrollspy">
                    <div class="card-content">
                      <h4 class="card-title"></h4>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">receipt</i>
                          <input id="address" name="address" type="text" value="{{$customer->address}}">
                          <label for="address">Address</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">web_asset</i>
                          <input id="kodepos" name="kodepos" type="text" value="{{$customer->kodepos}}">
                          <label for="kodepos">Kode Pos</label>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="material-icons prefix">lock_outline</i>
                          <input id="password" name="password" type="password" value="">
                          <label for="password">Password</label>
                          <small>Biarkan kosong jika tidak ingin mengubah password</small>
                        </div>
                      </div>
                      <div class="row">
                        
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