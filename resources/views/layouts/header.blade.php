<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}" >
                <img alt="Brand" src="{{asset('assets/images/logo.png')}}">
            </a>
            <p class="navbar-text" data-sr='wait 2s, then enter top and hustle 40px over 1.5s'></p>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-menu">
            <ul class="nav navbar-nav navbar-right nav nav-pills">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('service') }}">WHAT WE DO</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">WHAT WE HAVE<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('products') }}">PRODUCT</a></li>
                        <li><a href="{{ url('equipment') }}">EQUIPMENT</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('partners') }}">WHERE WE'VE BEEN</a></li>
                <li><a href="{{ url('contact') }}">CONTACT US</a></li>
            </ul>
        </div>
    </div>
</nav>
