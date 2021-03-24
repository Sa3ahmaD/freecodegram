<x-home-layout>
    <div class="py-5">
        <div class="flex max-w-7xl bg-white mx-auto sm:px-6 lg:px-8 sm:py-6 lg:py-8 overflow-hidden">
            <div class="w-4/12">
                <div class="">
                    <x-application-logo class="block h-40 mx-auto rounded-3xl w-auto fill-current bg-indigo-700 text-white p-5" />
                </div>
            </div>
            <div class="w-8/12">
                <div class="title">
                    <h1 class="font-medium text-3xl">{{ $user->username }}</h1>
                </div>
                <div class="meta-info flex mt-3">
                    <p class="pr-5"><strong>153</strong> posts</p>
                    <p class="pr-5"><strong>15k</strong> followers</p>
                    <p class=""><strong>153</strong> following</p>
                </div>
                <div class="bio mt-3">
                    <p class="font-medium">freecodecamp.org</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat eaque veniam asperiores vel ipsam quasi, tempore expedita! Nulla, provident excepturi!</p>
                    <a href="https://www.freecodecamp.org" target="_blank" class="text-blue-400 font-medium">www.freecodecamp.org</a>
                </div>
            </div>
        </div>
        <div class=" max-w-7xl bg-white mx-auto sm:px-6 lg:px-8 sm:py-6 lg:py-8 overflow-hidden">
            <div class="posts flex">
                <div class="w-4/12 p-3"><img src="https://via.placeholder.com/800" alt="" class="max-w-full"></div>
                <div class="w-4/12 p-3"><img src="https://via.placeholder.com/800" alt="" class="max-w-full"></div>
                <div class="w-4/12 p-3"><img src="https://via.placeholder.com/800" alt="" class="max-w-full"></div>
            </div>
            
        </div>
    </div>
</x-home-layout>