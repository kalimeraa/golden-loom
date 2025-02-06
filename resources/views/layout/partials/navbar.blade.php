<section class="ftco-section">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Models
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            @foreach(\App\Models\Curtain::all() as $curtain)
                                <a class="dropdown-item" href="/curtains/{{ $curtain->slug }}">{{ $curtain->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <!-- Dil Seçimi -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                            <a class="dropdown-item" href="{{ route('locale', ['lang' => 'tr']) }}">Türkçe</a>
                            <a class="dropdown-item" href="{{ route('locale', ['lang' => 'en']) }}">English</a>
                            <a class="dropdown-item" href="{{ route('locale', ['lang' => 'ru']) }}">Русский</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
