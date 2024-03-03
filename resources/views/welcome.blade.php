<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alejandro Martinez</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="antialiased" style="background-image: linear-gradient(to bottom, #67e8f9 , #d1fae5 );">
    <div id="dot-container" class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-20 lg:px-24 lg:py-0">
        <div class="bg-custom-blue lg:flex lg:justify-between lg:gap-4 ">
            <header class="lg:sticky lg:top-0 lg:flex lg:max-h-screen lg:w-1/2 lg:flex-col lg:justify-between lg:py-24 animate-enterAnimation">
                <div class="">
                    <h1 class="text-6xl font-bold text-sky-700  text-center ">Hi, I'm Alex!</h1>
                    <div class=" rounded-lg overflow-hidden">
                        <div class="p-4 text-center">
                            <div class="inline-block">
                                <img class="shadow-lg rounded-t-lg" src="{{ asset('images/alex.jpg') }}" alt="Placeholder" loading="lazy" width="240" height="240" decoding="async">
                                <h2 class="bg-sky-700 rounded-b-lg px-2 py-1 mx-auto block font-semibold text-white text-xl ">Full Stack Developer</h2>
                            </div>
                        </div>
                    </div>
                    <nav class="nav hidden lg:block" aria-label="In-page jump links">
                        <ul class="mt-8 flex items-center justify-center">
                            <li class="mr-5">
                                <a class="group flex items-center py-3 hover:text-hoverText hover:scale-110 transition ease-in-out " href="#about">
                                    <span id="about-link" class="text-sky-600 nav-text uppercase">About</span>
                                </a>
                            </li>
                            <li class="mr-5">
                                <a class="group flex items-center py-3 hover:text-hoverText hover:scale-110 transition ease-in-out " href="#experience">
                                    <span id="exp-link" class=" text-sky-600 nav-text uppercase">Experience</span>
                                </a>
                            </li>
                            <li class="mr-5">
                                <a class="group flex items-center py-3 hover:text-hoverText hover:scale-110 transition ease-in-out " href="#projects">
                                    <span id="projects-link" class="text-sky-600 nav-text uppercase">Projects</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <ul class="mt-8 flex items-center justify-center" aria-label="Social media">
                    <li class="mr-5">
                        <a class="block text-sky-700  hover:text-sky-400 hover:scale-110 transition ease-in-out " href="https://github.com/thedigialex" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)">
                            <span class="sr-only">GitHub</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 text-xs">
                        <a class="block text-sky-700 hover:text-sky-400 hover:scale-110 transition ease-in-out " href="https://www.linkedin.com/in/alejandro-martinez-10b5b0a8" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)">
                            <span class="sr-only">LinkedIn</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 text-xs">
                        <a class="block text-sky-700  hover:text-sky-400 hover:scale-110 transition ease-in-out " href="https://thedigialex.com" target="_blank" rel="noreferrer noopener" aria-label="My Website (opens in a new tab)">
                            <span class="sr-only">Website</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 16.057v-3.057h2.994c-.059 1.143-.212 2.24-.456 3.279-.823-.12-1.674-.188-2.538-.222zm1.957 2.162c-.499 1.33-1.159 2.497-1.957 3.456v-3.62c.666.028 1.319.081 1.957.164zm-1.957-7.219v-3.015c.868-.034 1.721-.103 2.548-.224.238 1.027.389 2.111.446 3.239h-2.994zm0-5.014v-3.661c.806.969 1.471 2.15 1.971 3.496-.642.084-1.3.137-1.971.165zm2.703-3.267c1.237.496 2.354 1.228 3.29 2.146-.642.234-1.311.442-2.019.607-.344-.992-.775-1.91-1.271-2.753zm-7.241 13.56c-.244-1.039-.398-2.136-.456-3.279h2.994v3.057c-.865.034-1.714.102-2.538.222zm2.538 1.776v3.62c-.798-.959-1.458-2.126-1.957-3.456.638-.083 1.291-.136 1.957-.164zm-2.994-7.055c.057-1.128.207-2.212.446-3.239.827.121 1.68.19 2.548.224v3.015h-2.994zm1.024-5.179c.5-1.346 1.165-2.527 1.97-3.496v3.661c-.671-.028-1.329-.081-1.97-.165zm-2.005-.35c-.708-.165-1.377-.373-2.018-.607.937-.918 2.053-1.65 3.29-2.146-.496.844-.927 1.762-1.272 2.753zm-.549 1.918c-.264 1.151-.434 2.36-.492 3.611h-3.933c.165-1.658.739-3.197 1.617-4.518.88.361 1.816.67 2.808.907zm.009 9.262c-.988.236-1.92.542-2.797.9-.89-1.328-1.471-2.879-1.637-4.551h3.934c.058 1.265.231 2.488.5 3.651zm.553 1.917c.342.976.768 1.881 1.257 2.712-1.223-.49-2.326-1.211-3.256-2.115.636-.229 1.299-.435 1.999-.597zm9.924 0c.7.163 1.362.367 1.999.597-.931.903-2.034 1.625-3.257 2.116.489-.832.915-1.737 1.258-2.713zm.553-1.917c.27-1.163.442-2.386.501-3.651h3.934c-.167 1.672-.748 3.223-1.638 4.551-.877-.358-1.81-.664-2.797-.9zm.501-5.651c-.058-1.251-.229-2.46-.492-3.611.992-.237 1.929-.546 2.809-.907.877 1.321 1.451 2.86 1.616 4.518h-3.933z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="block text-sky-700 hover:text-sky-400 hover:scale-110 transition ease-in-out " href="mailto:thedigialex@gmail.com" aria-label="Email">
                            <span class="sr-only">Email</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 6" fill="currentColor" class="h-12 w-12" aria-hidden="true">
                                <path d="m0 0h8v6h-8zm.75 .75v4.5h6.5v-4.5zM0 0l4 3 4-3v1l-4 3-4-3z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </header>
            <main id="content" class="pt-24 lg:w-1/2 lg:py-24 ">
                <section id="about" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24 section" aria-label="About me">
                    <h2 class="text-sky-700 font-bold uppercase pb-4 text-lg animate-fadeInFromLeft">About</h2>
                    <div class="p-4 animate-enterAnimation">
                        <p class="mb-4 text-lg text-sky-600">In 2014, I embarked on an academic journey at the <span class="text-sky-700 font-bold">University of Kentucky, majoring in Computer Science.</span> My academic pursuits were further enriched by minoring in Computer Engineering and Mathematics, a decision influenced by the significant overlap in coursework. My profound passion for programming was ignited when a favorite game of mine was discontinued, inspiring me to reconstruct it from scratch. This project was a pivotal moment in my career, laying the foundation for my future endeavors.</p>
                        <p class="mb-4 text-lg text-sky-600">Currently, I am dedicated to enhancing and maintaining client websites in my role. My career trajectory began as a Support Developer, quickly advancing to a Managerial position, and eventually evolving into a <span class="text-sky-700 font-bold">Full Web Developer role.</span> My commitment to professional growth is paralleled by my personal dedication to continuous learning. </p>
                        <p class="mb-4 text-lg text-sky-600">In my leisure time, I immerse myself in various projects, constantly seeking new opportunities to broaden my technical expertise and knowledge.</p>
                    </div>
                </section>
                <section id="experience" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24 section" aria-label="Work experience">
                    <h2 class="text-sky-700 font-bold uppercase pb-4 text-lg animate-fadeInFromLeft">Experience</h2>
                    <div>
                        <ol class="group/list">
                            <li class="mb-12">
                                <a href="https://elinkdesign.com/" target="_blank" rel="noreferrer noopener" aria-label="Web Developer at eLink Design (opens in a new tab)">
                                    <div class="group experience-div hover:scale-105 hover:bg-sky-200 transition duration-300">
                                        <header class="mb-2 mt-1 text-xs font-bold uppercase sm:col-span-2 text-sky-600">2022 — Present</header>
                                        <div class="sm:col-span-6">
                                            <h3 class="font-bold uppercase leading-snug">
                                                <span class="experience-title">Web Developer · eLink Design</span>
                                            </h3>
                                            <p class="mt-2 text-base leading-normal text-sky-600">Responsible for managing the software development lifecycle, from requirements to deployment, while prioritizing the development of advanced features for intuitive user experiences. I utilize frameworks such as Vue.js, WordPress, and Laravel to create scalable web applications. Additionally, I play a key role in enhancing website design, maintenance, SEO, and mobile/web development.</p>
                                            <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">PHP</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">SQL</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Laravel</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Vue</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">API Intergration</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-12">
                                <a href="https://www.intelliwire.net/" target="_blank" rel="noreferrer noopener" aria-label="Web Developer at eLink Design (opens in a new tab)">
                                    <div class="group experience-div hover:scale-105 hover:bg-sky-200 transition duration-300">
                                        <header class="mb-2 mt-1 text-xs font-bold uppercase sm:col-span-2 text-sky-600">2022 — Present</header>
                                        <div class="sm:col-span-6">
                                            <h3 class="font-bold uppercase leading-snug">
                                                <span class="experience-title">System Administrator · Intelliwire</span>
                                            </h3>
                                            <p class="mt-2 text-base leading-normal text-sky-600">Responsible for optimizing server infrastructure, ensuring optimal performance, reliability, and security across all hosted services. I tailor configurations to meet unique client needs, maximizing website efficiency. Intelliwire serves as a crucial partner to eLink Design, providing a robust hosting platform for their websites and offering a wide range of hosting solutions.</p>
                                            <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Ubuntu</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">cPanel</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Email</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">DNS</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Risk-Management</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-12">
                                <a href="https://elinkdesign.com/" target="_blank" rel="noreferrer noopener" aria-label="Web Developer at eLink Design (opens in a new tab)">
                                    <div class="group experience-div hover:scale-105 hover:bg-sky-200 transition duration-300">
                                        <header class="mb-2 mt-1 text-xs font-bold uppercase sm:col-span-2 text-sky-600">2022 — Present</header>
                                        <div class="sm:col-span-6">
                                            <h3 class="font-bold uppercase leading-snug">
                                                <span class="experience-title">Support Manager · eLink Design</span>
                                            </h3>
                                            <p class="mt-2 text-base leading-normal text-sky-600">Oversee customer support for new and ongoing projects, ensuring seamless handling of updates post-launch. Leading the support team, I leverage my technical expertise and leadership skills to effectively resolve customer issues. Collaborating with cross-functional teams, I continuously strive to improve and enhance the user experience.</p>
                                            <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Leadership</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Mentorship</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Prioritization</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Communication</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Adaptability</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ol>
                        <div class="mt-12">
                            <a class="leading-tight font-semibold text-sky-700 hover:text-sky-600" aria-label="View Full Resume" href="https://thedigialex.com/wp-content/uploads/2024/03/Resume.pdf">
                                <span>View Full Resume</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 inline-block h-4 w-4 shrink-0 -translate-y-px transition-transform group-hover:translate-x-2 group-focus-visible:translate-x-2 motion-reduce:transition-none" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
                <section id="projects" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24 section" aria-label="Selected projects">
                    <h2 class="text-sky-700 font-bold uppercase pb-4 text-lg animate-fadeInFromLeft">Projects</h2>
                    <div>
                        <ul class="group/list">
                            <li class="mb-12">
                                <a href="https://play.google.com/store/apps/details?id=digialex.digitalpet&hl=en&gl=US" target="_blank" rel="noreferrer noopener" aria-label="Google Play Link (opens in a new tab)">
                                    <div class="group experience-div hover:scale-105 hover:bg-sky-200 transition duration-300">
                                        <img class="mb-2 mt-1 sm:col-span-2 rounded" src="{{ asset('images/digital-pet-logo.png') }}" alt="Place holder" loading="lazy" width="200" height="48" decoding="async" data-nimg="1">
                                        <div class="sm:col-span-6">
                                            <h3 class="font-bold uppercase leading-snug">
                                                <span class="experience-title">Digital Pet</span>
                                            </h3>
                                            <p class="mt-2 text-base leading-normal text-sky-600">Digital Pet is a virtual pet app that allows users to take care of their own Digital Monster. With Digital Pet, users can choose from a variety of pets that evolve based on how a user cares for them. To keep their Digital Monster happy and healthy, users must feed them, play with them, and BATTLE with them! Users can also earn in-game currency by completing tasks, which they can then use to buy new items and accessories for their Digital Monster.</p>
                                            <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Java</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">XML</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Android Studio</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Play Console</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">FireBase</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-12">
                                <a href="https://play.google.com/store/apps/details?id=digialex.websitechecker&hl=en&gl=US" target="_blank" rel="noreferrer noopener" aria-label="Google Play Link (opens in a new tab)">
                                    <div class="group experience-div hover:scale-105 hover:bg-sky-200 transition duration-300">
                                        <img class="mb-2 mt-1 sm:col-span-2 rounded" src="{{ asset('images/website_logo.png') }}" alt="Place holder" loading="lazy" width="200" height="48" decoding="async" data-nimg="1">
                                        <div class="sm:col-span-6">
                                            <h3 class="font-bold uppercase leading-snug">
                                                <span class="experience-title">Website Checker</span>
                                            </h3>
                                            <p class="mt-2 text-base leading-normal text-sky-600">Website Checker, a powerful tool designed for effortless website analysis. With its user-friendly interface, users can input multiple website URLs to swiftly assess their response codes. But that’s not all – the app goes above and beyond by enabling users to integrate their Google Analytics key. This integration empowers users to comprehensively evaluate their website’s SEO performance, page speed, and accessibility. </p>
                                            <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Lighthouse API</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Google Console</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Lighthouse API</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">XML</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">SQLite</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-12">
                                <a href="https://recipe.thedigialex.net/login/?redirect_to=https%3A%2F%2Frecipe.thedigialex.net%2F" target="_blank" rel="noreferrer noopener" aria-label="Recipe Website Link (opens in a new tab)">
                                    <div class="group experience-div hover:scale-105 hover:bg-sky-200 transition duration-300">
                                        <img class="mb-2 mt-1 sm:col-span-2 rounded" src="{{ asset('images/recipe-book-site.png') }}" alt="Place holder" loading="lazy" width="200" height="48" decoding="async" data-nimg="1">
                                        <div class="sm:col-span-6">
                                            <h3 class="font-bold uppercase leading-snug">
                                                <span class="experience-title">Recipe Book</span>
                                            </h3>
                                            <p class="mt-2 text-base leading-normal text-sky-600">This WordPress site is a specialized platform to hold family recipes, featuring a robust user authentication system for secure access. It utilizes post type exclusively for recipes, ensuring a unique and organized presentation. Users can submit and modify their own recipes through an intuitive interface, and these submissions are displayed using custom templates. While the backend is managed through a contact form plugin connected with custom functions.</p>
                                            <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">PHP</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">JavaScript</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">SQL</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">Authentication</div>
                                                </li>
                                                <li class="mr-1.5 mt-2">
                                                    <div class="skill-badge">WordPress</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="mt-12">
                            <a class="leading-tight font-semibold text-sky-700 hover:text-sky-600" aria-label="View Projects" href="https://thedigialex.com/projects/">
                                <span>View More Projects</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 inline-block h-4 w-4 shrink-0 -translate-y-px transition-transform group-hover:translate-x-2 group-focus-visible:translate-x-2 motion-reduce:transition-none" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
                <footer class="max-w-md pb-16">
                    <p class="text-sky-600">&copy; 2024 <span class="font-semibold">TheDigiAlex</span></p>
                    <p class="text-sky-600">Hosted by <a href="https://thedigitalex.com">TheDigiAlex</a></p>
                </footer>
            </main>
        </div>
    </div>
</body>

</html>