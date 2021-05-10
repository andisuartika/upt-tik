<x-Admin-layout>

        <div class="">
            <div class="row flex justify-between">
                <div class="col">
                    <h1 class="text-3xl text-black">Dashboard Keuangan</h1>
                    <p>Realisasi 5 tahun terakhir Berdasarkan Unit</p>
                </div>
                <div class="col py-4">
                    <button class="bg-transparent border border-gray-500 hover:bg-indigo-500 text-gray-500 hover:text-white hover:border-white font-bold py-1 px-4 rounded-md"><a href="{{ route('keuangan') }}">Kembali</a></button>
                </div>
            </div>
            
           <!-- table -->
           <div class="mt-4 overflow-auto">
            <table class="bg-white text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Kode Unit</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2017</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2018</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2019</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2020</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">2021</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $realisasi)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $realisasi['unit'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $realisasi['2017'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $realisasi['2018'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $realisasi['2019'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $realisasi['2020'] }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $realisasi['2021'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class=" py-2 px-2">       
                {{ $data->links() }}
            </div>
        </div>
        {{-- End Table --}}          
        </div>

    </x-Admin-layout>
    