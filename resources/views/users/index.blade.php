<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md">
                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <x-table-th>ID</x-table-th>
                                <x-table-th>Name</x-table-th>
                                <x-table-th>Email</x-table-th>
                                <x-table-th>Created at</x-table-th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($users as $user)
                                <tr class="bg-white">
                                    <x-table-td>{{ $user->id }}</x-table-td>
                                    <x-table-td>{{ $user->name }}</x-table-td>
                                    <x-table-td>{{ $user->email }}</x-table-td>
                                    <x-table-td>{{ $user->created_at }}</x-table-td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
