<div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
	<header class="px-5 py-4 border-b border-gray-100">
			<h2 class="font-semibold text-gray-800">Jadwal Kajian</h2>
	</header>
	<div class="p-3">
			
			<!-- Table -->
			<div class="overflow-x-auto">
					<table class="table-auto w-full">
							<!-- Table header -->
							<thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
									<tr>
											<th class="p-2 whitespace-nowrap">
													<div class="font-semibold text-left">Ustadz</div>
											</th>
											<th class="p-2 whitespace-nowrap">
													<div class="font-semibold text-left">Judul</div>
											</th>
											<th class="p-2 whitespace-nowrap">
													<div class="font-semibold text-left">Waktu</div>
											</th>
									</tr>
							</thead>
							<!-- Table body -->
							<tbody class="text-sm divide-y divide-gray-100">
								@foreach ($kajian as $item)
									<tr>
											<td class="p-2 pl-4 whitespace-nowrap">
												<div class="font-medium text-gray-800">{{ $item->name }}</div>
											</td>
											<td class="p-2 whitespace-wrap">
													<div class="text-left">{{ $item->title }}</div>
											</td>
											<td class="p-2 whitespace-nowrap">
													<div class="text-left font-medium">{{ $item->label }}</div>
											</td>
									</tr>
								@endforeach
							</tbody>
					</table>
			
			</div>
	
	</div>
</div>