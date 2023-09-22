<div class="w-[75vw]">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @include('backend.user.components.user_row')
            @endforeach
        </tbody>
    </table>
</div>
