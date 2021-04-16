<x-Admin-layout>
    <div class="py-2">
    <h1 class="text-3xl text-black pb-6">Alumni Fakultas Teknik dan Kejuruan</h1>
            <div class="w-full">

                <!-- filter -->
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
                                <option value="{{$alumnis->prodi}}">{{$alumnis->nama}}</option>
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
            </div>

                <div class="bg-white overflow-auto">
                    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">No </th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Tanggal Transaksi</th>
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
                                <td class="py-4 px-6 border-b border-grey-light">{{$alumnis->tgl_transaksi}}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{$alumnis->nama_jurusan}}
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $alumnis->nama}}</td>
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
            </div>
   </div>
</x-Admin-layout>