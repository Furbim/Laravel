@if (session('success'))
    <div class="bg-green-400/20 msg-box">
        <p class="text-green-600">{{ session('success') }}</p>
    </div>
@endif

@if (session('error'))
    <div class="bg-red-400/20 msg-box">
        <p class="text-red-600">{{ session('error') }}</p>
    </div>
@endif