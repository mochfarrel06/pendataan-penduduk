<form action="/simpan" method="POST">
    @csrf @method('put')
    <button type="submit">Submit {{$nama}}</button>
</form>

<a href="{{route('dashboard')}}">Ke halaman dashboard</a>