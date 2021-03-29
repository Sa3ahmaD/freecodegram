<x-home-layout>
    <div class="py-5">
        <div class="flex max-w-7xl bg-white mx-auto sm:px-6 lg:px-8 sm:py-6 lg:py-8 overflow-hidden">
            <div class="w-4/12">
                <div class="px-12">
                    {{-- <x-application-logo class="block h-40 mx-auto rounded-3xl w-auto fill-current bg-indigo-700 text-white p-5" /> --}}
                    <img class="bg-indigo-700 rounded-full w-60 mx-auto" src="/storage/{{$user->profile->profileimage}}" alt="">
                </div>
            </div>
            <div class="w-8/12">
                <div class="title flex justify-between items-end">
                    <h1 class="font-medium text-3xl">{{ $user->username }} <button class="text-xl bg-indigo-700 text-white px-3 py-1 rounded-md">Follow</button></h1>
                    @can('update', $user->profile)
                        <a href="{{ route('posts.create') }}" class="text-blue-600 hover:text-blue-800 visited:text-purple-600">{{__('Add New Post')}}</a>
                    @endcan
                </div>
                <div class="flex mt-3">
                    @can('update', $user->profile)
                    <a href="{{route('profile.edit',$user)}}" class="text-blue-600 hover:text-blue-800 visited:text-purple-600">{{__('Edit Profile')}}</a>
                    @endcan
                </div>
                <div class="meta-info flex mt-3">
                    <p class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</p>
                    <p class="pr-5"><strong>15k</strong> followers</p>
                    <p class=""><strong>153</strong> following</p>
                </div>
                <div class="bio mt-3">
                    <p class="font-medium">{{$user->profile->title ?? ''}}</p>
                    <p>{{$user->profile->description ?? ''}}</p>
                    <a href="{{$user->profile->url ?? ''}}" target="_blank" class="text-blue-600 hover:text-blue-800 visited:text-purple-600">{{$user->profile->url ?? ''}}</a>
                </div>
            </div>
        </div>
        <div class=" max-w-7xl bg-white mx-auto sm:px-6 lg:px-8 sm:py-6 lg:py-8 overflow-hidden">
            <div class="posts flex">
                @foreach ($user->posts as $post)
                    <div class="w-4/12 p-3">
                        <a href="{{route('posts.show',$post)}}"><img src="/storage/{{$post->image}}" alt="{{$post->caption}}" class="max-w-full"></a>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
</x-home-layout>