@extends("layouts")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @section('content1')
    <!-- <div class="balls w-16 h-16 z-50 rounded-[50%] fixed top-2 left-[-1rem] bg-zinc-950"></div> -->
    <div class="home_content  flex flex-col gap-6">
        <p class="slug px-8 text-lg py-2 text-white rounded-3xl bg-indigo-700 absolute">A designer forced to be a developer.</p>
        <h3 class="title_hero  text-zinc-950 uppercase mt-16 text-6xl">Let's talk my <span class="font-bold">habbit </span>who I'm doing right now to be my━ dreams!</h3>
    </div>
    <div class="rounding_text flex flex-col gap-3 justify-end text-lg font-light text-end items-end">
        <div class="slug px-4 py-1 hover:bg-zinc-950 hover:text-white  rounded-3xl border border-slate-500">Introducing.</div>
        <p class="uppercase"><span class="font-bold ">━ I'm Muhammad Hafiidh Basri</span> <br> as a Software Engineering student in SMKN 1 Bekasi<br>but I have a habbit to be a designer.</p>
    </div>
    @endsection
    @section('content2')
    <div class="home_content w-full grid md:grid-cols-1 lg:grid-cols-3 px-12 py-16 rounded-3xl bg-zinc-950 gap-8">
        <div class="story flex flex-col gap-3">
            <div class="title_habbit leading-8 text-3xl font-light text-white">
                <span>━ About</span><br>
                why I do this?
            </div>
            <div class="story_habbit text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>

        <img src="" class="w-full h-[20rem] rounded-2xl bg-white">
        <div class="other flex flex-col gap-4 items-end justify-end">
            <div class="flex button">
                <button class="bg-transparent border border-white text-white  px-5 py-2 rounded-full">See my work</button>
                <button class="bg-transparent border border-white rotate-45 px-[2px] text-white text-lg  rounded-[50%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <rect fill="none" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m19 12l-7-7l-7 7m7-7v14" />
                    </svg>
                </button>
            </div>

            <p class="text-white text-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

        </div>
    </div>
    @endsection
    @section('content3')
    <div class="home_content w-full flex px-12 items-center rounded-3xl flex-col gap-8">
        <div class=" w-full flex px-12 items-center rounded-3xl flex-col gap-8">
            <h3 class="title_habbit leading-[3.5rem] font-bold text-5xl">
                My Habbit is being <br> <span class="pl-40 font-light">━ My Experiences.</span>
            </h3>
            <div class="desc flex items-center justify-between w-full">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<br> ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <button class="bg-transparent border border-zinc-950 px-5 py-2 rounded-full"><a href="https://dribbble.com/apid077">See all work</a></button>
            </div>
        </div>

        <div class="content_work gap-8 grid grid-cols-2">
            <a href="https://dribbble.com/shots/22826608-Crypto-Investment-Trading-App"">
                <img src="https://cdn.dribbble.com/userupload/10778359/file/original-0c03e50587b88cfba5660e0aa1eaf36f.jpg?resize=1024x768" class=" h-[20rem] rounded-2xl object-cover bg-zinc-950">
            </a>

            <a href="https://dribbble.com/shots/22607823-Register-Sign-In-Pages-of-InStay-app">
                <img src="https://cdn.dribbble.com/userupload/10195152/file/original-4feff14f2cfdc6813010d2a926fcfebc.jpg?resize=1024x801" class=" h-[20rem] rounded-2xl object-cover bg-zinc-950">

            </a>
        </div>
    </div>
    @endsection
    <!-- <div class="container-login py-10 px-24 h-screen flex items-center justify-center">
        <div class="wrapper-login  h-fit rounded-[1rem] ">
        </div>
    </div> -->
<script>
    
    // window.addEventListener('mousemove', (e) => {
    //     const balls = document.querySelector('.balls');
    //     requestAnimationFrame(() => {
    //         balls.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`
    //     })
    // })
</script>
</body>

</html>