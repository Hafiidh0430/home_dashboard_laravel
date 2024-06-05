
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <!-- <div class="ball_mask absolute w-16 h-16 bg-blue-600 rounded-[50%]"></div> -->
    <div class="container-login py-10 px-24 h-screen flex items-center justify-center">
        <div class="wrapper-login  h-fit rounded-[1rem] bg-white-300 bg-clip-padding backdrop-filter bg-slate-100 backdrop-blur-md bg-opacity-60 ">
            <div class="img_login flex items-center lg:h-full w-full gap-16 p-10">
                <div class="hero_section md:hidden max-sm:hidden lg:flex flex-col h-full">

                    <img class="img_hero relative object-cover rounded-[1rem] w-[32rem] h-full" src="https://64.media.tumblr.com/50735235ae8cd5f523886b93ab860d78/tumblr_o1end2TuQa1v1wfzlo1_500.gif" alt="">

                </div>
                <div class="login_form rounded-[1rem]">
                    <div class="form w-full flex flex-col gap-6 ">
                        <div class="title_login flex flex-col gap-2 h-full">
                            <h1 class="text-3xl font-bold">Sign In before visit my journey.</h1>
                            <p class="text-lg font-light text-slate-500 leading-7">Please Sign In before access my profile and see<br> what I made before you! </p>
                        </div>
                        <form action='{{ route("login.user") }}' method="POST" class="input_form flex flex-col gap-6">
                            <div class="email flex flex-col gap-2">
                                @csrf
                                <label for="username" class="username_label ">Username</label>
                                <input type="text" placeholder="hafiidh" id="username" name="username" class="username px-4 py-3 bg-slate-100 border-2 border-slate-200 rounded-[8px] outline-none">
                            </div>
                            <div class="password flex flex-col gap-2">
                                <label for="password" class="password_label">Password</label>
                                <input type="password" placeholder="12345" id="email" name="password" class="password  bg-slate-100 px-4 py-3 border-2 border-slate-200 rounded-[8px] outline-none">
                            </div>
                            <button type="submit" name="submit" class="login_submit w-full bg-gray-950 text-white py-4 rounded-[8px]">Sign In to account</button>
                        </form>
                    </div>
                    <p class="text-center text-[14px] mt-6">By sign an account you agree with our <span class="underline">Terms of Service</span>,<br> <span class="underline">Privacy Policy</span>, and my default <span class="underline">Notification Settings.</span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>