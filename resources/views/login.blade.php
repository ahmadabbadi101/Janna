<x-layout>
    <x-page-heading>A Taste of Syrian Heaven</x-page-heading>

    <div class="max-w-lg mx-auto mt-15">
        <x-forms.form action="/login" method="POST">
            <x-forms.input label="Username" name="username" type="text" placeholder="Username" />
            <x-forms.input label="Password" name="password" type="password" placeholder="Password" />

            
                <x-forms.radio name="user_type" label="Customer" />
                <x-forms.radio name="user_type" label="Staff" />

                <div class="mt-1">
                    <x-forms.button type="submit">Login</x-forms.button>
                </div>

        </x-forms.form>
    </div>
    
</x-layout>