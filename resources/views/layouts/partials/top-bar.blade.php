<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li style="padding: 20px">
                <span class="m-r-sm text-muted welcome-message">Welcome NUP CMS</span>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </form>
            </li>
        </ul>
    </nav>
</div>
