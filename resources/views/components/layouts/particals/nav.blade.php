<nav class="navbar fixed right-0 left-0 top-0 lg:top-[44.5px] px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 dark:bg-neutral-800 z-40 dark:shadow-neutral-900" id="navbar">
    <div class="mx-auto container-fluid">
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <a href="index.html" class="flex items-center">
                <img src="{{asset('assets/images/logo-dark.png')}}" alt="" class="logo-dark h-[22px] block dark:hidden">
                <img src="{{asset('assets/images/logo-light.png')}}" alt="" class="logo-dark h-[22px] hidden dark:block">
            </a>
            <button data-collapse-toggle="navbar-collapse" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg navbar-toggler group lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="flex items-center lg:order-2">

                <div>
                    <div class="relative dropdown">
                        <div class="relative">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-300" aria-expanded="false" data-dropdown-toggle="notification">
                                <i class="text-2xl mdi mdi-bell"></i>
                            </button>
                            <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white dark:ring-neutral-800">3</span>
                        </div>
                        <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72 dark:bg-neutral-800 " id="notification">

                            <div class="border rounded border-gray-50 dark:border-neutral-600" aria-labelledby="notification">
                                <div class="grid grid-cols-1 ">
                                    <div class="p-4 bg-gray-50 dark:bg-neutral-700">
                                        <h6 class="mb-1 text-gray-800 dark:text-gray-50"> Notification </h6>
                                        <p class="mb-0 text-gray-500 text-13 dark:text-gray-300">You have 4 unread Notification</p>
                                    </div>
                                </div>
                                <div class="h-60" data-simplebar>
                                    <div>
                                        <a href="#!">
                                            <div class="flex p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <div class="h-10 w-10 bg-violet-500/20 rounded-full text-center leading-[2.8]">
                                                        <i class="text-lg text-violet-500 uil uil-user-check"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">22 verified registrations</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>3 hour ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="{{asset('assets/images/user/img-01.jpg')}}" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Kevin Stewart</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>1 hour ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="{{asset('assets/images/featured-job/img-04.png')}}" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Applications has been approved</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>45 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="assets/images/user/img-02.jpg" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Salena Layfield</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="assets/images/featured-job/img-01.png" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Creative Agency</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <div class="grid p-1 border-t border-gray-50 dark:border-zinc-600 justify-items-center bg-gray-50 dark:bg-neutral-700">
                                    <a class="border-0 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 btn dark:text-gray-50" href="javascript:void(0)">
                                        <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

{{--                    <div class="relative dropdown ltr:mr-4 rtl:ml-4">--}}
{{--                        <button type="button" class="flex items-center px-4 py-5 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
{{--                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{asset('assets/images/user/img-02.jpg')}}" alt="Header Avatar">--}}
{{--                            <span class="hidden fw-medium xl:block dark:text-gray-50">Shawn L.</span>--}}
{{--                        </button>--}}
{{--                        <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">--}}
{{--                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">--}}
{{--                                <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="manage-jobs.html">Manage Jobs</a>--}}
{{--                            </li>--}}
{{--                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">--}}
{{--                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="bookmark-jobs.html">Bookmarks Jobs</a>--}}
{{--                            </li>--}}
{{--                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">--}}
{{--                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="profile.html">My Profile</a>--}}
{{--                            </li>--}}
{{--                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">--}}
{{--                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="sign-out.html">Logout</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
                        <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" >
                            <li class="py-5 lg:px-2">
                                <a href="" class="bg-red-600 py-2 px-2 text-white font-medium leading-tight dark:text-white" id="price" data-bs-toggle="dropdown">ĐĂNG NHẬP</a>
                            </li>
                            <li class="py-5 lg:px-2">
                                <a href="/" class="bg-yellow-500 py-2 px-2 text-white font-medium leading-tight dark:text-white" id="contact" data-bs-toggle="dropdown">+ĐĂNG KÝ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="navbar-collapse" class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
                <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" id="navigation-menu">
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="candidate" data-bs-toggle="dropdown">TÌM ỨNG VIÊN </a>
                    </li>
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="company" data-bs-toggle="dropdown">CÔNG TY </a>
                    </li>
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="cv" data-bs-toggle="dropdown">TẠO CV</a>
                    </li>
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="hot" data-bs-toggle="dropdown">VIỆC HOT</a>
                    </li>
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="new" data-bs-toggle="dropdown">VIỆC MỚI NHẤT</a>
                    </li>
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="price" data-bs-toggle="dropdown">BẢNG GIÁ</a>
                    </li>
                    <li class="py-5 lg:px-2">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">LIÊN HỆ</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
