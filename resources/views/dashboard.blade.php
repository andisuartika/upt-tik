<x-Admin-layout>
@include('alert')
    <div class="py-2">
                <h1 class="text-3xl text-black pb-6">Alumni</h1>
                <div class="flex flex-wrap mt-6">
                    <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-plus mr-3"></i> Monthly Reports
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="bars" width="400" height="200"></canvas>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                        <p class="text-xl pb-3 flex items-center">
                            <i class="fas fa-check mr-3"></i> Resolved Reports
                        </p>
                        <div class="p-6 bg-white">
                            <canvas id="line" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
    
    </div>
</x-Admin-layout>
    <script>
        /**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const barConfig = {
    type: "bar",
    data: {
        labels: [
            @foreach($alumnis['prodi'] as $prodi)
                "{{$prodi->prodi}}",
            @endforeach    
        ],
        datasets: [
            {
                label: "Bekerja",
                backgroundColor: "#0694a2",
                // borderColor: window.chartColors.red,
                borderWidth: 1,
                data: {{$alumnis['bekerja']}},
            },
            {
                label: "Belum Bekerja",
                backgroundColor: "#7e3af2",
                // borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: {{$alumnis['belum_bekerja']}},
            },
        ],
    },
    options: {
        responsive: true,
        legend: {
            display: false,
        },
    },
};

const barsCtx = document.getElementById("bars");
window.myBar = new Chart(barsCtx, barConfig);

    </script>


