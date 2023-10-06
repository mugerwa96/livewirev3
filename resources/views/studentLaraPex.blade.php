<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('LaraPexCharts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2">

            <div>
                {!! $chart->container() !!}
            </div>
            <div>
                {!! $PieChart->container() !!}
            </div>
            <div>
                {!! $LineChart->container() !!}
            </div>


        </div>


    </div>
    </div>
    <script src="{{ $chart->cdn() }}"></script>
    <script src="{{ $PieChart->cdn() }}"></script>
    <script src="{{ $LineChart->cdn() }}"></script>

    {{ $chart->script() }}
    {{ $PieChart->script() }}
    {{ $LineChart->script() }}
</x-app-layout>
