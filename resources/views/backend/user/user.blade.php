<x-app-layout>
    <section class='d-flex flex-column justify-content-center align-items-center mt-4'>
        <div>
            @if (count($users) == 0)
                <h2>There is no Users</h2>
            @else
                @include('backend.user.components.users_table')
            @endif
        </div>
    </section>
</x-app-layout>
