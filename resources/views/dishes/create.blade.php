<x-layout>
    <x-page-heading>
        Create Dish
    </x-page-heading>
    <x-forms.form action="/admin/dishes" method="POST">
        @csrf
        <x-forms.input label="Name" name="name" type="text" placeholder="Dish Name" />
        <x-forms.input label="Price" name="price" type="text" placeholder="Price" />
        <x-forms.input label="Description" name="description" type="text" placeholder="Description" />

        <x-forms.field label="Category" name="category">
            <x-forms.radio label="Appetizer" name="category" />
            <x-forms.radio label="Platter" name="category" />
            <x-forms.radio label="Sandwich" name="category" />
            <x-forms.radio label="Drink" name="category" />
        </x-forms.field>

        <x-forms.button type="submit">Create</x-forms.button>
    </x-forms.form>
</x-layout>