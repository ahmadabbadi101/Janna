<x-layout>
    <x-page-heading>
        Admin Dashboard
    </x-page-heading>
    
    
    <div class="flex gap-6 mt-8">
        <div class="flex-1">
            <x-admin-card 
                href="/admin/dishes" 
                title="Manage Dishes" 
                description="View, add, or remove dishes from the menu"
            />
        </div>
        <div class="flex-1">
            <x-admin-card 
                href="/admin/employees" 
                title="Manage Employees" 
                description="View, add, or remove employee accounts"
            />
        </div>
        <div class="flex-1">
        <x-admin-card 
            href="/admin/tables" 
                title="Manage Tables" 
                description="View, add, or remove tables"
            />
        </div>
</x-layout>