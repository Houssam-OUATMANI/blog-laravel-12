 @php
     $label ??= '';
     $name ??= '';
     $type ??= 'text';
 @endphp


 <div>
     <label for="{{ $name }}">{{ $label }}</label>
     @if ($type === 'textarea')
         <textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="10">{{ old($name) }}
            </textarea>
     @else
         <input name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" value="{{ old($name) }}"
             class="input" />
     @endif


     @error($name)
         <div class="alert alert-error">{{ $message }}</div>
     @enderror
 </div>

 <script>
     var simplemde = new SimpleMDE();
 </script>
