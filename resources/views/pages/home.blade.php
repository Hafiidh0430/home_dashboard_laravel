@extends("layouts")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="">
    @section('content1')
    <!-- <div class="balls w-16 h-16 z-50 rounded-[50%] fixed top-2 left-[-1rem] bg-zinc-950"></div> -->
    <div class="home_content  flex flex-col gap-6">
        <p class="slug px-5 lg:px-8 text-[14px] lg:text-lg py-2 text-white rounded-3xl bg-indigo-700 absolute">A designer forced to be a developer.</p>
        <h3 class="title_hero  text-zinc-950 uppercase mt-16 text-5xl lg:text-6xl">Let's talk my <span class="font-bold">habbit </span>who I'm doing right now to be my━ dreams!</h3>
    </div>
    <div class="rounding_text flex flex-col gap-3 justify-end text-lg font-light text-end items-end">
        <div class="slug px-4 py-1 text-[12px] lg:text-[1rem] hover:bg-zinc-950 hover:text-white  rounded-3xl border border-slate-500">Introducing.</div>
        <p class="uppercase text-[1rem]"><span class="font-bold ">━ I'm Muhammad Hafiidh Basri</span> <br> as a Software Engineering student in SMKN 1 Bekasi but I have a habbit to be a designer.</p>
    </div>
    @endsection
    @section('content2')
    <div class="home_content w-full grid md:grid-cols-1 lg:grid-cols-3 px-12 py-16 rounded-3xl bg-zinc-950 gap-10">
        <div class="story flex flex-col gap-6">
            <div class="title_habbit leading-10 lg:leading-8 text-3xl font-light text-white">
                <span>━ About</span><br>
                why I do this?
            </div>
            <div class="story_habbit text-justify text-white">
                Sejak tahun 2022, saya berniat ingin menjadi Backend Developer dan salah dalam belajar bahasa pemograman hingga terjun ke dalam dunia Frontend dan entah kesambet apa, saya malah suka UI/UX Design.<br><br>
                Karena saya orang yang terkadang suka membayangkan sesuatu yang mungkin belum pernah ada dan berniat untuk mewujudkannya, meskipun sekarang belum ada 🗿.
            </div>
        </div>

        <img src="https://dibimbing-cdn.sgp1.cdn.digitaloceanspaces.com/1686562353972-Dibimbing.id%20-%20UI_UX%20Designer%20Tugas,%20Tanggung%20jawab,%20dan%20Peran%20Pentingnya.jpg.webp" class="w-full h-[16rem] object-cover lg:h-full rounded-2xl bg-white">
        <div class="other flex flex-col gap-4 items-end justify-end">
            <div class="flex button">
                <a href="#work" class="bg-transparent border border-white text-white  px-5 py-2 rounded-full">See my work</a>
                <button class="bg-transparent border border-white rotate-45 px-[2px] text-white text-lg  rounded-[50%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <rect fill="none" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m19 12l-7-7l-7 7m7-7v14" />
                    </svg>
                </button>
            </div>

            <p class="text-white text-justify">Mendesain UI menjadi habbit saya sejak 2023 ketika saya memulai untuk mengekspos skill dan karya saya dan siapa sangka?, saya diberi apresiasi oleh guru dan teman-teman saya.</p>

        </div>
    </div>
    @endsection
    @section('content3')
    <div id="work" class="home_content w-full flex py-3 px-4 lg:px-12 items-center rounded-3xl flex-col gap-8">
        <div class="lg:w-full flex lg:px-12 items-center rounded-3xl flex-col gap-8">
            <h3 class="title_habbit lg:leading-[3.5rem] font-bold text-[2rem] lg:text-5xl">
                My Habbit is being<br><span class="lg:pl-40 font-light">━ My Experiences.</span>
            </h3>
            <div class="desc flex flex-col lg:flex-row gap-8 lg:gap-28 lg:items-center justify-between w-full">
                <p class="text-lg">I good to learn any the new things and try for make a better experience for users . I'm committed to creating engaging, user-focused designs, ensuring every interaction provides an empathetic interactive design, and fulfilling.</p>
                <button class="bg-transparent border text-nowrap border-zinc-950 px-5 py-2 rounded-full"><a href="https://dribbble.com/apid077">See all work</a></button>
            </div>
        </div>

        <div class="content_work gap-8 mt-4 grid grid-cols-1 lg:grid-cols-2 w-full">
            <a href="https://dribbble.com/shots/22826608-Crypto-Investment-Trading-App" class="w-full">
                <img src="https://cdn.dribbble.com/userupload/10778359/file/original-0c03e50587b88cfba5660e0aa1eaf36f.jpg?resize=1024x768" class=" h-[20rem] rounded-2xl w-full object-cover bg-zinc-950">
            </a>
            <a href="https://dribbble.com/shots/22607823-Register-Sign-In-Pages-of-InStay-app" class="w-full">
                <img src="https://cdn.dribbble.com/userupload/10195152/file/original-4feff14f2cfdc6813010d2a926fcfebc.jpg?resize=1024x801" class=" h-[20rem] rounded-2xl w-full object-cover bg-zinc-950">
            </a>
            <a href="https://dribbble.com/shots/24299510-Neracode-Platform-Coding-Landing-Page" class="w-full">
                <img src="https://cdn.dribbble.com/userupload/14948063/file/original-867abfb7937a23513bbea1806b5f7223.jpeg?resize=1024x768" class=" h-[20rem] rounded-2xl w-full object-cover bg-zinc-950">
            </a>
            <a href="https://dribbble.com/shots/24299422-Modern-Psychotest-Landing-Page">
                <img src="https://cdn.dribbble.com/userupload/14947700/file/original-51ec2ef97aaf0b1f4a23e0a14befd461.jpg?resize=1024x768" class=" h-[20rem] rounded-2xl w-full object-cover bg-zinc-950">

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