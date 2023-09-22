@php
    $viewed = $mail->viewed ? 'table-success' : '';
@endphp

<tr class="fs-5 {{ $viewed }}">
    <td>
        {{ $mail->name }}
    </td>
    <td>
        {{ $mail->email }}
    </td>
    <td class="d-flex justify-content-between">
        <div class="flex flex-col justify-center items-center">
            {{ $mail->subject }}
        </div>
        <div class="d-flex justify-between items-center">
            @include('backend.mail.components.mail_view')
            <form action={{ route('mail.viewed', $mail->id) }} method="POST">
                @csrf
                @method('PUT')
                @if ($mail->viewed)
                    <button type="submit" class="btn btn-link"><i class="fa-solid fa-eye-slash fa-lg" style="color: #eb0000;"></i></button>
                @else
                    <button type="submit" class="btn btn-link"><i class="fa-solid fa-eye fa-lg" style="color: #00cc33;"></i></button>
                @endif
            </form>
            <form action={{ route('mail.delete', $mail->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link"><i class="fa-solid fa-circle-xmark fa-lg"
                        style="color: #ff0000;"></i></button>
            </form>
        </div>
    </td>
</tr>
