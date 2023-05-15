<x-layout>
    @if ($private_keys->count() === 0)
        <h2>Create private key</h2>
        <div>You need to create a private key before you can create a server.</div>
        <livewire:private-key.create />
    @else
        <livewire:server.new.by-ip :private_keys="$private_keys" />
    @endif
</x-layout>
