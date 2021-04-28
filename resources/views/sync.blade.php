<x-Admin-layout>
    @include('alert')
        <div class="py-2">
            <div class="w-full mt-6">
                <p class="text-xl pb-3 flex items-center">
                    <i class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                          </svg>    
                    </i> Syncronize API to Database
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">Action</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">Data Alumni UNSIKSHA</td>
                                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                         Success
                                    </span>
                                </td>
                                <td class="w-1/3 text-center py-3 px-4 border-b border-grey-light">
                                    <a href="{{ route('syncAlumni') }}" class="text-blue-600">Syncronize</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">Data Keuangan UNSIKSHA</td>
                                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                         Success
                                    </span>
                                </td>
                                <td class="w-1/3 text-center py-3 px-4 border-b border-grey-light">
                                    <a href="#" class="text-blue-600">Syncronize</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="pt-3 text-gray-600">
                    Source: API - UNDIKSHA
                </p>
            </div>
        </div>
    </x-Admin-layout>