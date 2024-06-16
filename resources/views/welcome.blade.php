<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dominic Henry | Software Engineer</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="flex flex-wrap h-100 justify-center">

        <div class="flex flex-col gap-10 w-3/4 xl:w-1/2 py-24">

            <h1 class="font-inter text-base">Dominic A. Henry</h1>
            <div class="font-roboto flex flex-col gap-4 text-xs">
                <p>
                    <span class="font-newsreader italic">Passionate</span> about solving complex issues through software engineering. A problem solver at heart. I learn, observe, and create systems.
                </p>
            </div>

            <!-- Projects Section -->
            <div class="flex flex-col justify-between gap-4">
                <x-project-accordion section-title="Work Projects" :projects="$workProjects" />
                <x-project-accordion section-title="Personal Projects" :projects="$personalProjects" />
                <x-project-accordion section-title="Writing" :projects="$writings" />
            </div>

            <div class="flex flex-col gap-4">
                <h2 class="font-inter">About me.</h2>
                <div class="flex gap-6 text-xs font-roboto">
                    <div class="flex flex-col gap-4">
                        <p>
                            I'm a passionate Software Engineer with a Bachelor's degree in Computer Science from the University of the West Indies, Mona. I thrive in start-up and small company environments, where I can contribute to innovative and dynamic projects.
                        </p>

                        <p>
                            Outside of work, I'm a fitness enthusiast and hybrid athlete who loves hard challenges. I continuously seek to push my physical and mental limits.
                        </p>

                        <p>
                            Whether it's solving complex coding problems or pushing my physical limits, I approach every challenge with determination. This combination of technical expertise and a drive for personal growth defines who I am and fuels my ambition.
                        </p>
                    </div>

                    <div class="flex justify-center">
                        <img src="{{ url('headshot_image.jpeg') }}" class="w-96" />
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <h2 class="${inter400.class}">Contact Me.</h2>

                <p class="font-roboto text-xs">
                    Reach me at <a class="underline" href="https://www.linkedin.com/in/dominic-henry-379404190/">@Dominic Henry</a> on LinkedIn or <a class="underline" href="mailto:dominichenrywork@hotmail.com">dominichenrywork@hotmail.com</a>.
                </p>

                <p class="font-roboto text-xs">
                    You can also follow on X (formerly Twitter) <a class="underline" href="https://x.com/dominic_a_henry">@dominic_a_henry</a> for updates on what I’m currently working on.
                </p>
            </div>

        </div>
    </div>

    <script>
        const project_sections = document.querySelectorAll(".project_section .project_section_header");
        project_sections.forEach(project_section => {
            project_section.addEventListener('click', (e) => {
                project_sections.forEach((el) => {
                    if(e.target.parentElement != el.parentElement) {
                        el.parentElement.classList.remove('active');
                    }
                });
                e.target.parentElement.classList.toggle('active');
            });
        })
    </script>
</body>

</html>
