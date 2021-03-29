<x-home-layout>
    <div class="py-12">
        <div class="flex max-w-7xl mx-auto ">
            <div class="w-9/12 bg-white">
                <div class="p-6 bg-white">
                    <img src="/storage/{{$post->image}}" alt="{{$post->caption}}">
                </div>
            </div>
            <div class="w-3/12 bg-white">
                <div class="pt-6 bg-white">
                    <div class="flex pt-1 mb-5 items-center">
                        <a href="{{route('profile.show', $post->user)}}">
                            <img class="bg-indigo-700 rounded-full w-12 mr-2" src="/storage/{{$post->user->profile->profileimage}}" alt="{{$post->user->username}}">
                        </a>
                        <h3 class="text-xl font-medium mr-3">                        
                            <a href="{{route('profile.show', $post->user)}}">{{$post->user->username}}</a>
                        </h3>
                        <a href="#" class="text-2xs font-bold text-indigo-700">Follow</a>
                    </div>
                    <hr>
                    <p class="mt-3"><a class="font-medium" href="{{route('profile.show', $post->user)}}">{{$post->user->username}}</a> {{$post->caption}}</p>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>