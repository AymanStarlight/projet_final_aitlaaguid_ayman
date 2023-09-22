<x-app-layout>
    <section class="w-screen">
        <form action={{ route('contact.update') }} method="POST" class='p-4' >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="address_1" class="form-label">Address 1</label>
                <input type="text" class="form-control" name="address_1" required
                    value="{{ old('address_1', $contact->address_1) }}">
            </div>
            <div class="mb-3">
                <label for="address_2" class="form-label">Address 2</label>
                <input type="text" class="form-control" name="address_2" required
                    value="{{ old('address_2', $contact->address_2) }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required
                    value="{{ old('location', $contact->email) }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" name="phone" required
                    value="{{ old('phone', $contact->phone) }}">
            </div>
            <div class="mb-3">
                <label for="map" class="form-label">Map</label>
                <input type="text" class="form-control" name="map" required value="{{ old('map', $contact->map) }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>

        </form>
    </section>
</x-app-layout>