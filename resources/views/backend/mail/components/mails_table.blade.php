<div class="w-[75vw]">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">subject</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mails as $mail)
                @include('backend.mail.components.mail_row')
            @endforeach
        </tbody>
    </table>
</div>