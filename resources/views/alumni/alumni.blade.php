<?php  $tgl=date('Y-m-d');?>
<x-Admin-layout>
@include('alert')
    <div class="py-2">
                <h1 class="text-3xl text-black">Dashboard Alumni</h1>
                <p>Data Pertanggal <b>{{$tgl}}</b></p>
                <div class="flex flex-wrap mt-6">
                    <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-check mr-3"></i> Data Seluruh Alumni UNDIKSHA
                        </p>
                        <div class="min-w-0  px-4 py-4  mr-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
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
                    </div>
                    <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-plus mr-3"></i> Data Alumni UNDIKSHA Fakultas
                        </p>
                        <div class="min-w-0 px-4 py-4  bg-white rounded-lg shadow-xs dark:bg-gray-800">
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
                
        <!-- table -->
        <div class=" overflow-auto mt-10">
            <h1 class="py-4 px-2">Tabel Alumni Berdasarkan Fakultas</h1>
            <table class="bg-white text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">No</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Fakultas</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Bekerja</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Belum Bekerja</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Lanjut Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">1</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Ilmu Pendidikan
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fip']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fip']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fip']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">2</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Bahasa dan Seni
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fbs']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fbs']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fbs']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">3</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Matematika dan Ilmu Pengetahuan Alam
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fmipa']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fmipa']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fmipa']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">4</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Hukum dan Ilmu Sosial
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fhis']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fhis']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fhis']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">5</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Teknik dan Kejuruan
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['ftk']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['ftk']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['ftk']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">6</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Olahraga dan Kesehatan
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fok']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fok']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fok']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">7</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Pascasarjana
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['pasca']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['pasca']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['pasca']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">8</td>
                        <td class="py-4 px-6 border-b border-grey-light">	
                            Fakultas Ekonomi
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fe']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fe']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fe']['lanjut_kuliah']}}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">9</td>
                        <td class="py-4 px-6 border-b border-grey-light">	                     	
                            Fakultas Kedokteran
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fk']['bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fk']['belum_bekerja']}}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{$alumnis['fk']['lanjut_kuliah']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- End Table --}}
    </div>
</x-Admin-layout>
    <script>
        /**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
 const barConfig = {
    type: 'bar',
    data: {
        labels: [
            "FIP",
            "FBS",
            "FMIPA",
            "FHIS",
            "FTK",
            "FOK",
            "PASCA",
            "FE",
            "FK"
        ],
        datasets: [
        {
            label: 'Bekerja',
            backgroundColor: '#10B981',
            // borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [
                "{{$alumnis['fip']['bekerja']}}",
                "{{$alumnis['fbs']['bekerja']}}",
                "{{$alumnis['fmipa']['bekerja']}}",
                "{{$alumnis['fhis']['bekerja']}}",
                "{{$alumnis['ftk']['bekerja']}}",
                "{{$alumnis['fok']['bekerja']}}",
                "{{$alumnis['pasca']['bekerja']}}",
                "{{$alumnis['fe']['bekerja']}}",
                "{{$alumnis['fk']['bekerja']}}",
            ],
        },
        {
            label: 'Melanjutkan',
            backgroundColor: '#7e3af2',
            // borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
                "{{$alumnis['fip']['lanjut_kuliah']}}",
                "{{$alumnis['fbs']['lanjut_kuliah']}}",
                "{{$alumnis['fmipa']['lanjut_kuliah']}}",
                "{{$alumnis['fhis']['lanjut_kuliah']}}",
                "{{$alumnis['ftk']['lanjut_kuliah']}}",
                "{{$alumnis['fok']['lanjut_kuliah']}}",
                "{{$alumnis['pasca']['lanjut_kuliah']}}",
                "{{$alumnis['fe']['lanjut_kuliah']}}",
                "{{$alumnis['fk']['lanjut_kuliah']}}",
            ],
        },
        {
            label: 'Belum Bekerja',
            backgroundColor: '#1c64f2',
            // borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
                "{{$alumnis['fip']['belum_bekerja']}}",
                "{{$alumnis['fbs']['belum_bekerja']}}",
                "{{$alumnis['fmipa']['belum_bekerja']}}",
                "{{$alumnis['fhis']['belum_bekerja']}}",
                "{{$alumnis['ftk']['belum_bekerja']}}",
                "{{$alumnis['fok']['belum_bekerja']}}",
                "{{$alumnis['pasca']['belum_bekerja']}}",
                "{{$alumnis['fe']['belum_bekerja']}}",
                "{{$alumnis['fk']['belum_bekerja']}}",
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
                "{{$alumni['bekerja']}}", 
                "{{$alumni['belum_bekerja']}}", 
                "{{$alumni['lanjut_kuliah']}}", 
            ],
            /**
            * These colors come from Tailwind CSS palette
            * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
            */
            backgroundColor: ['#10B981', '#1c64f2', '#7e3af2'],
            label: 'Chart 1',
        },
        ],
        labels: ['Bekerja', 'Belum Bekerja', 'Lanjut Kuliah'],
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
    </script>


