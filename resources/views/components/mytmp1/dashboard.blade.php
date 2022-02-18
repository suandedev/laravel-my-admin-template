<x-mytmp1.my-layout>
    <div x-data="{open : false}" class="max-h-screen relative bg-gray-50 box-border block">
       <nav :class="(open) ? 'ml-0' : 'ml-60'" class="ml-60 flex flex-row px-2 py-2 justify-between items-center text-gray-400">
           <ul class="flex flex-row items-center space-x-3">
               <li>
                   <a x-on:click="open = ! open" href="#" class="flex items-center hover:text-gray-900">
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
                   <a href="" class="hover:text-gray-700">
                        <ion-icon name="shuffle"></ion-icon>
                   </a>
               </li>
               <li>
                <a href="" class="hover:text-gray-700">
                    <ion-icon name="apps"></ion-icon>
                </a>
               </li>
           </ul>
       </nav>
       {{-- end navbar --}}
       <aside :class="(open) ? 'hidden' : 'flex'" class="max-h-screen flex flex-col absolute top-0 bg-gray-700 box-border overflow-auto">
            <a href="" class="flex flex-row items-center justify-start space-x-2 px-4 py-2 text-sm border-b border-gray-500 hover:text-gray-300 box-border">
                <img class="w-6 h-6 rounded-full" src="{{ asset('img/users1.jpg') }}" alt="">
                <span class="text-gray-400 hover:text-gray-300">MyTmp1</span>
            </a>
            <div>
                <div>
                    <div class="box-border">
                        {{-- sidebar user panel --}}
                        <div class="flex flex-row items-center space-x-2 hover:text-gray-300 px-4 py-2 border-b border-gray-400">
                            <div>
                                <img class="block w-7 h-7 rounded-full border-gray-600 border-2" src="{{ asset('img/users1.jpg') }}" alt="">
                            </div>
                            <div>
                                <a href="" class="text-gray-400 hover:text-gray-300 text-sm">made suande</a>
                            </div>
                        </div>
                        {{-- sidebar serach --}}
                        <div class="relative box-border" x-data="{open: false}">
                            <div class="flex flex-row items-center justify-between px-4 py-2 box-border ">
                                <input type="text" class="block h-6 w-40 bg-gray-500 border border-gray-400 rounded-l focus:outline-none focus:ring-gray-400 focus:ring-1">
                                <a href="#" x-on:click="open = ! open" class="flex flex-row items-center px-2 py-1 bg-gray-500 rounded-r border border-gray-400">
                                    <ion-icon name="search" class="text-gray-300 items-center text-sm"></ion-icon>
                                </a>
                            </div>
                            <div x-show="open" class="absolute top-8 right-12 bg-gray-500 rounded-b border border-gray-400 px-4 py-1">
                                <div>
                                    <a href="" class="text-gray-300 text-sm hover:text-gray-200">page name</a>
                                </div>
                                <div>
                                    <a href="" class="text-gray-300 text-sm hover:text-gray-200">page name</a>
                                </div>
                            </div>
                        </div>
                        {{-- sidebar menu --}}
                        <nav>
                            <ul>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row px-2 py-1 mx-2 my-1 rounded shadow items-center justify-between hover:bg-sky-400 bg-sky-500">
                                        <div class="flex flex-row space-x-3 items-center">
                                            <ion-icon name="home" class="text-gray-100"></ion-icon>
                                            <p class="text-gray-100 text-sm">Dashboard</p>
                                        </div>
                                        <ion-icon name="arrow-dropdown" class="text-gray-100"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li class="">
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 bg-gray-300 px-2 py-1 mx-2 my-1 rounded shadow hover:text-gray-700 hover:bg-gray-200">
                                                <ion-icon name="radio-button-off" class="" :class="{'text-gray-600' : open}"></ion-icon>
                                                <p class="" :class="{'text-sm text-gray-600' :open}">dashboard v1</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center justify-start space-x-3 px-2 py-1 mx-2 my-1 text-gray-400 hover:bg-gray-600 hover:text-gray-200 rounded shadow">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>dashboard v2</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 px-2 py-1 mx-2 my-1 rounded shadow text-gray-400 hover:text-gray-300 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>dashboard v3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row justify-between items-center mx-2 my-1 py-1 px-2 box-border hover:bg-gray-600 rounded">
                                        <div class="flex flex-row space-x-3  items-center justify-start">
                                            <ion-icon name="apps" class="text-gray-400"></ion-icon>
                                            <p class="text-gray-400 text-sm">
                                                widgets
                                            </p>
                                        </div>
                                        <span class="text-gray-300 text-xs bg-red-500 px-1 rounded shadow">new</span>
                                    </a>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center px-2 py-1 mx-2 my-1 text-gray-400 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="paper"></ion-icon>
                                            <p class="text-sm">
                                                layout option
                                            </p>
                                        </div>
                                        <div class="flex flex-row items-center justify-start space-x-3">
                                            <span class="rounded bg-green-600 px-1 text-gray-300 text-xs">6</span>
                                            <ion-icon name="arrow-dropleft"></ion-icon>
                                        </div>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row items-center text-sm justify-start rounded space-x-3 px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>top navigation</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center text-sm justify-start space-x-3 rounded px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>top navigation + sidebar</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start text-sm items-center rounded px-2 py-1 mx-2 my-1 hover:bg-gray-600 space-x-3 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>boxed</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start text-sm items-center space-x-3 rounded px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>fixed sidebar</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start text-sm items-center space-x-3 rounded px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>
                                                    fixed sidebar
                                                    <small class="text-xs">+ custom area</small>
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>fixed navbar</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>fixed footer</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>
                                                    collapsed sidebar
                                                </p>
                                            </a>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row px-2 py-1 mx-2 my-1 items-center justify-between rounded hover:bg-gray-600 text-gray-400">
                                        <div class="flex flex-row justify-start space-x-3 items-center">
                                            <ion-icon name="archive"></ion-icon>
                                            <p>
                                                charts
                                            </p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>chartjs</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>flot</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>inline</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>uPlot</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row px-2 py-1 mx-2 my-1 items-center justify-between rounded hover:bg-gray-600 text-gray-400">
                                        <div class="flex flex-row justify-start space-x-3 items-center">
                                            <ion-icon name="transgender"></ion-icon>
                                            <p>
                                                ui element
                                            </p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>general</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>icons</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>buttons</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>sliders</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>modals & alert</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>navbar & tabs</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>timeline</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>ribbons</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row px-2 py-1 mx-2 my-1 items-center justify-between rounded hover:bg-gray-600 text-gray-400">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="create"></ion-icon>
                                            <p>
                                                forms
                                            </p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>general element</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>advanced element</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>editor</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>form validation</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row px-2 py-1 mx-2 my-1 items-center justify-between rounded hover:bg-gray-600 text-gray-400">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="list"></ion-icon>
                                            <p>
                                                table
                                            </p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open">
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>simple table</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>data table</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row justify-start items-center space-x-3 rounded text-sm px-2 py-1 mx-2 my-1 hover:bg-gray-600 text-gray-400">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>js grid table</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="uppercase text-gray-400 text-sm px-2 py-2">examples</li>
                                <li>
                                    <a href="" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="calendar"></ion-icon>
                                            <p>calender</p>
                                        </div>
                                        <span class="bg-sky-500 rounded-sm px-1 text-xs text-gray-300">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row justify-start space-x-3 items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <ion-icon name="images"></ion-icon>
                                        <p>galery</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row justify-start space-x-3 items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <ion-icon name="pricetags"></ion-icon>
                                        <p>kanban bord</p>
                                    </a>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row space-x-3 items-center">
                                            <ion-icon name="mail"></ion-icon>
                                            <p>mailbox</p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>inbox</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>compose</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>read</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="document"></ion-icon>
                                            <p>pages</p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>infoice</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>profile</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>e-comerce</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>project</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>project add</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>project edit</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>project detail</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>contact</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>faq</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>contact</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row justify-start space-x-3 items-center">
                                            <ion-icon name="person"></ion-icon>
                                            <p>Extras</p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li x-data="{open : false}">
                                            <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                                <div class="flex flex-row justify-start items-center space-x-3">
                                                    <ion-icon name="radio-button-off"></ion-icon>
                                                    <p>login & register v1</p>
                                                </div>
                                                <ion-icon name="arrow-dropleft"></ion-icon>
                                            </a>
                                            <ul x-show="open" x-transition.duration.500ms>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>login v1</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>register v1</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>forgot password v2</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>recover password v1</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li x-data="{open : false}">
                                            <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                                <div class="flex flex-row justify-start items-center space-x-3">
                                                    <ion-icon name="radio-button-off"></ion-icon>
                                                    <p>login & register v2</p>
                                                </div>
                                                <ion-icon name="arrow-dropleft"></ion-icon>
                                            </a>
                                            <ul x-show="open" x-transition.duration.500ms>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>login v2</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>register v2</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>forgot password v1</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>recover password v2</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>loock screen</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>legacy user menu</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>language menu</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>error 404</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>error 500</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>pace</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>blank page</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>starter page</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="search"></ion-icon>
                                            <p>search</p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>simple search</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>enhanced</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <p class="uppercase mx-2 my-1 py-1 text-gray-400 text-sm">micellaneus</p>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="podium"></ion-icon>
                                        <p>tabded iframe plugin</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="document"></ion-icon>
                                        <p>documentation</p>
                                    </a>
                                </li>
                                <li>
                                    <p class="uppercase mx-2 my-1 py-1 text-gray-400 text-sm">multi level example</p>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="radio-button-off"></ion-icon>                                        
                                        <p>level 1</p>
                                    </a>
                                </li>
                                <li x-data="{open : false}">
                                    <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                        <div class="flex flex-row justify-start items-center space-x-3">
                                            <ion-icon name="radio-button-off"></ion-icon>
                                            <p>level 2</p>
                                        </div>
                                        <ion-icon name="arrow-dropleft"></ion-icon>
                                    </a>
                                    <ul x-show="open" x-transition.duration.500ms>
                                        <li>
                                            <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                <ion-icon name="radio-button-off"></ion-icon>
                                                <p>level 2</p>
                                            </a>
                                        </li>
                                        <li x-data="{open:false}">
                                            <a href="#" x-on:click="open = ! open" class="flex flex-row justify-between items-center text-gray-400 px-2 py-1 mx-2 my-1 hover:bg-gray-600 rounded">
                                                <div class="flex flex-row justify-start items-center space-x-3">
                                                    <ion-icon name="radio-button-off"></ion-icon>
                                                    <p>level 2</p>
                                                </div>
                                                <ion-icon name="arrow-dropleft"></ion-icon>
                                            </a>
                                            <ul x-show="open" x-transition.duration.500ms>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>level 3</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>level 3</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded text-sm space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                                        <ion-icon name="radio-button-off"></ion-icon>
                                                        <p>level 3</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded  space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="radio-button-off"></ion-icon>
                                        <p>level 1</p>
                                    </a>
                                </li>
                                <li>
                                    <p class="uppercase mx-2 my-1 py-1 text-gray-400 text-sm">label</p>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded  space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="radio-button-off" class="text-red-500"></ion-icon>
                                        <p>important</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded  space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="radio-button-off" class="text-yellow-500"></ion-icon>
                                        <p>warning</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex flex-row items-center px-2 py-1 mx-2 my-1 rounded  space-x-3 justify-start text-gray-400 hover:bg-gray-600">
                                        <ion-icon name="radio-button-off" class="text-sky-500"></ion-icon>
                                        <p>informational</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
       </aside>
       <div  :class="(open) ? 'ml-0' : 'ml-60'" class="bg-gray-200 box-border">
           <div class=" px-2 overflow-auto">
               {{-- content header --}}
               <div class="flex flex-row justify-between py-4">
                   <h1 class="text-lg font-semibold capitalize">Dashboard</h1>
                   <ol class="flex flex-row capitalize text-sm">
                    <li class="flex flex-row space-x-2 justify-end">
                           <a href="" class="text-sky-500">home</a>
                           <span>/</span>
                           <p>dashboard</p>
                       </li>
                   </ol>
               </div>
               {{-- main content --}}
               <section class="box-border">
                   <div class="flex flex-row space-x-3">
                       {{-- small boxes --}}
                       <div class="bg-sky-500 w-44 rounded shadow box-border">
                           <div class="flex flex-row items-center space-x-2 justify-between px-4 py-2">
                               <div>
                                   <h3 class="text-xl font-semibold text-gray-200">150</h3>
                                   <p class="text-gray-200">new orders</p>
                               </div>
                               <ion-icon name="pricetag"></ion-icon>
                           </div>
                           <a href="" class="flex flex-row justify-center items-center space-x-2 rounded bg-sky-600 text-gray-300 hover:text-gray-200">
                               <p>more info</p>
                               <ion-icon name="arrow-forward"></ion-icon>
                           </a>
                       </div>
                       {{-- main row --}}
                       <div class="w-44 bg-green-500 rounded shadow">
                           <div class="  px-4 py-2">
                               <div class="flex flex-row justify-between items-center">
                                   <div>
                                       <h3 class="text-xl text-gray-200 font-semibold">50%</h3>
                                       <p class="text-gray-200">bounce rate</p>
                                   </div>
                                   <ion-icon name="podium"></ion-icon>
                               </div>
                            </div>
                            <a href="" class="flex flex-row justify-center items-center bg-green-600 text-gray-300 hover:text-gray-200 rounded shadow">
                                <span>more info</span>
                                <ion-icon name="arrow-forward"></ion-icon>
                            </a>
                       </div>
                   </div>
               </section>
           </div>
       </div>
    </div>
</x-mytmp1.my-layout>