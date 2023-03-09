<x-layout>
    <x-table-confirmation-modal
        icon="fa-solid fa-eraser"
        title="Are you sure you want to delete this item?"
        subtitle="Be careful! This item will be deleted forever!" />
    <div class="flex flex-row h-screen bg-white">
        <div>
            <x-admin.side-bar />
        </div>
        <div class="flex flex-col w-full">
            <div class="border-b border-b-gray-300 p-4">
                <h1 class="text-2xl font-bold">Users</h1>
                <small class="text-gray-500">Make user operations in this page.</small>
            </div>
            <div class="p-2">
                <div class="px-3 py-6 bg-white rounded-sm">
                    <livewire:table :config="App\Tables\UsersTable::class"/>
                </div>
            </div>
            </div>
    </div>
</x-layout>
