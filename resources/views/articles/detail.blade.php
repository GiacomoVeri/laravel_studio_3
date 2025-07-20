<x-shared.main-layout>
    <x-slot:pageTitle>{{ $article->title }}</x-slot:pageTitle>

    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-3">
                <img src="{{ $article->image }}" class="img-fluid rounded-4 shadow mt-5" alt="">
            </div>
            <div class="col-9 mt-5">
                <h3 class="text-center display-6">{{ $article->title }}</h3>
                <p class="text-center my-5" style="font-size: 1.2rem;">{{ $article->content }}</p>
            </div>

            <div class="col-3">
                <a href="{{ route('articles.index') }}" class="btn personal-btn-danger mt-4">Torna agli articoli precendenti</a>
            </div>
        </div>
    </div>

</x-shared.main-layout>