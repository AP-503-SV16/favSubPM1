
<div class="my-2">

    @props(['titulo', 'type', 'nombre'])
    <label for="email">{{ $titulo }}</label>
    <input type={{ $type }} name={{ $nombre }} class="border border-gray-800">

    @error($nombre)
    @enderror
    @error('email')
    <p>{{$message}}</p>
    @enderror

</div>
