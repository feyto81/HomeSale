@extends('layouts.master')
@section('title','Add Artikel | Home Sale')
@section('content')
<div class="row">
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title"><span>Add Article</span></h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Article</a>
                </li>
                <li class="breadcrumb-item active">Add
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
              <form action="{{url('/admin/artikel/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col s12">
                  <div id="prefixes" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        
                          <div class="row">
                            <div class="input-field col s12">
                              <input type="text" id="judul"  name="judul">
                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                              <label for="judul" >Judul</label>
                            </div>
                          </div>
                         
                          <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Gambar</span>
                                    <input type="file" multiple name="gambar">
                                </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="input-field col s12">
                                <textarea id="content" name="content" class="materialize-textarea"></textarea>
                              <label for="content">Content</label>
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
<script>
    var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
</script>
@endpush