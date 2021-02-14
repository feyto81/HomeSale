@extends('layouts.master')
@section('title','Add Perumahan | Home Sale')
@section('content')
<div class="row">
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6">
              <h5 class="breadcrumbs-title"><span>Add Perumahan</span></h5>
            </div>
            <div class="col s12 m6 l6 right-align-md">
              <ol class="breadcrumbs mb-0">
                <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Perumahan</a>
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
              <form action="{{url('/admin/perumahan/save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col s12 m6 l6">
                  <div id="prefixes" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title"></h4>
                        
                          <div class="row">
                            <div class="input-field col s12">
                              <input type="text" id="name"  name="name">
                              <label for="name" >Name</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="price" name="price" type="text">
                              <label for="price">Price</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="luas" name="luas" type="text">
                              <label for="luas">Luas</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="room" name="room" type="text">
                              <label for="room">Room</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="bedrooms" name="bedrooms" type="text">
                              <label for="bedrooms">Bedrooms</label>
                            </div>
                           
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="bathrooms" name="bathrooms" type="text">
                              <label for="bathrooms">Bathrooms</label>
                            </div>
                           
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <select name="status">
                                <option disabled selected>Select Status</option>
                                <option value="Sewa">Sewa</option>
                                <option value="Jual">Jual</option>
                               </select>
                              <label for="status">Status</label>
                            </div>
                           
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <select name="agen_id">
                                <option value="" disabled selected>Select Agen</option>
                                @foreach($agen as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                                @endforeach
                               </select>
                              <label for="agen_id">Agen</label>
                            </div>
                           
                          </div>
                          <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Thumbnail</span>
                                    <input type="file" multiple name="thumbnail">
                                </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Gambar 1</span>
                                    <input type="file" multiple name="gambar1">
                                </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" name="gambar1" type="text" placeholder="Upload one or more files">
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Gambar 2</span>
                                    <input type="file" multiple name="gambar2">
                                </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" name="gambar2" type="text" placeholder="Upload one or more files">
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Gambar 3</span>
                                    <input type="file" multiple name="gambar3">
                                </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" name="gambar3" type="text" placeholder="Upload one or more files">
                               </div>
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
                                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                <label for="description" >Description</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <textarea id="details" name="details" class="materialize-textarea"></textarea>
                                <label for="details">Details</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <textarea id="features" name="features" class="materialize-textarea"></textarea>
                                <label for="features">Features</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="video_link" name="video_link" type="text">
                                <label for="video_link">Video Link</label>
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="input-field col s12">
                                <input id="location" name="location" type="text">
                                <label for="location">Location</label>
                              </div>
                              <div class="input-field col s12">
                                <input id="address" name="address" type="text">
                                <label for="address">Address</label>
                              </div>
                              <div class="input-field col s12">
                                <input id="city" name="city" type="text">
                                <label for="city">City</label>
                              </div>
                              <div class="input-field col s12">
                                <input id="provinsi" name="provinsi" type="text">
                                <label for="provinsi">Provinsi</label>
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