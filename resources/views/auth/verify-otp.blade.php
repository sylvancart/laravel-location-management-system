<x-guest-layout>
    <form method="POST" action="{{ route('verify-otp') }}">
        @csrf

        <input type="hidden" name="phone" value="{{ $phone }}" />

        <!-- OTP -->
        <div>
            <x-input-label for="otp" :value="__('OTP')" />
            <x-text-input id="otp" class="block mt-1 w-full" type="number" name="otp" required autofocus />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Verify OTP') }}
            </x-primary-button>
        </div>
    </form>

    <div class="flex items-center justify-end mt-4">
        <button id="resend-otp-button" class="bg-blue-500 text-white px-4 py-2 rounded">
            {{ __('Resend OTP') }}
        </button>
    </div>

    <p class="mt-4 text-gray-600 text-sm">
        {{ __('Please Check the browser console tab for the OTP.') }}
    </p>

    <script>
        console.log('OTP:', {{ $otp }});
    </script>

    <script>
        document.getElementById('resend-otp-button').addEventListener('click', function () {
            fetch('{{ route('resend-otp') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ phone: '{{ $phone }}' })
            })
            .then(response => response.json())
            .then(data => {
                console.log('OTP:', data.otp);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</x-guest-layout>