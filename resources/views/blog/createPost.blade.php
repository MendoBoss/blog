<x-app-layout>

    <form action="{{route('create.post')}}" method="post" class="w-4/6 flex flex-col items-stretch mx-auto">
        <div class="flex flex-col w-full m-3">
            <label for="title" class="text-gray-400 text-sm font-semibold">Title :</label>
            <input type="text" name="title" class="bg-gray-300 focus:bg-gray-100 hover:bg-gray-100 rounded-md">
        </div>
        <div class="flex flex-col w-full m-3">
            <label for="content" class="text-gray-400 text-sm font-semibold">Content :</label>
            <textarea name="content" cols="30" rows="10" class="bg-gray-300 focus:bg-gray-100 hover:bg-gray-100 rounded-md"></textarea>
        </div>
        <div class="flex flex-col w-full m-3">
            <label for="image" class="text-gray-400 text-sm font-semibold">Image :</label>
            <input type="file" name="image" class="bg-gray-300 rounded-md">
        </div>
        <div class="w-full m-3">
            <input type="submit" value="Enregistrer" class="bg-indigo-500 hover:bg-indigo-600 py-2 px-5  rounded-md">
        </div>
    </form>

</x-app-layout>