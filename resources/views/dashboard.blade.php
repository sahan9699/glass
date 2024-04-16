<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="">
                        <form action="{{ route('user.show') }}" method="GET" class="flex mb-5 w-full">
                            <input type="text" name="query" class="border w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md ml-2">
                                Search
                            </button>
                        </form>
                    </div>
                    @if($results != null)
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Seller</th>
                                    <th class="px-4 py-2">Points</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">{{ $results->name }}</td>
                                    <td class="border px-4 py-2">{{ $results->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif

                    @if($results)
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Seller</th>
                                    <th class="px-4 py-2">Points</th>
                                    <th class="px-4 py-2">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">{{ $results->name }}</td>
                                    <td class="border px-4 py-2">{{ $results->email }}</td>
                                    <td class="border px-4 py-2">{{ $results->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
</x-app-layout>