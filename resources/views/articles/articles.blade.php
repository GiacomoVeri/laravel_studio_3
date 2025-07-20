<x-shared.main-layout>
    <x-slot:pageTitle>Tutti gli Articoli</x-slot:pageTitle>

    <h1 class="text-center display-4 text-primary my-5">I nostri articoli disponibili</h1>

    <div class="container">
        <div class="row">
            @forelse($articles as $article)
            <x-shared.card :article="$article"/>
            @empty
            <p class="text-center text-danger mt-5">Non ci sono articoli disponibili al momento</p>
            @endforelse
        </div>
    </div>
</x-shared.main-layout>