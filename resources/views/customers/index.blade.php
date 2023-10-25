<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container mx-auto px-4 mt-5">

                        <div class="flex justify-between items-center mb-6">
                            <h1 class="text-2xl font-bold">Customers</h1>
                            <a href="{{ route('customers.create') }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Add New Customer
                            </a>
                        </div>

                        @if (session('status'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                                role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                            <thead class="bg-gray-600 text-white">
                                <tr>
                                    <th class="w-1/6 px-6 py-3">ID</th>
                                    <th class="w-2/6 px-6 py-3">Name</th>
                                    <th class="w-2/6 px-6 py-3">Phone</th>
                                    <th class="w-1/6 px-6 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @forelse($customers as $customer)
                                    <tr>
                                        <td class="border-t px-6 py-4">{{ $customer->id }}</td>
                                        <td class="border-t px-6 py-4">{{ $customer->customer_name }}</td>
                                        <td class="border-t px-6 py-4">{{ $customer->customer_phone }}</td>
                                        <td class="border-t px-6 py-4">
                                            <a href="{{ route('customers.show', $customer) }}"
                                                class="text-blue-500 hover:underline">View</a>
                                            <a href="{{ route('customers.edit', $customer) }}"
                                                class="text-yellow-500 hover:underline ml-4">Edit</a>
                                            <!-- You can also add a delete form here, just make sure to handle it correctly in your controller -->
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="border-t px-6 py-4 text-center">No customers found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{ $customers->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
