<div class="mt-2">
    @isset($attributes['label'])
        <label for="{{ $attributes->wire('model')->value }}">{{ $attributes['label'] }}
            @isset($attributes['require'])
                 <span class="text-danger">(*)</span>
            @endisset
        </label>
    @endisset
</div>