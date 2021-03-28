<x-home-layout>
    <div class="py-12">
        <div class="flex max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="max-w-7xl bg-white">
                <div class="p-6 bg-white">
                    <img src="/storage/{{$post->image}}" alt="{{$post->caption}}">
                </div>
            </div>
            <div class="max-w-5xl bg-white">
                <div class="p-6 bg-white">
                    <h4 class="text-xl font-medium">{{$post->user->username}}</h4>
                    <p>{{$post->caption}}</p>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>