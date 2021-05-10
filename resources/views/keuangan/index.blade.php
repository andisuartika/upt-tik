<x-Admin-layout>
{{-- chart --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://www.highcharts.com/samples/static/highslide-full.min.js"></script>
<script src="https://www.highcharts.com/samples/static/highslide.config.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="https://www.highcharts.com/samples/static/highslide.css" />
{{-- chart --}}

{{-- modal --}}
<style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
</style>
{{-- modal --}}

    <div class="">
        <h1 class="text-3xl text-black">Dashboard Keuangan</h1>
        <p>Realisasi dan Pagu UNDIKSHA</p>
        <div class="flex mt-6">
            <div class="mr-2 w-1/2 h-full">
                <figure class="highcharts-figure">
                    <div id="chart1"></div>
                    <div class="bg-white pb-4 flex justify-center">
                        <button class="bg-transparent border border-gray-500 hover:bg-indigo-500 text-gray-500 hover:text-white hover:border-white font-bold py-1 px-4 rounded-md"><a href="{{ route('realisasiAkun') }}">Detail</a></button>
                    </div>
                </figure>
                
            </div>
            <div class="ml-2 mr-4 w-1/2 h-full">
                <figure class="highcharts-figure">
                    <div id="chart2"></div>
                    <div class="bg-white pb-4 flex justify-center">
                        <button class="modal-open bg-transparent border border-gray-500 hover:bg-indigo-500 text-gray-500 hover:text-white hover:border-white font-bold py-1 px-4 rounded-md" data-toggle="modal" data-target="modal2">Detail</button>
                    </div>
                </figure>
            </div>
        </div>
        <div class="flex mt-10">
            <div class="mr-2 w-1/2 h-full">
                <figure class="highcharts-figure">
                    <div id="chart3"></div>
                    <div class="bg-white pb-4 flex justify-center">
                        <button class="bg-transparent border border-gray-500 hover:bg-indigo-500 text-gray-500 hover:text-white hover:border-white font-bold py-1 px-4 rounded-md"><a href="{{ route('realisasiUnit') }}">Detail</a></button>
                    </div>
                </figure>
            </div>
            <div class="ml-2 mr-4  w-1/2 h-full">
                <figure class="highcharts-figure">
                    <div id="chart4"></div>
                    <div class="bg-white pb-4 flex justify-center">
                        <button class="modal-open bg-transparent border border-gray-500 hover:bg-indigo-500 text-gray-500 hover:text-white hover:border-white font-bold py-1 px-4 rounded-md" data-toggle="modal" data-target="modal4">Detail</button>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    
    {{-- Modal --}}
        <div class="modalku">
                <!--Modal Perbandingan Pagu Realisasi-->
                <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal2">
                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                    <div class="modal-container bg-white w-11/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    
                    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                        <span class="text-sm">(Esc)</span>
                    </div>

                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                    <div class="modal-content py-4 text-left px-6">
                        <!--Title-->
                        <div class="flex justify-between items-center pb-1">
                        <p class="text-2xl font-bold">Detail Data</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                        </div>

                        <!--Body-->
                        <p>Perbandingan Pagu dan Realisasi 5 Tahun Terakhir</p>
                        <!-- table -->
                        <div class="mt-4 overflow-auto">
                            <table class="bg-white text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Nama</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2017</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2018</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2019</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2020</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2021</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Pagu</td>
                                        <td class="py-4 px-6 border-b border-grey-light">	
                                            {{ $pagu['2017'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $pagu['2018'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $pagu['2019'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $pagu['2020'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $pagu['2021'] }}
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">Realisasi</td>
                                        <td class="py-4 px-6 border-b border-grey-light">	
                                            {{ $realisasiTh['2017'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $realisasiTh['2018'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $realisasiTh['2019'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $realisasiTh['2020'] }}
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            {{ $realisasiTh['2021'] }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- End Table --}}

                        <!--Footer-->
                        <div class="flex justify-start pt-2">
                        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <!--Akhir Modal Perbandingan Pagu Realisasi-->

                <!--Modal Realisasi Bulanan-->
                <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal4">
                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                    <div class="modal-container bg-white w-11/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    
                    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                        <span class="text-sm">(Esc)</span>
                    </div>

                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                    <div class="modal-content py-4 text-left px-6">
                        <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Detail Data</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                        </div>

                        <!--Body-->
                        <p>Realisasi Belanja Bulanan</p>
                        <!-- table -->
                        <div class=" \overflow-auto">
                            <table class="bg-white text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Tahun</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Jan</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Feb</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Mar</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Apr</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Mei</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Jun</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Jul</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Aug</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Sep</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Oct</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Nov</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Dec</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($realisasiBulan as $data)
                                    <tr class="hover:bg-grey-lighter">
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Tahun'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Jan'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Feb'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Mar'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Apr'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Mei'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Jun'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Jul'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Aug'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Sep'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Oct'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Nov'] }}</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">{{ $data['Dec'] }}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- End Table --}}

                        <!--Footer-->
                        <div class="flex justify-start pt-2">
                        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <!--Akhir Modal Realisasi Bulanan-->
        </div>
    {{-- akhir Modal --}}

    
</x-Admin-layout>

<script>
    // chart1
        Highcharts.chart('chart1', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Realisasi Keuangan 5 tahun terakhir Berdasarkan Akun'
        },
        subtitle: {
            text: 'Source: Data-center Undiksha</a>'
        },
        xAxis: {
            categories: ["521211","521219","524119","525112","525115","525119","525113","524111","537112","525111","521111","521115","521119","522111","522112","522113","522119","522121","522151","523111","523121","524219","525114","532111","536111",
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Realisasi (Rp.)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Rupiah'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Tahun 2017',
            data: [
                @foreach($realisasi['2017'] as $realisasi2017)
                    {{ $realisasi2017 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2018',
            data: [
                @foreach($realisasi['2018'] as $realisasi2018)
                    {{ $realisasi2018 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2019',
            data: [
                @foreach($realisasi['2019'] as $realisasi2019)
                    {{ $realisasi2019 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2020',
            data: [
                @foreach($realisasi['2020'] as $realisasi2020)
                    {{ $realisasi2020 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2021',
            data: [
                @foreach($realisasi['2021'] as $realisasi2021)
                    {{ $realisasi2021 }},
                @endforeach
            ]
        }]
    });

    // endchart1

    // chart2
        Highcharts.chart('chart2', {

        title: {
        text: 'Grafik Line Perbandingan Pagu dan Realisasi, 2017-2021'
        },

        subtitle: {
        text: 'Source: data-center Undiksha.ac.id'
        },

        yAxis: {
        title: {
            text: 'Total'
        }
        },

        xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2017 to 2021'
        }
        },

        legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
        },

        plotOptions: {
        series: {
            label: {
            connectorAllowed: false
            },
            pointStart: 2017
        }
        },

        series: [{
        name: 'Pagu',
        data: [
            @foreach($pagu as $p)
                    {{ $p }},
            @endforeach
        ]
        }, {
        name: 'Realisasi',
        data: [
            @foreach($realisasiTh as $realisasi)
                    {{ $realisasi }},
            @endforeach]
        }],

        responsive: {
        rules: [{
            condition: {
            maxWidth: 500
            },
            chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
            }
        }]
        }

        });
    // endchart2

    // chart2
    Highcharts.chart('chart3', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Realisasi Keuangan 5 tahun terakhir Berdasarkan Unit'
        },
        subtitle: {
            text: 'Source: Data-center Undiksha</a>'
        },
        xAxis: {
            categories: ["89","86","87","85","83","80","78","48","45","43","41","34","33","32","30","29","28","27","25","24","23","21","20","18","17","16","15","12","11","10","9","8","7","6","5","4","3","2","1","96","93","92","91","90","88","84","100","98","97",
            ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Realisasi (Rp.)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Rupiah'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Tahun 2017',
            data: [
                @foreach($realisasiUnit['2017'] as $realisasi2017)
                    {{ $realisasi2017 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2018',
            data: [
                @foreach($realisasiUnit['2018'] as $realisasi2018)
                    {{ $realisasi2018 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2019',
            data: [
                @foreach($realisasiUnit['2019'] as $realisasi2019)
                    {{ $realisasi2019 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2020',
            data: [
                @foreach($realisasiUnit['2020'] as $realisasi2020)
                    {{ $realisasi2020 }},
                @endforeach
            ]
        }, {
            name: 'Tahun 2021',
            data: [
                @foreach($realisasiUnit['2021'] as $realisasi2021)
                    {{ $realisasi2021 }},
                @endforeach
            ]
        }]
    });
    // endchart3

    // chart4
    Highcharts.chart('chart4', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Realisasi Belanja Bulanan'
    },
    subtitle: {
        text: 'Source: Data-center Undiksha'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total (Rp)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.2f} Rupiah</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tahun 2017',
        data: [
            @foreach($realisasiBulan['2017'] as $realisasi2017)
                    {{ $realisasi2017 }},
            @endforeach
        ]

    }, {
        name: 'Tahun 2018',
        data: [
            @foreach($realisasiBulan['2018'] as $realisasi2018)
                    {{ $realisasi2018 }},
            @endforeach
        ]

    }, {
        name: 'Tahun 2019',
        data: [
            @foreach($realisasiBulan['2019'] as $realisasi2019)
                    {{ $realisasi2019 }},
            @endforeach
        ]

    }, {
        name: 'Tahun 2020',
        data: [
            @foreach($realisasiBulan['2020'] as $realisasi2020)
                    {{ $realisasi2020 }},
            @endforeach
        ]

    }, {
        name: 'Tahun 2021',
        data: [
            @foreach($realisasiBulan['2021'] as $realisasi2021)
                    {{ $realisasi2021 }},
            @endforeach
        ]

    }]
});
    // endchart4

    // modal 
    var openmodal = document.querySelectorAll('.modal-open')
   let selectedModalTargetId = ''
   for (var i = 0; i < openmodal.length; i++) {
     openmodal[i].addEventListener('click', function(event){
       selectedModalTargetId = event.target.attributes.getNamedItem('data-target').value
       event.preventDefault()
       toggleModal()
     })
   }

  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)

  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }

  document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
      isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
      isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
      toggleModal()
    }
  }

  function toggleModal () {
    if(!selectedModalTargetId) {
      return
    }
    const body = document.querySelector('body')
    const modal = document.getElementById(selectedModalTargetId)
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
  }
    // akhir modal
</script>