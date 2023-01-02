
<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

            <!-- Line chart (Cash Chart) -->
            <x-dashboard.dashboard-cash-chart />

            <!-- Card (Cash Income Info) -->
            @include('components.dashboard.dashboard-cash-income')

            <!-- Card (Jadwal Kajian Harian)  -->
            @include('components.dashboard.dashboard-kajian')

            <!-- Card (Agenda Harian) -->
            @include('components.dashboard.dashboard-agenda')


        </div>
    </div>
    
</x-app-layout>
