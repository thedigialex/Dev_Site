<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alejandro Martinez</title>
    @vite('resources/css/app.css')
    <style>
        #navbar.transition-colors {
            transition: background-color 1s ease;
        }
    </style>

</head>
<script>
    document.addEventListener("scroll", function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.remove('bg-emerald-900');
            navbar.classList.add('bg-emerald-700');
        } else {
            navbar.classList.remove('bg-emerald-700');
            navbar.classList.add('bg-emerald-900');
        }
    });
</script>
<!-- emerald-900 -->

<body>
    <div class="sticky top-0 z-50">
        <div class="py-5 text-center  duration-300">
            <div id="navbar" class="inline-flex rounded-lg p-2.5 gap-5 bg-emerald-900 transition-colors">
                <a href="#link1" class="text-white no-underline px-2.5 py-1.25">Link 1</a>
                <a href="#link2" class="text-white no-underline px-2.5 py-1.25">Link 2</a>
                <a href="#link3" class="text-white no-underline px-2.5 py-1.25">Link 3</a>
                <a href="#link4" class="text-white no-underline px-2.5 py-1.25">Link 4</a>
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-32">
        <h1 class="text-center text-4xl lg:text-5xl font-bold mb-8 pb-4 text-emerald-900 border-b-4 border-emerald-900">Alejandro Martinez</h1>
        <div class="flex flex-col md:flex-row items-center justify-center gap-4 mt-8">
            <img src="/images/dev_site_logo.png" alt="Descriptive Alt Text" class="md:w-1/3 rounded-t-lg shadow-lg">
            <div class="text-lg text-emerald-900 md:w-1/2">
                <h2 class="mt-2 text-3xl font-bold tracking-tight text-emerald-800 sm:text-4xl">Full Stack Developer</h2>
                <p class="mt-6 text-lg leading-8 text-gray-500">In 2014, I embarked on an academic journey at the University of Kentucky, majoring in Computer Science. My academic pursuits were further enriched by minoring in Computer Engineering and Mathematics, a decision influenced by the significant overlap in coursework. My profound passion for programming was ignited when a favorite game of mine was discontinued, inspiring me to reconstruct it from scratch. This project was a pivotal moment in my career, laying the foundation for my future endeavors.</p>
                <p class="mt-6 text-lg leading-8 text-gray-500">Currently, I am dedicated to enhancing and maintaining client websites in my role. My career trajectory began as a Support Developer, quickly advancing to a Managerial position, and eventually evolving into a Full Web Developer role. My commitment to professional growth is paralleled by my personal dedication to continuous learning.</p>
                <p class="mt-6 text-lg leading-8 text-gray-500">In my leisure time, I immerse myself in various projects, constantly seeking new opportunities to broaden my technical expertise and knowledge.</p>
            </div>
        </div>
    </div>
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-emerald-800 sm:text-4xl">Let's build something together!</p>
                <p class="mt-6 text-lg leading-8 text-gray-500">Are you seeking a skilled and versatile developer to join your team? Look no further! With my passion and my experience, I can confidently bring your vision to life. From small and simple portfolio websites to complex e-commerce platforms, I have the experience to deliver exactly what you need.</p>
            </div>
        </div>
    </div>
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            Push to deploy
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            SSL certificates
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            Simple queues
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            Advanced security
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-emerald-900">Deploy faster</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-emerald-800 sm:text-4xl">Everything you need to deploy your app</p>
                <p class="mt-6 text-lg leading-8 text-gray-500">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
            </div>
        </div>
    </div>
    <div class="py-5 text-center">
        <div class="inline-flex bg-emerald-900 rounded-lg p-2.5 gap-5">
            <a href="#link1" class="text-white no-underline px-2.5 py-1.25">Link 1</a>
            <a href="#link2" class="text-white no-underline px-2.5 py-1.25">Link 2</a>
            <a href="#link3" class="text-white no-underline px-2.5 py-1.25">Link 3</a>
            <a href="#link4" class="text-white no-underline px-2.5 py-1.25">Link 4</a>
        </div>
    </div>
</body>

</html>