@props(['message'])

@if(isset($message))
<div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded">
    {{$message}}
</div>
@endif
