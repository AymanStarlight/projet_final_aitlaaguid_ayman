<tr class="fs-5">
    <td>
        {{ $user->name }}
    </td>
    <td>
        {{ $user->email }}
    </td>
    <td class="d-flex justify-content-between">
        <div class="flex flex-col justify-center items-center">
            @foreach ($user->getRoleNames() as $role)
                <p class="m-0">{{ $role }}</p>
            @endforeach
        </div>
        <div class="d-flex justify-between items-center">
            <form action={{ route('user.webmaster', $user->id) }} method="POST">
                @csrf
                @if ($user->hasRole('webmaster'))
                    <button type="submit" class="btn btn-link"><i class="fa-brands fa-gg-circle fa-lg"
                            style="color: #FFD700;"></i></button>
                @else
                    <button type="submit" class="btn btn-link"><i class="fa-brands fa-gg-circle fa-lg"
                            style="color: #808080;"></i></button>
                @endif
            </form>
            <form action={{ route('user.delete', $user->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link"><i class="fa-solid fa-circle-xmark fa-lg"
                        style="color: #ff0000;"></i></button>
            </form>
        </div>
    </td>
</tr>
