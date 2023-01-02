<x-app-layout>
	<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
			
			<!-- Dashboard actions -->
			<div class="sm:flex sm:justify-end sm:items-center mb-8">

					<!-- Right: Actions -->
					<div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

							<!-- Datepicker built with flatpickr -->
							<x-datepicker />

							<!-- Add Cash button -->
							<x-modal-add-kajian />
							
					</div>

			</div>
			
			<!-- Cards -->

			<div class=" bg-white shadow-lg rounded-sm border border-slate-200">
				<header class="px-5 py-4 border-b border-slate-100">
						<h2 class="font-semibold text-slate-800">Jadwal kajian</h2>
				</header>
				<div class="p-3">
			
						<!-- Table -->
						<div class="overflow-x-auto">
								<table class="table-auto w-full">
										<!-- Table header -->
										<thead class="text-xs lg:text-sm uppercase text-slate-400 bg-slate-50 rounded-sm">
												<tr>
														<th class="p-2 w-10">
																<div class="font-semibold text-left"></div>
														</th>
														<th class="p-2 w-60 lg:w-96">
																<div class="font-bold text-center">Nama</div>
														</th>
														<th class="p-2 w-60 lg:w-96">
																<div class="font-bold text-center">Judul Materi</div>
														</th>
														<th class="p-2">
																<div class="font-bold text-center">Tanggal</div>
														</th>
														<th class="p-2 w-44 lg:w-60">
															<div class="font-bold text-center">Action</div>
													</th>
												</tr>
										</thead>
										<!-- Table body -->
										<tbody class="text-sm lg:text-md font-medium divide-y divide-slate-100">
												<!-- Row -->
												@foreach ($kajian as $item)
												<tr>
													<td class="p-2">
															<div class="text-slate-800">{{ $no++ }}</div>
													</td>
													<td class="p-2 pr-4 w-44 lg:w-60" >
														<div >{{ $item->name }}</div>
													</td>
													<td class="p-2 pl-4 w-60 lg:w-96" >
														<div >{{ $item->title }}</div>
													</td>
													<td class="p-2">
															<div class="text-center">{{ $item->label }}</div>
													</td>
													<td class="p-2 pl-4 w-44 lg:w-60" >
														<div class="flex gap-3 justify-center items-center">
															<form action="{{ route('kajian.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin ?');">
																@csrf
																@method('delete')
																<button type="submit" class="btn bg-rose-500 hover:bg-rose-600 text-white">Delete</button>
															</form>
															@include('components.modal-edit-kajian')
														</div>
												</td>
											</tr>
												@endforeach
												
										</tbody>
								</table>
			
						</div>
				</div>
			</div>

	</div>
</x-app-layout>
