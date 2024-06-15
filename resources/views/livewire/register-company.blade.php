<section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                    <div class="grid flex-col grid-cols-12 ">
                        <div class="col-span-12 lg:col-span-4 ltr:rounded-l-lg rtl:rounded-r-lg">
                            <div class="p-10">
                                <a href="index.html">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="" class="hidden mx-auto dark:block">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" class="block mx-auto dark:hidden">
                                </a>
                                <div class="mt-5">
                                    <img src="{{asset('assets/images/auth/sign-in.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 rounded-b-md lg:col-span-8 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                            <div class="flex flex-col justify-center h-full p-12">
                                <div class="text-center">
                                    <h5 class="text-[18.5px] text-white">ĐĂNG KÝ NHÀ TUYỂN DỤNG</h5>
                                </div>
                                <form wire:submit="register" class="mt-8">
                                    <div class="mb-5">
                                        <label for="usernameInput" class="text-white">Tên công ty (*)</label>
                                        <input type="text" wire:model="name" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" required="" id="" placeholder="Nhập tên công ty">
                                    </div>
                                    <div class="mb-5">
                                        <label for="usernameInput" class="text-white">Email (*)</label>
                                        <input type="text" wire:model="email" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" required="" id="" placeholder="Email để nhận hồ sơ ứng tuyển">
                                    </div>
                                    <div class="col-span-12 flex gap-3">
                                        <div class="col-span-6 mb-5">
                                            <label for="emailInput" class="text-white">Mật khẩu (*)</label>
                                            <input type="password" wire:model="password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="passwordInput" placeholder="Mật khẩu">
                                        </div>
                                        <div class="col-span-6 mb-5">
                                            <label for="emailInput" class="text-white">Nhập lại mật khẩu (*)</label>
                                            <input type="password" wire:model="confirm_password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="passwordInput" placeholder="Mật khẩu">
                                        </div>
                                    </div>
                                    <div class="col-span-12 flex gap-3">
                                        <div class="col-span-6 mb-5">
                                            <label for="emailInput" class="text-white">Mã số thuế (*)</label>
                                            <input type="text" wire:model="tax_code" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="passwordInput" placeholder="Nhập mã số thuế">
                                        </div>
                                        <div class="col-span-6 mb-5">
                                            <label for="emailInput" class="text-white">Số điện thoại liên hệ (*)</label>
                                            <input type="text" wire:model="phone" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="passwordInput" placeholder="Nhập số đện thoại liên hệ">
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <label for="usernameInput" class="text-white">Logo công ty</label>
                                        <input type="file" class="file:h-full file:border-0 file:w-24 h-10 w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40  rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" >
                                    </div>
                                    <div >
                                        <a href="" class="text-white align-middle ">Quên mật khẩu?</a>
                                    </div>

                                    <div class="my-8 text-center">
                                        <button type="submit" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Sign Up
                                        </button></div>
                                </form>
                                <div class="text-center">
                                    <p class="text-white"> Bạn đã có tài khoản? <a href="sign-up.html" class="text-white underline fw-medium"> Đăng nhập </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
