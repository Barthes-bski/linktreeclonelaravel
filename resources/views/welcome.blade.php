<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $seo->title }}</title>

        <!--- META -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />
        <meta property="og:type" content="siteweb" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all">
        <meta name="description" content="{{ $seo->description }}" />
        <meta name="author" content="{{ $seo->author }}" />


        <meta property="og:site_name" content="{{ $seo->title }}" />
        <meta property="og:title" content="{{ $seo->title }}" />
        <meta property="og:description" content="{{ $seo->description }}" />
        <meta property="og:url" content="{{ $seo->url }}" />

        <meta property="og:image" content="{{ env('APP_URL').$bio->avatar }}" />
        <meta property="og:image:secure_url" content="{{ env('APP_URL').$bio->avatar }}" />

        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="400" />
        <link rel="icon" type="image/png" href="{{ env('APP_URL').$bio->avatar }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-600">
        <div class="mx-5">
            <div class="">
              <!-- User Profile Picture -->
              <div class="max-w-sm h-auto mx-auto my-20 rounded-sm overflow-hidden shadow-lg bg-mirage-500">
                <img class="object-cover rounded-full h-48 w-48 mx-auto mt-8 p-1 border-4 border-white"
                     src="{{ $bio->avatar }}"
                     alt="El Rincon de Isma" />
                <div class="px-6 py-4 text-white">
                  <div class="flex flex-col">
                        <a href="{{ $seo->url }}" target="_blank">
                            <div class="font-bold text-xl text-center hover:cursor-pointer">{{ $bio->title }}</div>
                        </a>

                    <p class="text-sm text-center">{{ $bio->description }}</p>
                  </div>
                </div>
                <!-- Social Media Links -->
                  @foreach($socials as $social)
                      @if($social->url)
                          <div class="flex flex-col mx-auto text-mirage-500">
                              <a href="{{ $social->url }}" target="__blank"
                                 class="flex flex-row mx-auto my-2 {{$social->color}} w-3/4 text-white py-2 pl-2 rounded-md  text-xl">
                                  <div class="flex flex-row mx-auto">
                                      {!! Blade::render($social->icon) !!}
                                      <h4 class="my-auto font-semibold mx-5">{{ $social->social }}</h4>
                                  </div>
                              </a>
                          </div>
                      @endif
                  @endforeach

                <!-- Footer -->
                <div class="text-white text-xs text-center mt-12 mb-4">Built by <a href="https://elrincondeisma.com" target="__blank" class="border-b-purple-500 border-b-2"> ElRinconDeIsma</a></div>
              </div>
            </div>
          </div>

    </body>
</html>
