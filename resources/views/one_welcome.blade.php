<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Alejandro Martinez</title>
    @vite('resources/css/app.css')
    <style>
        #navbar.transition-colors {
            transition: background-color 1s ease;
        }

        .gradient-animate {
            position: relative;
            z-index: 0;
        }

        .gradient-animate::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, #d1fae5 0%, #fffbeb 100%);
            background-size: 200% 200%;
            z-index: -1;
            animation: moveGradient 4s infinite linear;
        }

        @keyframes moveGradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Add this to your CSS file */
        .custom-width {
            width: 200px;
            /* Your desired width */
        }

        .custom-height {
            height: 200px;
            /* Your desired height */
        }
    </style>
</head>
<script>
    document.addEventListener("scroll", function() {
        var navi_item1 = document.getElementById('navi_item1');
        var navi_item2 = document.getElementById('navi_item2');
        var navi_item3 = document.getElementById('navi_item3');
        var navi_item4 = document.getElementById('navi_item4');
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.remove('bg-emerald-900', 'shadow-none');
            navbar.classList.add('bg-emerald-700', 'shadow-md');
            navi_item1.classList.replace('text-emerald-900', 'text-white');
            navi_item2.classList.replace('text-emerald-900', 'text-white');
            navi_item3.classList.replace('text-emerald-900', 'text-white');
            navi_item4.classList.replace('text-emerald-900', 'text-white');
        } else {
            navbar.classList.remove('bg-emerald-700', 'shadow-md');
            navbar.classList.add('shadow-none');
            navi_item1.classList.replace('text-white', 'text-emerald-900');
            navi_item2.classList.replace('text-white', 'text-emerald-900');
            navi_item3.classList.replace('text-white', 'text-emerald-900');
            navi_item4.classList.replace('text-white', 'text-emerald-900');
        }
    });

    var slideIndex = 1;

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add("hidden");
        }
        slides[slideIndex - 1].classList.remove("hidden");
    }
</script>

