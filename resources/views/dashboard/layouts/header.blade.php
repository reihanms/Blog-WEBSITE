<!-- header section start-->
<div class="header-section">                

    <!--toggle button start-->
    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
    <!--toggle button end-->

    <!--mega menu start-->
    <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
        <ul class="nav navbar-nav">                           
            <!-- Classic dropdown -->
            <li><a href="/blog">World Of Post</a></li>
            
        </ul>
    </div>
    <!--mega menu end-->

    <div class="notification-wrap">
        <!--right notification start-->
        <div class="right-notification">
            <ul class="notification-menu">
                <li>
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="https:source.unsplash.com/128x128?user" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                        <form action="/logout"method="POST">
                            @csrf
                        <button type="submit"class="dropdown-item"style="cursor:pointer"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div><!--right notification end-->
    </div>
</div>
<!-- header section end-->