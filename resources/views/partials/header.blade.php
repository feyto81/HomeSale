<header class="page-topbar" id="header">
  <div class="navbar navbar-fixed"> 
    <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
      <div class="nav-wrapper">
        <ul class="left">
          <li>
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{url('admin/home')}}"><img src="{{asset('backend/app-assets/images/logo/materialize-logo.png')}}" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Home Sale</span></a></h1>
          </li>
        </ul>
        <ul class="navbar-list right">
          {{-- <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li> --}}
          <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
          <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search         </i></a></li>
          <li>
            <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
              <span class="avatar-status avatar-online"><img src="{{asset('backend/app-assets/images/avatar/avatar-7.png')}}" alt="avatar"><i></i>
              </span>
            </a>
          </li>
        </ul>
        <ul class="dropdown-content" id="translation-dropdown">
          <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
          <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
          <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
          <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
        </ul>
      
        <ul class="dropdown-content" id="profile-dropdown">
          {{-- <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li> --}}
          <li class="divider"></li>
          <li><a class="grey-text text-darken-1" href="{{url('/admin/logout')}}"><i class="material-icons">keyboard_tab</i> Logout</a></li>
        </ul>
      </div>
      <nav class="display-none search-sm">
        <div class="nav-wrapper">
          
        </div>
      </nav>
    </nav>
    @include('partials.menu')
  </div>
</header>