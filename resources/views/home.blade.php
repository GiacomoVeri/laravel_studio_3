<x-shared.main-layout>
    <x-slot:pageTitle>Home</x-slot:pageTitle>
    <div class="container-fluid my-container d-flex justify-content-center align-items-center">
        <a href="{{ route('articles.create') }}" class="btn personal-btn-danger btn-lg shadow">Clicca e pubblica!</a>
    </div>

    <div class="container my-5">
        <div class="row">
            @forelse($articles as $article)
            <x-shared.card :article="$article"/>
            @empty
            <p class="text-center">Al momento non abbiamo articoli disponibili</p>
            @endforelse
        </div>
    </div>
</x-shared.main-layout>