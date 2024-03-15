<x-layout>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h1>Sing In</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
            <x-input titulo="Name" type="text" nombre="email"/>
        </div>

        <div>
           <x-input titulo="Email" type="text" nombre="email"/>
        </div>

        <div>
           <x-input titulo="Password" type="password" nombre="password"/>
        </div>

        <div>
           <x-input titulo="Birthday" type="birthday" nombre="birthday"/>
        </div>

        <button type="submit">Submit</button>

    </form>
</x-layout>




