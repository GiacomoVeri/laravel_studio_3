<div class="col-4">
    <div class="card rounded-4 shadow">
        <img src="{{ $article->image }}" class="card-img-top rounded-4" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p>{{ $article->author }}</p>
            <p class="card-text">{{ $article->content }}</p>
            <a href="{{ route('articles.show', $article->id) }}" class="btn personal-btn-danger">Leggi di più</a>
        </div>
    </div>
</div>