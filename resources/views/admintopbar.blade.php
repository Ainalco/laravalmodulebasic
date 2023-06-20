<a href="#" class="logo"> 
<span class="logo-mini">
          <!--<b>A</b>BD-->
          <img width="42" src="#" alt="logo">
        </span>
        
    <span class="logo-lg">
        <img src="#" alt="logo">
    </span>
</a>
<style>
	@keyframes anim_opa {
	  50%  {opacity: 0.2}
	}
	.navbar-nav li .lang_box{
        line-height: 36px;
        color: #374767;
    }
    .navbar-nav li .lang_options{
        min-width: 90px;    
    }
</style>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle Navigation</span>
        <i class="fa fa-bars"></i>
        <!--<span class="pe-7s-keypad"></span>-->
    </a>
    <span class="top-fixed-link">
    
</span>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            <li><a id="fullscreen" href="#" class="getid1"><i class="pe-7s-expand1"></i></a></li>
            <li class="dropdown messages-menu">
          
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success reservenotif">0</span>
                </a>
            </li> 
            <!-- Messages -->
            
            <!-- settings -->
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                <ul class="dropdown-menu">

                    <li><a href="#"><i class="pe-7s-users"></i> Profile</a></li>
                    <li><a href="#"><i class="pe-7s-settings"></i>Setting</a></li>
                    <li><a href="{{route('logout')}}"><i class="pe-7s-key"></i>  Logout</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle lang_box" data-toggle="dropdown">Eng</a>
                <ul class="dropdown-menu lang_options">
                   
                    <li><a href="javascript:;" onclick="addlang(this)" data-url="#">ENG</a></li>
                   <li><a href="javascript:;" onclick="addlang(this)" data-url="#">Arabic</a></li>
                   <li><a href="javascript:;" onclick="addlang(this)" data-url="#">Spanish</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>