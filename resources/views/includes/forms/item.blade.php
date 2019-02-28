<div class="input-container">
  <label for="{{ $name }}">{{ $label }}</label>
  @if ($type == 'textarea')
    <textarea
      id="{{ $name }}"
      name="{{ $name }}"
      @isset($required)
        required
      @endisset
    >
      {{ old($name) }}
    </textarea>
  @else
    <input
      type="{{ $type }}"
      id="{{ $name }}"
      name="{{ $name }}"
      @isset($placeholder)
        placeholder="{{ $placeholder }}"
      @endisset
      @isset($required)
        required
      @endisset
      value="{{ old($name) }}"
    >
  @endif
  @if ($errors->has($name))
    <label class="error" for="{{ $name }}">{{ $errors->first($name) }}</label>
  @endif
</div>