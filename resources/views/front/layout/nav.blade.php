<nav class="navbar sticky-top navbar-expand-lg navbar-light shadow-sm">

  <div class="container">

    <a class="navbar-brand main-logo" href="{{ url('/') }}"><img src="{{ url('public/front/images/logo-care-professional.png') }}" alt="Care Professional"/></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

		<li class="nav-item"><a class="nav-link @if(Request::segment(1) == "") active @endif " aria-current="page" href="{{ url('/') }}"><i class="fas fa-home me-1"></i> Home</a></li>

		<li class="nav-item dropdown">

       <a class="nav-link @if(Request::segment(1) == "about") active @endif dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-friends me-1"></i> About Us

          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="{{ url('about/about-us') }}">Who We Are?</a></li>

            <!--<li><a class="dropdown-item" href="{{ url('about/board-members') }}">Board Members</a></li>-->

			<li><a class="dropdown-item" href="{{ url('about/organization-chart') }}">Organization Chart</a></li>

			<li><a class="dropdown-item" href="{{ url('about/legal-documents') }}">Legal Documents</a></li>			  

          </ul>

        </li>



        <li class="nav-item dropdown">

          <a class="nav-link  dropdown-toggle @if(Request::segment(1) == "service") active @endif" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-list me-1"></i> Services

             </a>

             <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

               @foreach ($service_menu as $service_menus) 

               <li><a class="dropdown-item" href="{{ url('service/'.$service_menus->slug) }}">{{ $service_menus->title }}</a></li>

               @endforeach

             </ul>

           </li>



		  <li class="nav-item dropdown">

       <a class="nav-link @if(Request::segment(1) == "procedure") active @endif dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-clipboard-check me-1"></i> Procedure

          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">



            @foreach ($procedure_menu as $procedure_menus) 

            <li><a class="dropdown-item" href="{{ url('procedure/'.$procedure_menus->slug) }}">{{ $procedure_menus->title }}</a></li>              

            @endforeach

        

        

          </ul>

        </li>

		<li class="nav-item dropdown">

       <a class="nav-link @if(Request::segment(1) == "group") active @endif dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-users me-1"></i> Care Group

          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            @foreach ($group_menu as $group_menus) 

            <li><a class="dropdown-item" href="{{ url('group/'.$group_menus->slug) }}">{{ $group_menus->title }}</a></li>              

            @endforeach

          </ul>

        </li>



		<li class="nav-item"><a class="nav-link  @if(Request::segment(1) == "gallery") active @endif" href="{{ url('gallery') }}"><i class="fas fa-camera me-1"></i> Gallery</a></li>

		<li class="nav-item"><a class="nav-link  @if(Request::segment(1) == "contact") active @endif" href="{{ url('contact') }}"><i class="fas fa-envelope me-1"></i> Contact</a></li>

      

    </ul>

    </div>

  </div>

</nav>