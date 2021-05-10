  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <script>
    var cont=0;
    function loopSlider(){
      var xx= setInterval(function(){
            switch(cont)
            {
            case 0:{
                $("#slider-1").fadeOut(400);
                $("#slider-2").delay(400).fadeIn(400);
                $("#sButton1").removeClass("bg-blue-800");
                $("#sButton2").addClass("bg-blue-800");
            cont=1;
            
            break;
            }
            case 1:
            {
            
                $("#slider-2").fadeOut(400);
                $("#slider-1").delay(400).fadeIn(400);
                $("#sButton2").removeClass("bg-blue-800");
                $("#sButton1").addClass("bg-blue-800");
              
            cont=0;
            
            break;
            }
            
            
            }},8000);

    }

    function reinitLoop(time){
    clearInterval(xx);
    setTimeout(loopSlider(),time);
    }



    function sliderButton1(){

        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-blue-800");
        $("#sButton1").addClass("bg-blue-800");
        reinitLoop(4000);
        cont=0
        
        }
        
        function sliderButton2(){
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-blue-800");
        $("#sButton2").addClass("bg-blue-800");
        reinitLoop(4000);
        cont=1
        
        }

        $(window).ready(function(){
            $("#slider-2").hide();
            $("#sButton1").addClass("bg-blue-800");         

            loopSlider();
    });

  </script>
<x-Admin-layout>
    <div class="sliderAx h-auto">
        <div id="slider-1" class="container mx-auto">
          <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://akademik.undiksha.ac.id/wp-content/uploads/2017/09/Wisuda-November-2017-Undiksha-2.jpg)">
         <div class="md:w-1/2">
          <p class="font-bold text-sm ">Selamat Datang</p>
          <p class="text-3xl font-bold">Dashboard Alumni</p>
          <p class="text-2xl mb-10 leading-none">Data Alumni Mahasiswa Undiksha</p>
          <a href="{{ route('alumni') }}" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-base rounded hover:bg-gray-200 hover:text-gray-800">Detail</a>
          </div>  
          </div> <!-- container -->
        <br>
      </div>
  
        <div id="slider-2" class="container mx-auto">
          <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://conference.undiksha.ac.id/gc-tale2019/assets/img/gedung%20undiksha.jpg)">
         
        <p class="font-bold text-sm ">Selamat Datang</p>
        <p class="text-3xl font-bold">Dashboard Keuangan</p>
        <p class="text-2xl mb-10 leading-none">Data Keuangan Realisasi dan Pagu Undiksha</p>
        <a href="{{ route('keuangan') }}" class="bg-blue-800 py-4 px-8 text-white font-bold uppercase text-base rounded hover:bg-gray-200 hover:text-gray-800">Detail</a>
           
      </div> <!-- container -->
        <br>
        </div>
      </div>
    <div  class="flex justify-between w-12 mx-auto pb-2">
          <button id="sButton1" onclick="sliderButton1()" class="bg-blue-400 rounded-full w-4 pb-2 " ></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-blue-400 rounded-full w-4 p-2"></button>
    </div>
    
    {{-- grafik --}}
    <hr class="mt-4">
    <div class="flex flex-wrap mt-10">
      <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
          <p class="text-xl pb-3 flex items-center">
              Data Alumni UNDIKSHA
          </p>
          <div class="min-w-0  px-4 py-4  mr-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="mb-10 text-center">
              <h2 class="text-xl">Data Alumni Undiksha</h2>
              <?php  $tgl=date('d-m-Y');?>
              <p>Pertanggal {{ $tgl }}</p>
            </div>
              <canvas id="pie"></canvas>
              <div
                class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400 mb-10"
              >
                <!-- Chart legend -->
                <div class="flex items-center \">
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
      <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
          <p class="text-xl pb-3 flex items-center">
              Data Keuangan Bulanan UNDIKSHA
          </p>
          <div class="min-w-0  px-4 py-4  mr-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <figure class="highcharts-figure">
              <div id="chartKeuangan"></div>
            </figure>
            </div>
      </div> 
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

    // chart4
    Highcharts.chart('chartKeuangan', {
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

</script>
