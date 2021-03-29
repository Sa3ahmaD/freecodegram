<x-home-layout>
    <div class="py-5">
        <div class="max-w-7xl bg-white mx-auto sm:px-6 lg:px-8 sm:py-6 lg:py-8">
            <h2 class="font-semibold text-xl mb-7 text-gray-800 leading-tight">
                {{ __('Edit Profile') }}
            </h2>
            <form action="{{route('profile.show', $user)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-5">
                    <x-label for="title" :value="__('Title')" />
    
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$user->profile->title??old('title')}}" autofocus />
                </div>
                <div class="mb-5">
                    <x-label for="description" :value="__('Description')" />
    
                    <x-input id="description" class="block mt-1 w-full p-1" type="text" name="description" value="{{$user->profile->description??old('description')}}"/>
                </div>
                <div class="mb-5">
                    <x-label for="url" :value="__('URL')" />
    
                    <x-input id="url" class="block mt-1 w-full p-1" type="text" name="url" value="{{$user->profile->url??old('url')}}"/>
                </div>
                <div class="mb-5">
                    <x-label for="profileimage" :value="__('Profile Image')" />
    
                    <x-input id="profileimage" class="block mt-1 w-full p-1" type="file" name="profileimage" :value="old('profileimage')"/>
                </div>
                
                <x-button>
                    {{ __('Save') }}
                </x-button>
            </form>
        </div>
    </div>
</x-home-layout>