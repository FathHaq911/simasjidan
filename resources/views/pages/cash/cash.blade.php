<x-app-layout>
	<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
			
			<!-- Line chart (Acme Plus) -->
			<div class="flex gap-5 mb-10">
				@include('components.cash.cash-card-01')
				@include('components.cash.cash-card-02')
				@include('components.cash.cash-card-03')
			</div>
			<!-- Dashboard actions -->
			<div class="sm:flex sm:justify-end sm:items-center mb-8">

					<!-- Right: Actions -->
					<div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

							<!-- Datepicker built with flatpickr -->
							<x-datepicker />

							<!-- Add Cash button -->
							<x-modal-add-debit-cash />
							<x-modal-add-kredit-cash />
							
					</div>

			</div>
			
			<!-- Cards -->

			<div class=" bg-white shadow-lg rounded-sm border border-slate-200">
				<header class="px-5 py-4 border-b border-slate-100">
						<h2 class="font-semibold text-slate-800">Uang Kas Masjid</h2>
				</header>
				<div class="p-3">
			
						<!-- Table -->
						<div class="overflow-x-auto">
								<table class="table-auto w-full">
										<!-- Table header -->
										<thead class="text-xs lg:text-sm uppercase text-slate-400 bg-slate-50 rounded-sm">
												<tr>
														<th class="p-2">
																<div class="font-semibold text-left">Nama</div>
														</th>
														<th class="p-2 w-44 lg:w-60">
																<div class="font-semibold text-center">Pemasukan</div>
														</th>
														<th class="p-2 w-44 lg:w-60">
																<div class="font-semibold text-center">Pengeluaran</div>
														</th>
														<th class="p-2 w-60 lg:w-96">
																<div class="font-semibold text-center">Notes</div>
														</th>
														<th class="p-2 w-44 lg:w-60">
															<div class="font-semibold text-center">Tanggal</div>
													</th>
												</tr>
										</thead>
										<!-- Table body -->
										<tbody class="text-sm lg:text-md font-medium divide-y divide-slate-100">
												<!-- Row -->
												@foreach ($cash as $item)
												<tr>
													<td class="p-2">
															<div class="text-slate-800">{{ $item->name }}</div>
													</td>
													<td class="p-2 pr-4 w-44 lg:w-60" >
														@if ($item->debit > 0)
															<div class="text-center text-emerald-500 flex justify-between tracking-widest" ><span>Rp</span> <div id="ribu">{{ number_format($item->debit, 2, ",", ".") }}</div></div>
														@else
														<div class="text-center" >-</div>
														@endif
													</td>
													<td class="p-2 pl-4 w-44 lg:w-60" >
														@if ($item->kredit > 0)
															<div class="text-center text-rose-500 flex justify-between tracking-widest" ><span>Rp</span> <div id="ribu">{{ number_format($item->kredit, 2, ",", ".") }}</div></div>
														@else
														<div class="text-center" >-</div>
														@endif
													</td>
													<td class="p-2 w-60 lg:w-96">
															<div class="pl-4">{{ $item->note }}</div>
													</td>
													<td class="p-2 pl-4 w-44 lg:w-60">
														<div class="text-center">{{ $item->created_at }}</div>
												</td>
											</tr>
												@endforeach
												
										</tbody>
								</table>
			
						</div>
				</div>
			</div>

	</div>

	<script type="text/javascript">

		// /* Format Ribuan*/
		// let format_ribuan = document.querySelectorAll("ribu");
		// format_ribuan

		/* Format Ribuan di input*/
		let input_ribuan = document.getElementById("uang");
    input_ribuan.addEventListener('keyup', function(e)
    {
        input_ribuan.value = uang(this.value);
    });
    
    /* Fungsi Format Ribuan */
    function uang(angka, prefix)
    {
        let number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            uang     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            uang += separator + ribuan.join('.');
        }
        
        return uang;
    }
	</script>
</x-app-layout>
