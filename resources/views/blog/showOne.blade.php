<x-app-layout>

    <div class="container text-gray-300 p-10 w-full mx-auto">
        <h1 class="text-5xl py-20 text-center">{{ $post->title }}</h1>
        @foreach ($post->images as $image)
        <div class="w-full flex justify-center pb-20">
            <img src="/images/{{$image->path}}" alt="img" width="100%">

        </div>
            @break
        @endforeach
        <p class="text-justify">{{ $post->content }}</p>
        <p class=" mt-5"><span class="text-gray-300/50 text-xs font-semibold">Par :</span>{{ $post->user->name }}</p>
        <p class="text-sm"> <span class="text-gray-300/50 text-xs font-semibold">publié le : </span> {{ $post->created_at->format('d-m-Y') }}</p>
        <hr>
        <h4>Commentaires</h4>
        @foreach ($post->comments as $comment)
            <div class="mb-2 bg-gray-400/10 p-2 my-2">
                <p class=" ">{{ $comment->content }}</p>
                <div class="bg-gray-400/10 px-1 mt-2">
                    <small><span class="text-gray-300/50 text-xs font-semibold">Par :</span> {{ $comment->user->name }}</small>
                    <p class="text-sm"> <span class="text-gray-300/50 text-xs font-semibold">publié le : </span> {{ $comment->created_at->format('d-m-Y') }}</p>
                </div>
            </div>
        @endforeach
        <hr class="my-5">
        @auth
            <form action="{{ route('store', $post->id) }}" method="POST">
                @csrf
                <div class="mb-3 flex flex-col">
                    <label for="content" class="form-label">Votre commentaire</label>
                    <textarea class="form-control text-gray-900 font-semibold" id="content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-secondary bg-indigo-500 hover:bg-indigo-600 py-2 px-5 rounded-lg">Ajouter un commentaire</button>
            </form>
        @endauth
       </div>
       


</x-app-layout>