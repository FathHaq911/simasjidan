<div class="flex flex-wrap items-center justify-center px-10">
					
	<div class="card text-center hover:bg-[url('/public/images/jadwal/subuh.jpg')] {{ $h <= $waktu[0] || $h >= $waktu[5] ? ( $h == $waktu[0] && $i >= $waktu[6] ? '': 'card-active1') : ''}}">
		<span class='{{ $h <= $waktu[0] || $h >= $waktu[5] ? ($i >= $waktu[6]  && $h != $waktu[0] ? '' : 'hidden') : 'hidden'; }} card-notif'>Sholat Selanjutnya</span>
		<div class="card-body">
			<h1 class="card-header" id="subuh">Subuh</h1>	
			<div class="card-content">{{ $jadwal[$d-1]->subuh }}</div>
		</div>
	</div>

	<div class="card text-center hover:bg-[url('/public/images/jadwal/terbit.jpg')] {{ $h <= $waktu[1] && $h >= $waktu[0] ? ( $h == $waktu[1] && $i >= $waktu[7] ? '': 'card-active2') : ''}}">
		<span class='{{ $h <= $waktu[1] && $h >= $waktu[0] ? ($i >= $waktu[7]  && $h != $waktu[1] ? '' : 'hidden') : 'hidden'; }} card-notif' >Sholat Selanjutnya</span>
		<div class="card-body">
			<h1 class="card-header" id="terbit">Terbit</h1>
			<div class="card-content">{{ $jadwal[$d-1]->terbit }}</div>
		</div>
	</div>

	<div class="card text-center hover:bg-[url('/public/images/jadwal/dzuhur.jpg')] {{ $h <= $waktu[2] && $h >= $waktu[1] ? ( $h == $waktu[2] && $i >= $waktu[8] ? '': 'card-active3') : ''}}">
		<span class='{{ $h <= $waktu[2] && $h >= $waktu[1] ? ($i >= $waktu[8] && $h != $waktu[2] ? 'oke' : 'hidden gaje') : 'hidden'; }} card-notif' >Sholat Selanjutnya</span>
		<div class="card-body">
			<h1 class="card-header" id="dzuhur">Dzuhur</h1>
			<div class="card-content">{{ $jadwal[$d-1]->dzuhur }}</div>
		</div>
	</div>

	<div class="card text-center hover:bg-[url('/public/images/jadwal/ashar.jpg')] {{ $h <= $waktu[3] && $h >= $waktu[2] ? ( $h == $waktu[3] && $i >= $waktu[9] ? '': 'card-active4') : ''}}">
		<span class='{{ $h <= $waktu[3] && $h >= $waktu[2] ? ($i >= $waktu[9] && $h != $waktu[3] ? '' : 'hidden') : 'hidden'; }} card-notif' >Sholat Selanjutnya</span>
		<div class="card-body">
			<h1 class="card-header" id="ashar">Ashar</h1>
			<div class="card-content">{{ $jadwal[$d-1]->ashar }}</div>
		</div>
	</div>

	<div class="card text-center hover:bg-[url('/public/images/jadwal/maghrib.jpeg')] {{ $h <= $waktu[4] && $h >= $waktu[3] ? ( $h == $waktu[4] && $i >= $waktu[10] ? '': 'card-active5') : ' m-40'}}">
		<span class='{{ $h <= $waktu[4] && $h >= $waktu[3] ? ($i >= $waktu[10] && $h != $waktu[4]  ? 'gaje' : 'hidden') : 'hidden'; }} card-notif' >Sholat Selanjutnya</span>
		<div class="card-body">
			<h1 class="card-header" id="maghrib">Maghrib</h1>
			<div class="card-content">{{ $jadwal[$d-1]->maghrib ." | " . $h . $i . $waktu[10]}} </div>
		</div>
	</div>

	<div class="card text-center hover:bg-[url('/public/images/jadwal/isya.jpg')] {{ $h <= $waktu[5] && $h >= $waktu[4] ? ( $h == $waktu[5] && $i >= $waktu[11] ? '': 'card-active6') : ''}}">
		<span class='{{ $h <= $waktu[5] && $h >= $waktu[4] ? ($h != $waktu[5] && $i >= $waktu[11] ? '' : 'hidden') : 'hidden'; }} card-notif' >Sholat Selanjutnya</span>
		<div class="card-body">
			<h1 class="card-header" id="isya">Isya'</h1>
			<div class="card-content">{{ $jadwal[$d-1]->isya }}</div>
		</div>
	</div>
</div>