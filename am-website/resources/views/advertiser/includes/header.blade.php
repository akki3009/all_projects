<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-xl">
        <a href="#" class="navbar-brand"><img src="{{ frontAssets('advertiser/images/logo.svg') }}" alt="Link" width="34px" /> </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="navbar-item">
                    <a href="{{route('adv.home')}}" class="nav-link active">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="#features" class="nav-link">Features</a>
                </li>
                <li class="navbar-item">
                    <a href="#how-it-works" class="nav-link">How it works</a>
                </li>
                <li class="navbar-item">
                    <a href="{{route('adv.login')}}" class="nav-link">Login</a>
                </li>
                <li class="navbar-item">
                    <a href="{{route('adv.signup')}}" class="nav-link btn btn-purple rounded-pill">Sign Up</a>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ frontAssets('advertiser/images/english.png') }}" width="20" height="20" class="mr-1"> English
                    </a>
                    <div class="dropdown-menu select dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><img src="{{ frontAssets('advertiser/images/english.png') }}" width="20" height="20"
                                class="mr-1"> English</a>
                        <a class="dropdown-item" href="#"><img src="{{ frontAssets('advertiser/images/arabic.png') }}" width="20" height="20"
                                class="mr-1"> عربى</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
