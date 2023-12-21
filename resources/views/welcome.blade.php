<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alejandro Martinez</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li,
        a {
            opacity: 0.925;
        }

        /* Default styles for the div */
    </style>
</head>

<body class="antialiased" style="background-image: linear-gradient(to bottom, #B4FEE7, #FEE7B4);">
    <div class="mx-auto min-h-screen max-w-screen-xl px-6 py-12 font-sans md:px-12 md:py-20 lg:px-24 lg:py-0">
        <div class="lg:flex lg:justify-between lg:gap-4">
            <header class="lg:sticky lg:top-0 lg:flex lg:max-h-screen lg:w-1/2 lg:flex-col lg:justify-between lg:py-24">
                <div>
                    <h1 class="text-4xl font-bold sm:text-5xl">Alejandro Martinez</h1>
                    <h2 class="mt-3 text-lg sm:text-xl">Full Stack Developer</h2>
                    <p class="mt-4 max-w-xs ">I figure shit out.</p>
                    <nav class="nav hidden lg:block" aria-label="In-page jump links">
                        <ul class="mt-16 w-max">
                            <li>
                                <a class="group flex items-center py-3" href="#about">
                                    <span class="nav-text text-xs font-bold uppercase">About</span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex items-center py-3" href="#experience">
                                    <span class="nav-text text-xs font-bold uppercase">Experience</span>
                                </a>
                            </li>
                            <li>
                                <a class="group flex items-center py-3 active" href="#projects">
                                    <span class="nav-text text-xs font-bold uppercase">Projects</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <ul class="ml-1 mt-8 flex items-center" aria-label="Social media">
                    <li class="mr-5 text-xs">
                        <a class="block hover:text-slate-200" href="https://github.com/thedigialex" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)">
                            <span class="sr-only">GitHub</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 text-xs">
                        <a class="block hover:text-slate-200" href="https://thedigialex.com" target="_blank" rel="noreferrer noopener" aria-label="My Website (opens in a new tab)">
                            <span class="sr-only">Website</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 16.057v-3.057h2.994c-.059 1.143-.212 2.24-.456 3.279-.823-.12-1.674-.188-2.538-.222zm1.957 2.162c-.499 1.33-1.159 2.497-1.957 3.456v-3.62c.666.028 1.319.081 1.957.164zm-1.957-7.219v-3.015c.868-.034 1.721-.103 2.548-.224.238 1.027.389 2.111.446 3.239h-2.994zm0-5.014v-3.661c.806.969 1.471 2.15 1.971 3.496-.642.084-1.3.137-1.971.165zm2.703-3.267c1.237.496 2.354 1.228 3.29 2.146-.642.234-1.311.442-2.019.607-.344-.992-.775-1.91-1.271-2.753zm-7.241 13.56c-.244-1.039-.398-2.136-.456-3.279h2.994v3.057c-.865.034-1.714.102-2.538.222zm2.538 1.776v3.62c-.798-.959-1.458-2.126-1.957-3.456.638-.083 1.291-.136 1.957-.164zm-2.994-7.055c.057-1.128.207-2.212.446-3.239.827.121 1.68.19 2.548.224v3.015h-2.994zm1.024-5.179c.5-1.346 1.165-2.527 1.97-3.496v3.661c-.671-.028-1.329-.081-1.97-.165zm-2.005-.35c-.708-.165-1.377-.373-2.018-.607.937-.918 2.053-1.65 3.29-2.146-.496.844-.927 1.762-1.272 2.753zm-.549 1.918c-.264 1.151-.434 2.36-.492 3.611h-3.933c.165-1.658.739-3.197 1.617-4.518.88.361 1.816.67 2.808.907zm.009 9.262c-.988.236-1.92.542-2.797.9-.89-1.328-1.471-2.879-1.637-4.551h3.934c.058 1.265.231 2.488.5 3.651zm.553 1.917c.342.976.768 1.881 1.257 2.712-1.223-.49-2.326-1.211-3.256-2.115.636-.229 1.299-.435 1.999-.597zm9.924 0c.7.163 1.362.367 1.999.597-.931.903-2.034 1.625-3.257 2.116.489-.832.915-1.737 1.258-2.713zm.553-1.917c.27-1.163.442-2.386.501-3.651h3.934c-.167 1.672-.748 3.223-1.638 4.551-.877-.358-1.81-.664-2.797-.9zm.501-5.651c-.058-1.251-.229-2.46-.492-3.611.992-.237 1.929-.546 2.809-.907.877 1.321 1.451 2.86 1.616 4.518h-3.933z" />
                            </svg>
                        </a>
                    </li>
                    <li class="mr-5 text-xs">
                        <a class="block hover:text-slate-200" href="https://www.linkedin.com/in/alejandro-martinez-10b5b0a8" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)">
                            <span class="sr-only">LinkedIn</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6" aria-hidden="true">
                                <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </header>
            <main id="content" class="pt-24 lg:w-1/2 lg:py-24">
                <section id="about" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="About me">
                    <h2 class=" font-bold uppercase pb-4">About</h2>
                    <div>
                        <p class="mb-4">In 2014, I embarked on an academic journey at the University of Kentucky, majoring in Computer Science. My academic pursuits were further enriched by minoring in Computer Engineering and Mathematics, a decision influenced by the significant overlap in coursework. My profound passion for programming was ignited when a favorite game of mine was discontinued, inspiring me to reconstruct it from scratch. This project was a pivotal moment in my career, laying the foundation for my future endeavors.</p>
                        <p class="mb-4">Currently, I am dedicated to enhancing and maintaining client websites in my role. My career trajectory began as a Support Developer, quickly advancing to a Managerial position, and eventually evolving into a Full Web Developer role. My commitment to professional growth is paralleled by my personal dedication to continuous learning. </p>
                        <p class="mb-4">In my leisure time, I immerse myself in various projects, constantly seeking new opportunities to broaden my technical expertise and knowledge.</p>
                    </div>
                </section>
                <section id="experience" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="Work experience">
                    <h2 class=" font-bold uppercase pb-4">Experience</h2>
                    <div>
                        <ol class="group/list">
                            <li class="mb-12">
                                <div class="group relative grid pb-1 sm:grid-cols-8 sm:gap-8 md:gap-4 p-4 hover-div bg-transparent rounded-md cursor-pointer transition duration-300 ease-in-out hover:bg-gray-500 hover:bg-opacity-50">
                                    <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase sm:col-span-2" aria-label="2018 to Present">2022 — Present</header>
                                    <div class="z-10 sm:col-span-6">
                                        <h3 class="font-medium leading-snug">
                                            <div>
                                                <a href="https://elinkdesign.com/" target="_blank" rel="noreferrer noopener" aria-label="Web Developer at eLink Design (opens in a new tab)">
                                                    <span>Web Developer · eLink Design
                                                    </span>
                                                </a>
                                            </div>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">In my role as a Mobile/Web Application Developer, I have been dedicated to delivering high-quality, robust production code for a diverse portfolio of projects. My work serves a wide range of esteemed clients, potentially including prestigious pharacmacy stores, healthcare companies, and impactful non-profits.</p>
                                        <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">
                                                    PHP
                                                </div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">Vue</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">Symfony</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">React</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">Bootstrap</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">Doctrine</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex items-center bg-gray-300 rounded-md px-3 py-1 text-xs font-medium text-blue-500">WordPress</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div class="group relative grid pb-1 sm:grid-cols-8 sm:gap-8 md:gap-4 ">
                                    <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase sm:col-span-2" aria-label="2018 to Present">2022 — Present</header>
                                    <div class="z-10 sm:col-span-6">
                                        <h3 class="font-medium leading-snug">
                                            <div>
                                                <a href="https://elinkdesign.com/" target="_blank" rel="noreferrer noopener" aria-label="Web Developer at eLink Design (opens in a new tab)">
                                                    <span>Support Manager · eLink Design
                                                    </span>
                                                </a>
                                            </div>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">My responsibilities will extend beyond mere technical support, as I will take on a leadership role within the support department. This will involve closely collaborating with team members, sharing knowledge, and offering mentorship to foster a dynamic and productive work environment. Leveraging my technical expertise in areas such as CMS, SEO, and website maintenance, along with my familiarity with web development languages like HTML, CSS, and JavaScript, I will ensure the effective resolution of client issues and the continuous improvement of our support services.</p>
                                        <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Responsive</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Maintenance</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Hosting</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Prioritization</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Empathy</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Mentorship</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Risk-Management</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-12">
                                <div class="group relative grid pb-1 sm:grid-cols-8 sm:gap-8 md:gap-4 ">
                                    <header class="z-10 mb-2 mt-1 text-xs font-semibold uppercase sm:col-span-2" aria-label="2018 to Present">2022 — October 2022</header>
                                    <div class="z-10 sm:col-span-6">
                                        <h3 class="font-medium leading-snug">
                                            <div>
                                                <a href="https://elinkdesign.com/" target="_blank" rel="noreferrer noopener" aria-label="Web Developer at eLink Design (opens in a new tab)">
                                                    <span>Support Developer · eLink Design
                                                    </span>
                                                </a>
                                            </div>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">As a Support Developer, my responsibilities will encompass a blend of technical proficiency and collaborative problem-solving. I will actively engage in diagnosing and resolving complex technical issues, leveraging my expertise in web development languages such as HTML, CSS, JavaScript, and PHP. My role will be crucial in maintaining the functionality and performance of web applications, ensuring responsiveness and cross-browser compatibility.</p>
                                        <ul class="mt-2 flex flex-wrap" aria-label="Technologies used">
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Debugging</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Communication</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Collaboration</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">API Integration</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Security</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">Adaptability</div>
                                            </li>
                                            <li class="mr-1.5 mt-2">
                                                <div class="flex px-3 py-1 text-xs font-medium">User Experience</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        <div class="mt-12">
                            <a class="leading-tight font-semibold" aria-label="View Full Resume" href="https://thedigialex.com/wp-content/uploads/2023/12/Resume.pdf">
                                <span>View Full Resume</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 inline-block h-4 w-4 shrink-0 -translate-y-px transition-transform group-hover:translate-x-2 group-focus-visible:translate-x-2 motion-reduce:transition-none" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
                <section id="projects" class="mb-16 scroll-mt-16 md:mb-24 lg:mb-36 lg:scroll-mt-24" aria-label="Selected projects">
                    <h2 class=" font-bold uppercase pb-4">Projects</h2>
                    <div>
                        <ul class="group/list">
                            <li class="mb-12">
                                <div class="group relative grid gap-4 pb-1 transition-all sm:grid-cols-8 sm:gap-8 md:gap-4 lg:hover:!opacity-100 lg:group-hover/list:opacity-50">
                                    <div class="z-10 sm:order-2 sm:col-span-6">
                                        <h3>
                                            <a class="inline-flex items-baseline font-medium leading-tight" href="https://google.com" target="_blank" aria-label="Project 1 (opens in a new tab)">
                                                <span>Project · 1</span>
                                            </a>
                                        </h3>
                                        <p class="mt-2 text-sm leading-normal">Project details</p>
                                    </div>
                                    <img src="{{ asset('images/dev_site_logo.png') }}" alt="Place holder" loading="lazy" width="200" height="48" decoding="async" data-nimg="1">
                                </div>
                            </li>

                        </ul>
                        <div class="mt-12">
                            <a class="leading-tight font-semibold" aria-label="View Projects" href="https://thedigialex.com/projects/">
                                <span>View Projects</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 inline-block h-4 w-4 shrink-0 -translate-y-px transition-transform group-hover:translate-x-2 group-focus-visible:translate-x-2 motion-reduce:transition-none" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </section>
                <footer class="max-w-md pb-16 text-sm text-slate-500 sm:pb-0">
                    <p>Laravel project dockerize running on a self hosted server styled using tailwind.</p>
                </footer>
            </main>
        </div>
    </div>
</body>

</html>