<nav class="white hide-on-med-and-down" id="horizontal-nav">
  <div class="nav-wrapper">
    <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
      <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="DashboardDropdown"><i class="material-icons">dashboard</i><span><span class="dropdown-title" data-i18n="Dashboard">Dashboard</span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown">       
          <li data-menu=""><a href="{{url('/admin/home')}}"><span data-i18n="Modern Menu">Modern Menu</span></a>
          </li>
         
        </ul>
      </li>
     
      {{-- <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="Cards"><i class="material-icons">person_pin</i><span><span class="dropdown-title" data-i18n="Cards">Owner</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="Cards">       
          <li data-menu=""><a href="{{url('admin/owner/add')}}"><span data-i18n="Cards Extended">Add</span></a>
          </li>
          <li data-menu=""><a href="{{url('admin/owner')}}"><span data-i18n="Cards Extended">List</span></a>
          </li>
        </ul>
      </li> --}}
      <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="AdvancedUIDropdown"><i class="material-icons">receipt</i><span><span class="dropdown-title" data-i18n="Advanced UI">Agen</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="AdvancedUIDropdown">       
          <li data-menu=""><a href="{{url('admin/agen/add')}}"><span data-i18n="add">Add</span></a>
          </li>
          <li data-menu=""><a href="{{url('admin/agen')}}"><span data-i18n="list">List</span></a>
          </li>
          
        </ul>
      </li>
      <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="Cards"><i class="material-icons">home</i><span><span class="dropdown-title" data-i18n="Cards">Perumahan</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="Cards">       
          <li data-menu=""><a href="{{url('admin/perumahan/add')}}"><span data-i18n="Cards Extended">Add</span></a>
          </li>
          <li data-menu=""><a href="{{url('admin/perumahan')}}"><span data-i18n="Cards Extended">List</span></a>
          </li>
        </ul>
      </li>
      <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="Perumahan"><i class="material-icons">account_balance</i><span><span class="dropdown-title" data-i18n="Apartemen">Apartemen</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="Perumahan">       
          <li data-menu=""><a href="{{url('admin/apartemen/add')}}"><span data-i18n="Apartemen Extended">Add</span></a>
          </li>
          <li data-menu=""><a href="{{url('admin/apartemen')}}"><span data-i18n="Apartemen Extended">List</span></a>
          </li>
        </ul>
      </li>
      <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="Manajemen Users"><i class="material-icons">person_pin</i><span><span class="dropdown-title" data-i18n="Users">Manajemen Users</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="Manajemen Users">       
          <li data-menu=""><a href="{{url('admin/users/add')}}"><span data-i18n="Users Extended">Add</span></a>
          </li>
          <li data-menu=""><a href="{{url('admin/users')}}"><span data-i18n="Users Extended">List</span></a>
          </li>
        </ul>
      </li>
      <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="Manajemen Artikel"><i class="material-icons">book</i><span><span class="dropdown-title" data-i18n="Users">Articles</span><i class="material-icons right">keyboard_arrow_down</i></span></a>
        <ul class="dropdown-content dropdown-horizontal-list" id="Manajemen Artikel">       
          <li data-menu=""><a href="{{url('admin/artikel/add')}}"><span data-i18n="Users Extended">Add</span></a>
          </li>
          <li data-menu=""><a href="{{url('admin/artikel')}}"><span data-i18n="Users Extended">List</span></a>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</nav>