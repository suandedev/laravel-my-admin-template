<x-mytmp1.my-layout>
    <div class="min-h-full relative bg-gray-50 box-border block">
       <nav class="ml-60 flex flex-row px-2 py-2 justify-between items-center text-gray-400">
           <ul class="flex flex-row items-center space-x-3">
               <li>
                   <a href="#" class="flex items-center hover:text-gray-900">
                        <ion-icon name="menu"></ion-icon>
                   </a>
               </li>
               <li>
                   <a href="" class="hover:text-gray-900 text-xs">Home</a>
               </li>
               <li>
                   <a href="" class="hover:text-gray-900 text-xs">Contact</a>
               </li>
           </ul>
           <ul class="flex flex-row space-x-3">
               <li x-data="{ open: false }" class="flex flex-row">
                   {{-- search bar --}}
                   <a href="#" x-on:click="open = ! open" class="hover:text-gray-900" :class="{'hidden' : open}">
                        <ion-icon name="search" ></ion-icon>
                   </a>
                   {{-- dropdown search --}}
                   <div x-show="open">
                       <form action="">
                           <div class="flex flex-row space-x-3">
                               <input type="text" class="w-60 h-6" class="" :class="{'block' : open, 'focus:outline-none' : open, 'focus:ring-sky-200' : open, 'focus:ring-1' : open, 'rounded' : open, 'shadow' : open}">
                               <div>
                                   <button>
                                        <ion-icon name="search"></ion-icon>
                                   </button>
                                   <button x-on:click="open = ! open">
                                        <ion-icon name="close"></ion-icon>
                                   </button>
                               </div>
                           </div>
                       </form>
                   </div>
                   {{-- end dropdown search --}}
               </li>
               {{-- message dropdown menu --}}
               <li x-data="{ open: false}" class="relative box-border">
                    <a href="#" x-on:click="open = ! open" class="relative hover:text-gray-900">
                        <ion-icon name="chatboxes"></ion-icon>
                        <span  class="absolute bottom-4 left-3 text-2xs text-gray-100 bg-red-400 rounded-full">22</span>
                    </a>
                    {{-- dropdown message --}}
                    <div x-show="open" class="" :class="{'absolute' : open, 'top-5' : open, 'right-0' : open, 'w-60' :open, 'bg-gray-50' : open, 'border' : open, 'rounded' : open, 'shadow' : open}">
                        <a href="" class="box-border">
                            {{-- message start --}}
                            <div class="flex flex-row items-center space-x-2 px-4 py-2">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('img/users1.jpg') }}" alt="">
                                <div class="w-40">
                                    <div class="flex flex-row justify-between">
                                        <h3 class="text-base text-gray-700">some name</h3>
                                        <span>
                                            <ion-icon name="star" class="text-red-500"></ion-icon>
                                        </span>
                                    </div>
                                    <p class="text-sm text-gray-700 truncate">call me whatever you can</p>
                                    <div class="flex flex-row items-center space-x-2">
                                        <ion-icon name="time" class="text-gray-700"></ion-icon>
                                        <p class="text-xs text-gray-700 ">
                                            4 hour ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- end message --}}
                        </a>
                        <hr>
                        <a href="" class="box-border">
                            {{-- message start --}}
                            <div class="flex flex-row items-center space-x-2 box-border px-4 py-2">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('img/users1.jpg') }}" alt="">
                                <div class="w-40">
                                    <div class="flex flex-row items-center justify-between">
                                        <h3 class="text-base text-gray-700">some name</h3>
                                        <span>
                                            <ion-icon name="star"></ion-icon>
                                        </span>
                                    </div>
                                    <p class="text-gray-700 truncate text-sm">call me whatever you can</p>
                                    <div class="flex flex-row items-center space-x-2">
                                        <ion-icon name="time" class="text-gray-700"></ion-icon>
                                        <p class="text-gray-700 text-xs">4 hour ago</p>
                                    </div>
                                </div>
                            </div>
                            {{-- end message --}}
                        </a>
                        <hr>
                        <a href="" class="box-border">
                            {{-- message start --}}
                            <div class="flex flex-row items-center space-x-2 px-4 py-2">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('img/users1.jpg') }}" alt="">
                                <div class="w-40">
                                    <div class="flex flex-row items-center justify-between">
                                        <h3 class="text-gray-700 text-base">some name</h3>
                                        <span>
                                            <ion-icon name="star"></ion-icon>
                                        </span>
                                    </div>
                                    <p class="truncate text-sm text-gray-700">call me whatever you can</p>
                                    <div class="flex flex-row items-center space-x-2">
                                        <ion-icon name="time" class="text-gray-700"></ion-icon>
                                        <p class="text-gray-700 text-xs">4 hour ago</p>
                                    </div>
                                </div>
                            </div>
                            {{-- end message --}}
                        </a>
                        <hr>
                    </div>
               </li>
               {{-- dropdown notification menu --}}
               <li x-data="{ open: false }" class="relative box-border hover:text-gray-700">
                   <a href="#" x-on:click="open = ! open" class="relative">
                        <ion-icon name="notifications"></ion-icon>
                        <span class="absolute bottom-4 left-3 text-2xs bg-yellow-500 rounded font-bold text-gray-100">15</span>
                   </a>
                   <div x-show="open" class="" :class="{'py-2 rounded shadow border absolute right-0 top-5 w-60 box-border space-y-2' : open}">
                        <span class="block text-center text-gray-600 text-base">15 Notification</span>
                        <hr>
                        <a href="" class="px-4 flex flex-row items-center justify-between hover:bg-gray-200">
                            <ion-icon name="mail" class="text-gray-700"></ion-icon>
                            <p class="text-gray-700 text-base">4 new message</p>
                            <span class="text-gray-500 text-xs">3 mins ago</span>
                        </a>
                        <hr>
                        <a href="" class="px-4 flex flex-row items-center justify-between hover:bg-gray-200">
                            <ion-icon name="people" class="text-gray-700"></ion-icon>
                            <p class="text-gray-700 text-base">8 friend request</p>
                            <span class="text-gray-600 text-xs">12 hour ago</span>
                        </a>
                        <hr>
                        <a href="" class="px-4 flex flex-row items-center justify-between hover:bg-gray-200">
                            <ion-icon name="document" class="text-gray-700"></ion-icon>
                            <p class="text-base text-gray-700">3 new reports</p>
                            <span class="text-xs text-gray-600">2 day ago</span>
                        </a>
                        <hr>
                        <a href="#" class="block text-center text-gray-700 hover:bg-gray-200">see all notification</a>
                   </div>
               </li>
               <li>
                   <a href="">
                        <ion-icon name="shuffle"></ion-icon>
                   </a>
               </li>
               <li>
                <a href="">
                    <ion-icon name="apps"></ion-icon>
                </a>
               </li>
           </ul>
       </nav>
       {{-- end navbar --}}
       <aside>

       </aside>
    </div>
</x-mytmp1.my-layout>