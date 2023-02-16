<!--			Below Div is for side menu		-->
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>  
      <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <?php  $uri = request()->segment(2); ?>
                    <a href="{{ url('admin/dashboard') }}" class=" @if($uri == 'dashboard') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-study"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Website Contents</li>
                <li>
                    <a href="{{ url('admin/post') }}" class="@if($uri == 'post') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-home"></i>
                       Home & Others
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/about') }}" class="@if($uri == 'about') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-users"></i>
                       About
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/service') }}" class="@if($uri == 'service') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Service
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/procedure') }}" class="@if($uri == 'procedure') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Procedure
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/group') }}" class="@if($uri == 'group') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-network"></i>
                        Group
                    </a>
                </li>
                <li>
                                                 
                <li class="app-sidebar__heading">Images</li>
               
                <li>
                    <a href="{{ url('admin/banner') }}" class="@if($uri == 'banner') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-photo"></i>
                        Banner
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/gallery') }}" class="@if($uri == 'gallery') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-photo-gallery"></i>
                        Gallery
                    </a>
                </li>
                
                 <li>
                    <a href="{{ url('admin/legal_document') }}" class="@if($uri == 'legal_document') mm-active @endif ">
                        <i class="metismenu-icon pe-7s-file"></i>
                        Legal Documents
                    </a>
                </li>

                <li class="app-sidebar__heading">Others</li>
             
                <li>
                <a href="{{ url('admin/job') }}" class="@if($uri == 'job') mm-active @endif ">
                             <i class="metismenu-icon pe-7s-speaker"></i>
                             Job
                         </a>
                     </li>
                <li>
                <a href="{{ url('admin/client') }}" class="@if($uri == 'client') mm-active @endif "> <i class="metismenu-icon pe-7s-add-user"></i>
                                Client
                            </a>
                        </li>
                <li>
                    <a href="{{ url('admin/testimonial') }}" class="@if($uri == 'testimonial') mm-active @endif "> <i class="metismenu-icon pe-7s-comment"></i>
                        Testimonials
                                </a>
                            </li>        
            </ul>
        </div>
    </div>
</div>