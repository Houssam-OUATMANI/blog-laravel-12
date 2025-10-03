 @php
     $label ??= "";
     $name ??= "";
     $type ??= "text";
 @endphp


 <div>
        <label for="{{$name}}">{{$label}}</label>
        <input name="{{$name}}"
               id="{{$name}}"
               type="{{$type}}"
               value="{{old($name)}}"
               class="input"
               />

    @error($name)
        <div class="alert alert-error">{{$message}}</div>
    @enderror
</div>

