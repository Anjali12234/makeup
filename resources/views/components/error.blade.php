
@props(['id' => ''])


<span class="text-warning">
    @error('$id')
        {{ $message }}
    @enderror
</span>