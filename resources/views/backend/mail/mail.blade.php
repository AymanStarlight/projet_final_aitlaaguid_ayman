<x-app-layout>
    <section class='d-flex flex-column justify-content-center align-items-center mt-4'>
        <div>
            @if (count($mails) == 0)
                <h2>There is no Messages</h2>
            @else
                @include('backend.mail.components.mails_table')
            @endif
        </div>
    </section>
</x-app-layout>
