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
    <div class="flex flex-col gap-10 lg:gap-[8rem]">
        <div class="hero_dashboard font-semibold relative bg-transparent text-[12vw] mt-[-3rem] lg:mt-[-4rem] capitalize">
            <div class="shape_1 fixed z-[-9999]"></div>
            <div class="shape_2 fixed z-[-9999] right-20 top-52"></div>
            <h1 class="hello_firstname">Muhammad</h1>
            <h1 class="hello_lastname text-nowrap mt-[-1rem] lg:mt-[-4rem]">━ Hafiidh Basri</h1>
        </div>
        <div class="abouts flex flex-col gap-4">
           <h3 class="title underline text-xl lg:text-3xl font-bold">About me.</h3>
           <p class="lg:text-2xl lg:w-[42rem]">Hello! I’m Muhammad Hafiidh Basri. I graduated from SMKN 1 Bekasi city with Software Engineering major and have a high interesting for explore more about the world of UI/UX Design.</p>

        </div>
    </div>
    @endsection
    @section('content2')
    <div class="home_content w-full mt-10 flex px-4 lg:px-12 items-center rounded-3xl flex-col gap-8">
        <div class="lg:w-full flex lg:px-12 items-center rounded-3xl flex-col gap-8">
            <h3 class="title_habbit lg:leading-[3.5rem] font-bold text-[1.5rem] lg:text-5xl">
                My Habbit is being<br><span class="lg:pl-40 font-light">━ My Experiences.</span>
            </h3>
            <div class="desc flex flex-col lg:flex-row gap-10 lg:items-center justify-between w-full">
                <p class="text-lg">I good to learn any the new things and try for make a better experience for users . I'm committed to creating engaging, user-focused designs, ensuring every interaction provides an empathetic interactive design, and fulfilling.</p>
                <button class="bg-transparent  text-nowrap border border-zinc-950 px-5 py-2 rounded-full"><a href="https://dribbble.com/apid077">See all work</a></button>
            </div>
        </div>

        <div class="content_work gap-8 grid grid-cols-1 lg:grid-cols-2 w-full">
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