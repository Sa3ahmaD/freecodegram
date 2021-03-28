<x-home-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden">
                <div class="p-6 bg-white">
                    <h2 class="font-semibold text-xl mb-7 text-gray-800 leading-tight">
                        {{ __('Add New Post') }}
                    </h2>
                    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <x-label for="caption" :value="__('Post Caption')" />
            
                            <x-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" autofocus />
                        </div>
                        <div class="mb-5">
                            <x-label for="image" :value="__('Image')" />
            
                            <x-input id="image" class="block mt-1 w-full p-1" type="file" name="image" :value="old('image')"/>
                        </div>
                        
                        <x-button>
                            {{ __('Add New Post') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>