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
            <div class="font-roboto flex flex-col gap-4 text-sm">
              <p>
                <span class="font-newsreader italic text-base">Passionate</span> about collaborating with teams to implement and document complex issues through software systems.
              </p>
              <p>
                A problem solver at heart. I learn, observe, and systemize solutions.
              </p>
              <p class="font-newsreader text-base">Turning challenges into innovation opportunities.</p>
            </div>

            <div class="flex flex-col justify-between gap-4">
              <div>
                  <h2 class="text-xs text-slate-500">Work Projects</h2>
                  <div class="grid md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 gap-3 text-xs">
                    @foreach ($workProjects as $project)
                        <x-project-card :project="$project"/>
                    @endforeach
                  </div>
              </div>

              <div>
                  <h2 class="text-xs text-slate-500">Personal Projects</h2>
                  <div class="grid md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 gap-3 text-xs">
                    @foreach ($personalProjects as $project)
                        <x-project-card :$project />
                    @endforeach
                  </div>
              </div>

              <div>
                  <h2 class="text-xs text-slate-500">Writing</h2>
                  <div class="grid md:grid-cols-2 sm:grid-cols-1 xs:grid-cols-1 gap-3 text-xs">
                    @foreach ($writings as $project)
                        <x-project-card :$project />
                    @endforeach
                  </div>
              </div>
            </div>

            <div class="flex flex-col gap-4">
              <h2 class="font-inter text-sm">About me.</h2>
              <p class="font-roboto text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor eros nec enim maximus, a malesuada nisi aliquet. Duis eu enim arcu. Morbi at lacinia nisl. Mauris ac dapibus lacus. Maecenas facilisis odio lacus, sagittis dictum mauris pellentesque a. Quisque sit amet dapibus magna, ut venenatis enim. Mauris aliquam eget nunc ut vehicula. Quisque quis risus elementum, egestas diam eu, molestie justo.
              </p>
              <p class="font-roboto text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor eros nec enim maximus, a malesuada nisi aliquet. Duis eu enim arcu. Morbi at lacinia nisl. Mauris ac dapibus lacus. Maecenas facilisis odio lacus, sagittis dictum mauris pellentesque a. Quisque sit amet dapibus magna, ut venenatis enim. Mauris aliquam eget nunc ut vehicula. Quisque quis risus elementum, egestas diam eu, molestie justo.
              </p>
            </div>

            <div class="flex flex-col gap-4">
              <h2 class="${inter400.class} text-sm">Contact Me.</h2>
              <p class="font-roboto text-sm">Reach me at <a class="underline" href="https://www.linkedin.com/in/dominic-henry-379404190/">@Dominic Henry</a> or <a class="underline" href="mailto:dominichenrywork@hotmail.com">dominichenrywork@hotmail.com</a>.</p>
            </div>

          </div>
        </div>
    </body>
</html>
