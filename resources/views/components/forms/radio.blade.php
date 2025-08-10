@props(['name', 'label'])

<input type="radio" id={{$label}} name="{{$name}}" value="{{$label}}" class="mr-2">
<label for="{{$label}}" class="mr-6">{{$label}}</label>