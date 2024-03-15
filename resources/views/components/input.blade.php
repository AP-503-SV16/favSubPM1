@props(['titulo', 'type', 'nombre'])

<label for="email">{{ $titulo }}</label>
<input type={{ $type }} name={{ $nombre }}>
@error($nombre)
@enderror
@error('email')
<p>{{$message}}</p>
@enderror

