 @php
     $label ??= '';
     $name ??= '';
     $type ??= 'text';
     $value ??= null;
 @endphp


 <div class="flex flex-col py-2">
     <label for="{{ $name }}">{{ $label }}</label>
     @if ($type === 'textarea')
         <textarea class="textarea w-full" name="{{ $name }}" id="{{ $name }}" cols="30" rows="10">{{ $value ?? old($name) }}
            </textarea>
     @else
         <input name="{{ $name }}" id="{{ $name }}" type="{{ $type }}" value="{{ $value ?? old($name) }}"
             class="input w-full h-20 rounded-2xl" />
     @endif


     @error($name)
         <small class="text-red-500">{{ $message }}</small>
         <br>
     @enderror
 </div>

 <script>
     var simplemde = new SimpleMDE();
 </script>
