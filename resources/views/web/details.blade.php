<x-app-layout>
    @section('title')
        {{ $article->title }}
    @endsection

    @section('main-content')

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-600">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h6 class="font-sans-serif text-primary fw-bold">Article Detail</h6>
                    <h1 class="mb-6">{{ $article->title }}</h1>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section style="margin-top:-21.5rem">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img class="w-100" src="{{ url($article->image) }}" alt="{{ $article->title }}" />
                    <h1 class="my-4">Description</h1>
                    <p>{{ $article->description }}</p>
                    {{-- <p>{{ strip_tags($article->description) }}</p> --}}
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

    @endsection
</x-app-layout>
