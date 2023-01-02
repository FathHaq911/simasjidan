<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ingfo Masjid</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>

	@include('components.guest.guest-navbar')

	<main>

		<section class="w-screen h-full flex items-center justify-center bg-[url('/public/images/background.jpg')] bg-cover backdrop:backdrop-blur-3xl">

			<x-guest.guest-analog/>
			
			<!-- Jadwal Sholat -->
			<div class="w-1/2">

				@include('components.guest.guest-digital')
				@include('components.guest.guest-jadwal')

			</div>
		</section>
			
	</main>
	
</body>
</html>