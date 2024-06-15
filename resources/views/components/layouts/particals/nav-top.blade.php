<div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block dark:bg-neutral-600">
    <div class="grid items-center grid-cols-12">
        <div class="col-span-7">
            <ul class="flex items-center py-3">
                <li class="ltr:mr-4 rtl:ml-4">
                    <p class="mb-0 text-gray-800 text-13 dark:text-gray-50">
                        <i class="mdi mdi-map-marker"></i> Your Location:
                        <a href="javascript:void(0)" class="font-medium">New Caledonia</a></p>
                </li>
                <li>
                    <ul class="flex flex-wrap gap-4 text-gray-800 ">
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                            <a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                            <a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a>
                        </li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                            <a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                            <a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                            <a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-span-5 ltr:ml-auto rtl:mr-auto">
            <ul class="flex items-center gap-4">
                <li>
                    {{--                    <a wire:navigate href="{{route('register.candidate')}}" class="py-3 font-medium text-gray-800 text-13 dark:text-gray-50" data-tw-toggle="modal" data-tw-target="#modal-id_form"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</a>--}}
                    <a href="#signupModal" class="py-3 font-medium text-gray-800 text-13 dark:text-gray-50" data-tw-toggle="modal" data-tw-target="#modal-id_form"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</a>

                    <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="fixed top-0 bottom-0 left-0 right-0 z-50 overflow-hidden">
                            <div class="absolute inset-0 transition-opacity bg-black bg-opacity-60 modal-overlay"></div>
                            <div class=" p-4 mx-auto animate-translate w-[75%]">
                                <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl top-20 dark:bg-neutral-800">
                                    <div class="p-12 bg-white h-full dark:bg-neutral-800">
                                        <div class="mb-4 text-center">
                                            <h5 class="mb-1 text-gray-800 dark:text-gray-50">CHỌN LOẠI TÀI KHOẢN MUỐN ĐĂNG KÝ</h5>
                                        </div>
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="h-full">
                                                <div class="max-w-sm h-full  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Đăng ký ứng viên</h5>
                                                    <ul>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> + 1.500.000 công việc được cập nhật thường xuyên
                                                        </li>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> Ứng tuyển công việc yêu thích HOÀN TOÀN MIỄN PHÍ
                                                        </li>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> Hiển thị thông tin hồ sơ với nhà tuyển dụng hàng đầu
                                                        </li>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> Nhận bản tiên công việc phù hợp định kỳ
                                                        </li>
                                                    </ul>
                                                    <div class="text-center ">
                                                        <a wire:navigate href="{{route('register.candidate')}}" class=" w-full mt-4  text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Đăng ký ứng viên</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="h-full">
                                                <div class="  max-w-sm h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Đăng ký nhà tuyển dụng</h5>
                                                    <ul class="min-h-80">
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> + 3.000.000 ứng viên tiếp cận thông tin tuyển dụng
                                                        </li>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> Không giới hạn tương tác với ứng viên qua hệ thống nhắn tin nội bộ MIỄN PHÍ
                                                        </li>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> Quảng cáo thông tin giúp tin tuyển dụng được phủ rộng trên toàn bộ hệ thống
                                                        </li>
                                                        <li>
                                                            <i class="uil uil-check-circle"></i> Quảng cáo công ty trên Fanpage số 1 về việc làm - tuyển dụng
                                                        </li>
                                                    </ul>
                                                    <div class="text-center ">
                                                        <a wire:navigate href="{{route('register.company')}}" class="w-full mt-4 text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Đăng ký nhà tuyển dụng</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
