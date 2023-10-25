<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>
    <div class="container mx-auto mt-5">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-2xl mb-4">Add New Customer</h2>

            <form action="{{ route('customers.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="customer_name" class="block mb-2">Customer Name</label>
                    <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name') }}"
                        class="w-full p-2 border rounded">
                    @error('customer_name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="customer_phone" class="block mb-2">Customer Phone</label>
                    <input type="text" name="customer_phone" id="customer_phone" value="{{ old('customer_phone') }}"
                        class="w-full p-2 border rounded">
                    @error('customer_phone')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="address" class="block mb-2">Address</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}"
                        class="w-full p-2 border rounded">
                    @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="website" class="block mb-2">Website</label>
                    <input type="text" name="website" id="website" value="{{ old('website') }}"
                        class="w-full p-2 border rounded">
                    @error('website')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add
                    Customer</button>
            </form>
        </div>
    </div>
</x-app-layout>
