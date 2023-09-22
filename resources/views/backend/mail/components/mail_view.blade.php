<!-- Button trigger modal -->
<button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#static{{ $mail->id }}Backdrop">
    <i class="fa-solid fa-circle-info fa-lg" style="color: #9e9e9e;"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="static{{ $mail->id }}Backdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="static{{ $mail->id }}BackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="static{{ $mail->id }}BackdropLabel">Message</h1>
                <form action={{ route('mail.viewedT', $mail->id) }} method="POST">
                    @csrf
                    @method('PUT')
                    <button type="sumbit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </form>
            </div>
            <div class="modal-body">
                {{ $mail->message }}
            </div>
            <div class="modal-footer">
                <form action={{ route('mail.viewedT', $mail->id) }} method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
