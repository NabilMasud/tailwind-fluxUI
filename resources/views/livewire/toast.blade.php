<div>
    @if (session('message'))
        <x-toast-danger :message="session('message')" :toastType="$toastType" />
@endif

</div>
