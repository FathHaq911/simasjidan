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

	<x-guest.navbar/>

	<main>

		<section class="w-screen h-full flex items-center justify-center bg-[url('/public/images/background.jpg')] bg-cover backdrop:backdrop-blur-3xl">
			<div class="jam_analog font-poppins font-medium text-lg">
				<div class="xxx">
					<div class="jarum jarum_detik"></div>
					<div class="jarum jarum_menit"></div>
					<div class="jarum jarum_jam"></div>
					<div class="lingkaran_tengah"></div>
					<p>01</p>
					<p>02</p>
					<p>03</p>
					<p>04</p>
					<p>05</p>
					<p>06</p>
					<p>07</p>
					<p>08</p>
					<p>09</p>
					<p>10</p>
					<p>11</p>
					<p>12</p>
				</div>
			</div>
			
	
			<!-- Jadwal Sholat -->
			<div class="w-1/2">
				<div class="jam_digital z-40 flex flex-col">
					<p id="jam" class="text-4xl font-semibold text-slate-800"></p>
					<p>{{ $jadwal[$d-1]->tanggal }}</p>
				</div>
				<div class="flex flex-wrap items-center justify-center px-10">
					
					<div class="card text-center hover:bg-[url('/public/images/jadwal/subuh.jpg')] ">
						<span class={{ $ }}>Sholat Selanjutnya</span>
						<h1 class="card-header" id="subuh">Subuh</h1>
						<div class="card-content">{{ $jadwal[$d-1]->subuh }}</div>
					</div>
					<div class="card text-center hover:bg-[url('/public/images/jadwal/syuruq.jpg')]">
						<span class="card-notiv">Sholat Selanjutnya</span>
						<h1 class="card-header" id="syuruq">Syuruq</h1>
						<div class="card-content">{{ $jadwal[$d-1]->terbit }}</div>
					</div>
					<div class="card text-center hover:bg-[url('/public/images/jadwal/dzuhur.jpg')] bg-right">
						<span class="card-notiv">Sholat Selanjutnya</span>
						<h1 class="card-header" id="dzuhur">Dzuhur</h1>
						<div class="card-content">{{ $jadwal[$d-1]->dzuhur }}</div>
					</div>
					<div class="card text-center hover:bg-[url('/public/images/jadwal/ashar.jpg')]">
						<span class="card-notiv">Sholat Selanjutnya</span>
						<h1 class="card-header" id="ashar">Ashar</h1>
						<div class="card-content">{{ $jadwal[$d-1]->ashar }}</div>
					</div>
					<div class="card text-center hover:bg-[url('/public/images/jadwal/maghrib.jpeg')]">
						<span class="card-notiv">Sholat Selanjutnya</span>
						<h1 class="card-header" id="maghrib">Maghrib</h1>
						<div class="card-content">{{ $jadwal[$d-1]->maghrib }}</div>
					</div>
					<div class="card text-center hover:bg-[url('/public/images/jadwal/isya.jpg')]">
						<span class="card-notiv">Sholat Selanjutnya</span>
						<h1 class="card-header" id="isya">Isya'</h1>
						<div class="card-content">{{ $jadwal[$d-1]->isya }}</div>
					</div>
				</div>
				
			</div>
		</section>

		<section>

		</section>
			
	</main>
	
	<!-- Jam Analog -->
	<script type="text/javascript">
		const secondHand = document.querySelector('.jarum_detik');
		const minuteHand = document.querySelector('.jarum_menit');
		const jarum_jam = document.querySelector('.jarum_jam');
	 
		function setDate(){
			const now = new Date();
	 
			const seconds = now.getSeconds();
			const secondsDegrees = ((seconds / 60) * 360) + 90;
			secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
			if (secondsDegrees === 90) {
				secondHand.style.transition = 'none';
			} else if (secondsDegrees >= 91) {
				secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
			}

			const minutes = now.getMinutes();
			const minutesDegrees = ((minutes / 60) * 360) + 90;
			minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

			const hours = now.getHours();
			const hoursDegrees = ((hours / 12) * 360) + 90;
			jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
		}

		setInterval(setDate, 1000)
	</script>

	<!-- Jam Digital -->
	<script type="text/javascript">
		window.onload = function() { jam(); }

		function jam() {
				var e = document.getElementById('jam'),
				d = new Date(), h, m, s;
				h = d.getHours();
				m = set(d.getMinutes());
				s = set(d.getSeconds());

				e.innerHTML = h +' : '+ m +' : '+ s;

				setTimeout('jam()', 1000);
		}

		function set(e) {
				e = e < 10 ? '0'+ e : e;
				return e;
		}
	</script>

</body>
</html>