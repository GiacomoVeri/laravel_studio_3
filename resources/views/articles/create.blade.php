<x-shared.main-layout>
    <x-slot:pageTitle>Pubblica</x-slot:pageTitle>

    <h1 class="text-center display-4 text-primary mt-5">Pubblica qui il tuo articolo!</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session('warning'))
        <div class="alert alert-success">
            {{ session('warning') }}
        </div>
    @endif

    @if(session('danger'))
        <div class="alert alert-success">
            {{ session('danger') }}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title">
                        @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Contenuto testuale</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="content" style="height: 300px"></textarea>
                            <label for="floatingTextarea2">Il tuo articolo...</label>
                            @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="author">
                        @error('author')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="image" class="form-label">Scegli un'immagine</label>
                        <input class="form-control form-control-lg" name="image" type="file">
                        @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary my-3">Pubblica!</button>
                </form>
            </div>
        </div>
    </div>


</x-shared.main-layout>