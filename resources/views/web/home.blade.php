<x-app-layout>
    @section('title')
        Home
    @endsection

    @section('main-content')
        <div class="container">
            <section class="pt-6 bg-600" id="home">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                            <img class="pt-7 pt-md-0 w-100" src="{{ asset('web_assets/assets/img/gallery/cover_img.jpg') }}" width="470" alt="hero-header" />
                        </div>
                        <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                            {{-- <h4 class="fw-bold font-sans-serif">Become Master</h4> --}}
                            <h1 class="fs-6 fs-xl-7 mb-5">Welcome to our website, latest updates tailored to meet your needs and interests</h1>
                            {{-- <a class="btn btn-primary me-2" href="#!" role="button">Get A Quote</a>
                            <a class="btn btn-outline-secondary" href="#!" role="button">Read more</a> --}}
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <h1 class="text-center mb-5">Top Articles</h1>

                @if ($articles->count())
                    @foreach ($articles as $article)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img class="card-img-top w-100" src="{{ url($article->image) }}" alt="courses" />
                                <div class="card-body">
                                    <h5 class="font-sans-serif fw-bold fs-md-0 fs-lg-1">{{ $article->title }}</h5>
                                    <a class="text-muted fs--1 stretched-link text-decoration-none" href="{{ url('articles',  $article->id ) }}">{{ strip_tags($article->description) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No articles available.</p>
                @endif
            </div>
        </div>
    @endsection
</x-app-layout>
