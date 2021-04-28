<x-Admin-layout>
    <div>
        <!-- Tanggal Sekarang -->
        <?php  $tgl=date('Y-m-d');?>
        <div class="py-2">
        @if(isset($alumni[0]))
            @foreach($alumni as $alumnis)
            <?php $fakultas = $alumnis->nama_fakultas  ?>
            @endforeach 
        @else 
        <?php $fakultas = "Fakultas Kedokteran"  ?>
        @endif
    </div>
    <div class="">
        <h1 class="text-3xl text-black">Alumni {{$fakultas}}</h1>
        <p>Data Pertanggal <b>{{$tgl}}</b></p>
    </div>
    <div class="">
            <!-- <div class="w-full">
                filter
                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="flex flex-row mb-1 sm:mb-0">
                    <div class="relative">
                        <select
                            class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="jurusan">
                            <option>Jurusan</option>
                            @foreach($alumni as $alumnis)
                            <option value="{{$alumnis->jurusan}}">{{$alumnis->nama_jurusan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="relative">
                        <select
                            class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                            <option>Prodi</option>
                            @foreach($alumni as $alumnis)
                                <option value="{{$alumnis->prodi}}">{{$alumnis->nama_prodi}}</option>
                            @endforeach>
                        </select>
                    </div>
                </div>
                <div class="block relative">
                    <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <input placeholder="Search"
                        class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                </div>
            </div> -->

            <!-- chart -->
            <div class="chart py-10">
              <p class="mb-5 text-gray-600 dark:text-gray-400">
                Chart Data Alumni
              </p>

              <div class="grid gap-6 mb-8 md:grid-cols-2">
                <!-- Doughnut/Pie chart -->
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    {{$fakultas}}
                  </h4>
                  <canvas id="pie"></canvas>
                  <div
                    class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                  >
                    <!-- Chart legend -->
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"
                      ></span>
                      <span>Belum Bekerja</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-green-500 rounded-full"
                      ></span>
                      <span>Bekerja</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                      ></span>
                      <span>Melanjutkan</span>
                    </div>
                  </div>
                </div>

                <!-- Bars chart -->
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <h4 class="font-semibold text-gray-800 dark:text-gray-300">
                  {{$fakultas}}
                  </h4>
                  <p class="mb-4">Berdasarkan Prodi</p>
                  <canvas id="bars"></canvas>
                  <div
                    class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
                  >
                    <!-- Chart legend -->
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"
                      ></span>
                      <span>Belum Bekerja</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-green-500 rounded-full"
                      ></span>
                      <span>Bekerja</span>
                    </div>
                    <div class="flex items-center">
                      <span
                        class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
                      ></span>
                      <span>Melanjutkan</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {{-- end chart --}}
          <!-- table -->

          <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">No </th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Jurusan</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Prodi</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Bekerja</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Belum Bekerja</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Melanjutkan</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($alumni as $key => $alumnis)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumni->firstitem() + $key}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis->nama_jurusan}}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $alumnis->nama_prodi}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis->bekerja}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis->belum_bekerja}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis->lanjut_kuliah}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class=" py-2 px-2">       
                {{ $alumni->links() }}
            </div>
          </div>

          {{-- End Table --}}
   </div>
</x-Admin-layout>
<script>
    // Chart Pie
    /**
    * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
    */
    const pieConfig = {
    type: 'doughnut',
    data: {
        datasets: [
        {
            data: [
                @foreach($chart as $charts)
                "{{$charts}}",
                @endforeach   
            ],
            /**
            * These colors come from Tailwind CSS palette
            * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
            */
            backgroundColor: ['#10B981', '#1c64f2', '#7e3af2'],
            label: 'Chart 1',
        },
        ],
        labels: ['Bekerja', 'Belum Bekerja', 'Melanjutkan'],
    },
    options: {
        responsive: true,
        cutoutPercentage: 80,
        /**
        * Default legends are ugly and impossible to style.
        * See examples in charts.html to add your own legends
        *  */
        legend: {
        display: false,
        },
    },
    }

    // change this to the id of your chart element in HMTL
    const pieCtx = document.getElementById('pie')
    window.myPie = new Chart(pieCtx, pieConfig)

    // end chart Pie

    // Chart bars
    /**
    * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
    */
   
    const barConfig = {
    type: 'bar',
    data: {
        labels: [
            @foreach($alumni as $key => $alumnis)
                "{{$alumnis->slug_prodi}}",
            @endforeach
        ],
        datasets: [
        {
            label: 'Bekerja',
            backgroundColor: '#10B981',
            // borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [
              @foreach($alumni as $alumnis)
                "{{$alumnis->bekerja}}",
              @endforeach
            ],
        },
        {
            label: 'Melanjutkan',
            backgroundColor: '#7e3af2',
            // borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
              @foreach($alumni as $alumnis)
                "{{$alumnis->lanjut_kuliah}}",
              @endforeach
            ],
        },
        {
            label: 'Belum Bekerja',
            backgroundColor: '#1c64f2',
            // borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
              @foreach($alumni as $alumnis)
                "{{$alumnis->belum_bekerja}}",
              @endforeach
            ],
        },
        ],
    },
    options: {
        responsive: true,
        legend: {
        display: false,
        },
    },
    }

    const barsCtx = document.getElementById('bars')
    window.myBar = new Chart(barsCtx, barConfig)

    // end chart bars

</script>