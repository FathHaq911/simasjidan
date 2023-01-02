	<div class="jam_digital z-40 flex flex-col">
		<p id="jam" class="text-8xl font-semibold text-slate-800"></p>
		<p>{{ $jadwal[$d-1]->tanggal }}</p>
	</div>
	
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