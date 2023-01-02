<div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
	<header class="px-5 py-4 border-b border-slate-100">
			<h2 class="font-semibold text-slate-800">Laporan Keuangan Harian</h2>
	</header>
	<div class="p-3">

			<!-- Card content -->
			<!-- "Today" group -->
			<div>
					<header class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm font-semibold p-2">Today</header>
					<ul class="my-1">
							<!-- Item -->
							@foreach ($cash as $item)
								<li class="flex px-2">
										<div class="w-9 h-9 rounded-full overflow-hidden shrink-0  my-2 mr-3">
											@if ($item->debit == 0)
												<svg class="w-9 h-9 fill-current text-emerald-50 bg-rose-500" viewBox="0 0 36 36">
													<path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z" />
												</svg>
											@else
												<svg class="w-9 h-9 fill-current text-rose-50 bg-green-500" viewBox="0 0 36 36">
													<path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z " />
												</svg>
											@endif
												
										</div>
										<div class="grow flex items-center border-b border-slate-100 text-sm py-2">
												<div class="grow flex justify-between">
														<div class="self-center"><span class="font-medium text-slate-800 hover:text-slate-900">{{ $item->name }}</span> {{ $item->note }}</div>
														<div class="shrink-0 self-start ml-2 w-28 flex justify-between">
															<p>Rp </p>
															<span class="font-medium text-slate-800" id="uang">
																{{ $item->debit ? number_format($item->debit, 0, ",", ".") : number_format($item->kredit, 0, ",", "."); }}
															</span>
														</div>
												</div>
										</div>
								</li>
							@endforeach

					</ul>
			</div>

	</div>
</div>