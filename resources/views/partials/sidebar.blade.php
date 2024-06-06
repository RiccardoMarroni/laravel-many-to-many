<nav id="sidebar" class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-white">
        <h2>home button</h2>
    </a> 
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" aria-current="page"
            {{route('admin.dashboard')}} href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'admin.posts.index' ? 'active' : ''}}" aria-current="page"
            {{route('admin.dashboard')}} href="#">Active</a>
        </li>
     
    </ul>
</nav>