<body class="gradient-animate">
    <div class="sticky top-0 z-50">
        <div class="py-5 text-center duration-300">
            <div id="navbar" class="inline-flex rounded-lg p-2.5 gap-5 transition-colors">
                <a href="#about" id="navi_item1" class="text-emerald-900 no-underline px-2.5 py-1.25 hover:bg-white hover:text-emerald-900 rounded-lg transition duration-300">About</a>
                <a href="#connect" id="navi_item2" class="text-emerald-900 no-underline px-2.5 py-1.25 hover:bg-white hover:text-emerald-900 rounded-lg transition duration-300">Connect</a>
                <a href="#experience" id="navi_item3" class="text-emerald-900 no-underline px-2.5 py-1.25 hover:bg-white hover:text-emerald-900 rounded-lg transition duration-300">Work</a>
                <a href="#projectSlideshow" id="navi_item4" class="text-emerald-900 no-underline px-2.5 py-1.25 hover:bg-white hover:text-emerald-900 rounded-lg transition duration-300">Projects</a>
            </div>
        </div>
    </div>
    <div class="bg-amber-50">
        
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16 section" id="about">
            <h1 class="text-center text-4xl lg:text-5xl font-bold mb-8 pb-4 text-emerald-900">Hi, I'm Alex!</h1>
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
        <div class="py-16 section" id="connect">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p class="mt-2 text-3xl font-bold tracking-tight text-emerald-800 sm:text-4xl">Let's build something together!</p>
                    <p class="mt-6 text-lg leading-8 text-gray-500">Are you seeking a skilled and versatile developer to join your team? Look no further! With my passion and my experience, I can confidently bring your vision to life. From small and simple portfolio websites to complex e-commerce platforms, I have the experience to deliver exactly what you need.</p>
                    <ul class="ml-1 mt-8 flex items-center justify-center" aria-label="Social media">
                        <li class="mr-5">
                            <a class="block text-emerald-900 hover:text-emerald-700" href="https://github.com/thedigialex" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)">
                                <span class="sr-only">GitHub</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="mr-5 text-xs">
                            <a class="block text-emerald-900 hover:text-emerald-700" href="https://www.linkedin.com/in/alejandro-martinez-10b5b0a8" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)">
                                <span class="sr-only">LinkedIn</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                    <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="mr-5 text-xs">
                            <a class="block text-emerald-900 hover:text-emerald-700" href="https://thedigialex.com" target="_blank" rel="noreferrer noopener" aria-label="My Website (opens in a new tab)">
                                <span class="sr-only">Website</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                    <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 16.057v-3.057h2.994c-.059 1.143-.212 2.24-.456 3.279-.823-.12-1.674-.188-2.538-.222zm1.957 2.162c-.499 1.33-1.159 2.497-1.957 3.456v-3.62c.666.028 1.319.081 1.957.164zm-1.957-7.219v-3.015c.868-.034 1.721-.103 2.548-.224.238 1.027.389 2.111.446 3.239h-2.994zm0-5.014v-3.661c.806.969 1.471 2.15 1.971 3.496-.642.084-1.3.137-1.971.165zm2.703-3.267c1.237.496 2.354 1.228 3.29 2.146-.642.234-1.311.442-2.019.607-.344-.992-.775-1.91-1.271-2.753zm-7.241 13.56c-.244-1.039-.398-2.136-.456-3.279h2.994v3.057c-.865.034-1.714.102-2.538.222zm2.538 1.776v3.62c-.798-.959-1.458-2.126-1.957-3.456.638-.083 1.291-.136 1.957-.164zm-2.994-7.055c.057-1.128.207-2.212.446-3.239.827.121 1.68.19 2.548.224v3.015h-2.994zm1.024-5.179c.5-1.346 1.165-2.527 1.97-3.496v3.661c-.671-.028-1.329-.081-1.97-.165zm-2.005-.35c-.708-.165-1.377-.373-2.018-.607.937-.918 2.053-1.65 3.29-2.146-.496.844-.927 1.762-1.272 2.753zm-.549 1.918c-.264 1.151-.434 2.36-.492 3.611h-3.933c.165-1.658.739-3.197 1.617-4.518.88.361 1.816.67 2.808.907zm.009 9.262c-.988.236-1.92.542-2.797.9-.89-1.328-1.471-2.879-1.637-4.551h3.934c.058 1.265.231 2.488.5 3.651zm.553 1.917c.342.976.768 1.881 1.257 2.712-1.223-.49-2.326-1.211-3.256-2.115.636-.229 1.299-.435 1.999-.597zm9.924 0c.7.163 1.362.367 1.999.597-.931.903-2.034 1.625-3.257 2.116.489-.832.915-1.737 1.258-2.713zm.553-1.917c.27-1.163.442-2.386.501-3.651h3.934c-.167 1.672-.748 3.223-1.638 4.551-.877-.358-1.81-.664-2.797-.9zm.501-5.651c-.058-1.251-.229-2.46-.492-3.611.992-.237 1.929-.546 2.809-.907.877 1.321 1.451 2.86 1.616 4.518h-3.933z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="block text-emerald-900 hover:text-emerald-700" href="mailto:alejandro11raym@gmail.com" aria-label="Email">
                                <span class="sr-only">Email</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 6" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                    <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="py-16 section" id="experience">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 bg-white bg-opacity-75 rounded-lg ">
                <dl class="py-16  grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <i class="fas fa-globe text-white"></i>
                            </div>
                            eLink Design, Web Developer
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Responsible for managing the software development lifecycle, from requirements to deployment, while prioritizing the development of advanced features for intuitive user experiences. I utilize frameworks such as Vue.js, WordPress, and Laravel to create scalable web applications. Additionally, I play a key role in enhancing website design, maintenance, SEO, and mobile/web development.</dd>
                        <div class="mt-4">
                            <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                            <dd class="flex flex-wrap gap-2 mt-2">
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">PHP</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">SQL</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Laravel</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Collaboration</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">API Integration</span>
                            </dd>
                        </div>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <i class="fas fa-server text-white"></i>
                            </div>
                            Intelliwire, System Administrator
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Responsibility is to optimize server infrastructure, ensuring optimal performance, reliability, and security across all hosted services. I tailor configurations to meet unique client needs, maximizing website efficiency. Intelliwire serves as a crucial partner to eLink Design, providing a robust hosting platform for their websites and offering a wide range of hosting solutions.</dd>
                        <div class="mt-4">
                            <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                            <dd class="flex flex-wrap gap-2 mt-2">
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">cPanel</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Ubuntu</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Email</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">DNS</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">API Integration</span>
                            </dd>
                        </div>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <i class="fas fa-handshake text-white"></i></i>
                            </div>
                            eLink Design, Support Manager
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Oversee customer support for new and ongoing projects, ensuring seamless handling of updates post-launch. Leading the support team, I leverage my technical expertise and leadership skills to effectively resolve customer issues. Collaborating with cross-functional teams, I continuously strive to improve and enhance the user experience.</dd>
                        <div class="mt-4">
                            <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                            <dd class="flex flex-wrap gap-2 mt-2">
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Leadership</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Collaboration</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Mentorship</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Prioritization</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Communication</span>
                            </dd>
                        </div>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-900">
                                <i class="fas fa-users text-white"></i>
                            </div>
                            eLink Design, Support Developer
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-500">Leverage my technical expertise in content management software, SEO, maintenance, and web development languages such as HTML, CSS, and JavaScript to ensure effective issue resolution. I play a vital role in streamlining support processes, refining procedures to improve workflows, and elevate the overall customer support experience.</dd>
                        <div class="mt-4">
                            <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                            <dd class="flex flex-wrap gap-2 mt-2">
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Debugging</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Adaptability</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Empathy</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Resourcefulness</span>
                                <span class="px-3 py-1 rounded bg-emerald-900 text-white">Positive attitude</span>
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>

        <div id="projectSlideshow" class="py-16  max-w-6xl mx-auto relative section">
            <div class="mx-auto max-w-2xl lg:text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-emerald-800 sm:text-4xl">Projects</p>
            </div>
            <div class="mySlides fade flex flex-col md:flex-row items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <img src="/images/digital-pet-logo.png" alt="Descriptive Alt Text" class="rounded-lg shadow-lg h-32 w-32 md:h-48 md:w-48 lg:h-64 lg:w-64">
                </div>
                <div class="text text-black text-lg p-4 bg-white bg-opacity-75 rounded-lg m-2 shadow-lg w-full md:w-full lg:w-1/2 text-center">
                    <h3 class="text-emerald-900">Digital Pet</h3>
                    <p class="text-black">Digital Pet is a virtual pet app that allows users to take care of their own Digital Monster. With Digital Pet, users can choose from a variety of pets that evolve based on how a user cares for them. To keep their Digital Monster happy and healthy, users must feed them, play with them, and BATTLE with them! Users can also earn in-game currency by completing tasks, which they can then use to buy new items and accessories for their Digital Monster.</p>
                    <div class="mt-4">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                        <dd class="flex flex-wrap gap-2 mt-2">
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Java</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">XML</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Android Studio</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Play Console</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Fire Base</span>
                        </dd>
                    </div>
                </div>
            </div>
            <div class="mySlides fade hidden flex flex-col md:flex-row items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <img src="/images/website_logo.png" alt="Descriptive Alt Text" class="rounded-lg shadow-lg h-32 w-32 md:h-48 md:w-48 lg:h-64 lg:w-64">
                </div>
                <div class="text text-black text-lg p-4 bg-white bg-opacity-75 rounded-lg m-2 shadow-lg w-full md:w-full lg:w-1/2 text-center">
                    <h3 class="text-emerald-900">Website Checker</h3>
                    <p class="text-black">Website Checker, a powerful tool designed for effortless website analysis. With its user-friendly interface, users can input multiple website URLs to swiftly assess their response codes. But that’s not all – the app goes above and beyond by enabling users to integrate their Google Analytics key. This integration empowers users to comprehensively evaluate their website’s SEO performance, page speed, and accessibility.</p>
                    <div class="mt-4">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                        <dd class="flex flex-wrap gap-2 mt-2">
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Lighthouse API</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Respone Codes</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">SQlite</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Java</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">SSL</span>
                        </dd>
                    </div>
                </div>
            </div>
            <div class="mySlides fade hidden flex flex-col md:flex-row items-center justify-center">
                <div class="flex flex-col items-center justify-center">
                    <img src="/images/recipe-book-site.png" alt="Descriptive Alt Text" class="rounded-lg shadow-lg h-32 w-32 md:h-48 md:w-48 lg:h-64 lg:w-64">
                </div>
                <div class="text text-black text-lg p-4 bg-white bg-opacity-75 rounded-lg m-2 shadow-lg w-full md:w-full lg:w-1/2 text-center">
                    <h3 class="text-emerald-900">Recipe Book</h3>
                    <p class="text-black">This WordPress site is a specialized platform to hold family recipes, featuring a robust user authentication system for secure access. It utilizes post type exclusively for recipes, ensuring a unique and organized presentation. Users can submit and modify their own recipes through an intuitive interface, and these submissions are displayed using custom templates. While the backend is managed through a contact form plugin connected with custom functions.</p>
                    <div class="mt-4">
                        <dt class="text-base font-semibold leading-7 text-emerald-800">Key Skills</dt>
                        <dd class="flex flex-wrap gap-2 mt-2">
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">PHP</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">JavaScript</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">WordPress</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">Authentication</span>
                            <span class="px-3 py-1 rounded bg-emerald-900 text-white">SQL</span>
                        </dd>
                    </div>
                </div>
            </div>

            <a class="prev cursor-pointer absolute top-1/2 left-0 w-auto p-3 -mt-3 text-emerald-900 font-bold text-2xl select-none hover:scale-125 transition-transform duration-200" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next cursor-pointer absolute top-1/2 right-0 w-auto p-3 -mt-3 text-emerald-900 font-bold text-2xl select-none hover:scale-125 transition-transform duration-200" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <footer class="bg-emerald-800 text-white text-center p-4 opacity-75">
            <p>&copy; 2024 <span class="font-semibold">TheDigiAlex</span></p>
            <p>Hosted by <a href="https://thedigitalex.com" >TheDigiAlex</a></p>
        </footer>
    </div>
</body>

</html>