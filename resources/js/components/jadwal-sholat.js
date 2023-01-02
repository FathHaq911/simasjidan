import fetch from 'node-fetch';

const jadwalSholat = () => {

	const imsak   = document.getElementById('imsak');
  const subuh   = document.getElementById('subuh');
  const terbit  = document.getElementById('terbit');
  const dzuhur  = document.getElementById('dzuhur');
  const ashar   = document.getElementById('ashar');
  const isya    = document.getElementById('isya');

	// Waktu sekarang
	const y = new Date().getFullYear()
	const m = new Date().getMonth()
	const d = new Date().getDate()

	// Jadwal Sholat 
	fetch(`https://api.myquran.com/v1/sholat/jadwal/1204/${y}/${m}`)
		.then(a => {
			return a.json();
		})
		
		.then(result => {
			
			const tgl 				= result.data.jadwal[d-1].tanggal;
			const data_imsak 	= result.data.jadwal[d-1].imsak;
			const data_subuh 	= result.data.jadwal[d-1].subuh;
			const data_terbit = result.data.jadwal[d-1].terbit;
			const data_dzuhur = result.data.jadwal[d-1].dzuhur;
			const data_ashar 	= result.data.jadwal[d-1].ashar;
			const data_maghrib= result.data.jadwal[d-1].maghrib;
			const data_isya 	= result.data.jadwal[d-1].isya;

			setInterval(() => {
				
			}, 1000*60*10);

		})
		.catch(error => {
			console.log('elor pak');
		});


}

jadwalSholat();


// fetch(`https://api.myquran.com/v1/sholat/jadwal/1204/${y}/${m}`)
// 		.then(a => {
// 			return a.json();
// 		})
// 		.then(data => console.log(data))
// 		.catch(error => {
// 			console.log('elor pak')
// 		});