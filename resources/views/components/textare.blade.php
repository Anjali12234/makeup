@props(['id' => '','inputClass' => '','title' => '','type' => '', 'value' => ''])



<div class="form-group col-md-12">
    <textarea name="{{$id}}" id="editor" cols="50" rows="10">{{ $value}}</textarea>
    <span class="text-warning">
        @error('{{$id}}')
            {{ $message }}
        @enderror
    </span>
</div>