<x-mail::message>
    # Store Published

    The store are registed ({{$store->name}}) has been Published

    <x-mail::button url="{route('stores.show',$store}">
        View Store
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>