<x-layout>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <h1>Log in</h1>
    <form action="/login" method="POST">
        @csrf
        <div >
          <x-input titulo="Email" type="text" nombre="email"/>
        </div>

        <div>
           <x-input titulo="password" type="password" nombre="password"/>
        </div>

        <button type="submit">log in</button>
    </form>
</x-layout>
