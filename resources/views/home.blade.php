@extends('layouts.master')
@section('title','Dashboard | Home Sale')
@section('content')
<div class="row">
  <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <h5 class="breadcrumbs-title"><span>Dashboard</span></h5>
        </div>
        <div class="col s12 m6 l6 right-align-md">
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="index-2.html">Dashboard</a>
            </li>
            
          </ol>
        </div>
      </div>
      <div class="row">

       <div class="col s12 m6 l6 xl3">
        <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
           <div class="padding-4">
              <div class="row">
                 <div class="col s7 m7">
                    <i class="material-icons background-round mt-5">receipt</i>
                    <p>Agen</p>
                 </div>
                 <div class="col s5 m5 right-align">
                    <h5 class="mb-0 white-text">{{$agen}}</h5>
                   
                 </div>
              </div>
           </div>
        </div>
       </div>
       <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="row">
                  <div class="col s7 m7">
                     <i class="material-icons background-round mt-5">home</i>
                     <p>Perumahan</p>
                  </div>
                  <div class="col s5 m5 right-align">
                     <h5 class="mb-0 white-text">{{$perumahan}}</h5>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="row">
                  <div class="col s7 m7">
                     <i class="material-icons background-round mt-5">account_balance</i>
                     <p>Apartemen</p>
                  </div>
                  <div class="col s5 m5 right-align">
                     <h5 class="mb-0 white-text">{{$apartemen}}</h5>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="row">
                  <div class="col s7 m7">
                     <i class="material-icons background-round mt-5">record_voice_over</i>
                     <p>Users</p>
                  </div>
                  <div class="col s5 m5 right-align">
                     <h5 class="mb-0 white-text">{{$users}}</h5>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col s12 m6 l6 xl3">
         <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
            <div class="padding-4">
               <div class="row">
                  <div class="col s7 m7">
                     <i class="material-icons background-round mt-5">book</i>
                     <p>Article</p>
                  </div>
                  <div class="col s5 m5 right-align">
                     <h5 class="mb-0 white-text">{{$artikel}}</h5>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
</div>
@endsection