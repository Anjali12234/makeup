@props(['id' => '','spanClass' => '','title' => '','type' => '','value' => ''])

<div class="form-group col-md-12">
    <label for="{{ $id }}" class="inline-block mb-2 text-base font-medium">
        {{ $title }} <span class="{{ $spanClass }}">*</span>
    </label>
    <textarea name="{{ $id }}"  cols="50" rows="10">{!!$value!!}</textarea>
    <span class="text-warning">
        @error($id)
            {{ $message }}
        @enderror
    </span>
</div>
