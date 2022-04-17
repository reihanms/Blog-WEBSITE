<!-- sidebar left start-->
<div class="sidebar-left">
    <div class="sidebar-left-info"style="margin-top:-50px">

        <div class="user-box">
            <div class="d-flex justify-content-center">
                <img src="https:source.unsplash.com/128x128?user" alt="" class="img-fluid rounded-circle"> 
            </div>
            <div class="text-center text-white mt-2">
                <h6>{{ auth()->user()->name }} </h6>
                
            </div>
        </div>   
                            
        <!--sidebar nav start-->
        <ul class="side-navigation">
            <li>
                <h3 class="navigation-title">Navigation</h3>
            </li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <h3 class="navigation-title">Components</h3>
            </li>
            <li class="{{ Request::is('dashboard/mypost/create') ? 'active' : '' }}">
                <a href="/dashboard/mypost/create"><i class="mdi mdi-plus"></i> <span>Create Post</span></a>
            </li>
            <li class=" @if ($title == 'MFL | My Post') active @endif ">
                <a href="/dashboard/mypost"><i class="mdi mdi-animation"></i> <span>My Post</span></a>
            </li>

            @can('admin') <!-- fungsinya buat nyembunyiin kalo bukan admin -->
            <li>
                <h3 class="navigation-title">Administrator</h3>
            </li>
            <li class="{{ Request::is('dashboard/categories') ? 'active' : '' }}">
                <a href="/dashboard/categories"><i class="mdi mdi-triangle"></i> <span>Categories</span></a>
            </li>
            @endcan
            
        </ul><!--sidebar nav end-->
    </div> 
</div><!-- sidebar left end-->