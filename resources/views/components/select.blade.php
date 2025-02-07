@props(['id' => '', 'spanClass' => '', 'title' => '', 'type' => '', 'value' => '', 'selected' => null, 'list' => []])

<div class="mb-4">
    <label for="{{ $id }}" class="inline-block mb-2 text-base font-medium">
        {{ $title }} <span class="{{ $spanClass }}">*</span>
    </label>
    <select 
        class="form-select border-slate-200 dark:border-zinc-500 
        focus:outline-none focus:border-custom-500 disabled:bg-slate-100 
        dark:disabled:bg-zinc-600 disabled:border-slate-300 
        dark:disabled:border-zinc-500 dark:disabled:text-zinc-200
        disabled:text-slate-500 dark:text-zinc-100 dark:bg-zinc-700
        dark:focus:border-custom-800 placeholder:text-slate-400
        dark:placeholder:text-zinc-200" 
        id="{{ $id }}" 
        name="{{ $id }}">
        <option selected disabled value="">Choose...</option>
        @foreach ($list as $label)
            <option value="{{ $label->value }}" 
                {{ $selected == $label->value ? 'selected' : '' }}>
                {{ $label->label() }}
            </option>
        @endforeach
    </select>
</div>
