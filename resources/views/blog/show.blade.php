{{-- @extends('layouts.app')
@section('content') --}}
<x-app-layout>
    <div class="flex justify-evenly flex-wrap gap-10 p-10">
        @forelse ($posts as $post)
        <a href="{{route('showOne',$post->id)}}">
            <div class="relative text-gray-200 bg-gray-400/10 rounded-lg w-80 h-96 pb-10">
                @forelse ($post->images as $image)
                    <img src="/images/{{$image->path}}" alt="img" class="rounded-lg" width="100%">
                    @break
                @empty
                    <h3>Pas d'images</h3>
                @endforelse
                <div class="px-2">
                    <h1 class="font-bold text-xl py-2">{{ $post->title }}</h1>
                    {{-- <hr> --}}
                    <p class="absolute bottom-0 left-2"> <span class="text-gray-300/50 text-xs font-semibold">Par : </span> {{ $post->user->name }}</p>
                    <p class="absolute bottom-0 right-2 text-sm"> <span class="text-gray-300/50 text-xs font-semibold">publié le : </span> {{ $post->created_at->format('d-m-Y') }}</p>
                </div>
            </div>
        </a>
        @empty
                <h1 class="w-full text-center text-5xl text-gray-300 mt-10">Pas de post !</h1>
        @endforelse
    </div>
</x-app-layout>
{{-- @endsection --}}