@if (session()->has('message'))
<button class="alert__message success">
    <p>{{ session('message') }}</p>
</button>
@endif
