<!-- Search button -->
<div x-data="{ searchOpen: false }">
	<!-- Button -->
	<button 
			class="btn bg-indigo-500 hover:bg-indigo-600 text-white"
			:class="{ 'bg-slate-200': searchOpen }"
			@click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
			aria-controls="add-kredit"
	>
		<svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
				<path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
		</svg>
		<span class="hidden xs:block ml-2">Pemasukan</span>
	</button>	
	<!-- Modal backdrop -->
	<div
			class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity"
			x-show="searchOpen"
			x-transition:enter="transition ease-out duration-200"
			x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100"
			x-transition:leave="transition ease-out duration-100"
			x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0"
			aria-hidden="true"
			x-cloak
	></div>
	<!-- Modal dialog -->
	<div
			id="add-kredit"
			class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center px-4 sm:px-6"
			role="dialog"
			aria-modal="true"
			x-show="searchOpen"
			x-transition:enter="transition ease-in-out duration-200"
			x-transition:enter-start="opacity-0 translate-y-4"
			x-transition:enter-end="opacity-100 translate-y-0"
			x-transition:leave="transition ease-in-out duration-200"
			x-transition:leave-start="opacity-100 translate-y-0"
			x-transition:leave-end="opacity-0 translate-y-4"
			x-cloak
	>
			<div
					class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg"
					@click.outside="searchOpen = false"
					@keydown.escape.window="searchOpen = false"
			>   
			@if (Auth::guard('web')->check())
				<!-- Add Pengeluaran form -->
				<div class="p-10">
					<form action="{{ route('cash.store') }}" method="POST">
						@csrf
						@method('POST')
						<div class="flex justify-end">
							<button 
									class="btn bg-indigo-500 hover:bg-indigo-600 text-white" type="submit"
							>
								<svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
										<path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
								</svg>
								<span class="hidden xs:block ml-2">Tambah Pemasukan</span>
							</button>	
						</div>
						<div class="relative">
							<div>
								<label for="name" class="">Name</label>
								<input id="name" class="w-full border-0 focus:ring-transparent placeholder-slate-400 appearance-none py-3 pl-10 pr-4 border-b border-slate-200" type="text" placeholder="Nama" name="name" />
							</div>
							<div>
								<label for="uang" class="">Pemasukan</label>
								<input id="uang" class="w-full border-0 focus:ring-transparent placeholder-slate-400 appearance-none py-3 pl-10 pr-4 border-b border-slate-200" type="text" placeholder="Rp" name="debit" />
							</div>
							<div>
								<label for="note" class="">Keterangan</label>
								<input id="note" class="w-full border-0 focus:ring-transparent placeholder-slate-400 appearance-none py-3 pl-10 pr-4 border-b border-slate-200" type="text" placeholder="Beri Keterangan" name="note" />
							</div>
						</div>
					</form>
				</div>
			@endif

			</div>
	</div>                    
</div>