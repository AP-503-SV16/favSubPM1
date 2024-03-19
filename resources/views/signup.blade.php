<x-layout>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h1 class="text-4xl mt-12 mb-10">Sing In</h1>
    <form action="/register" method="POST">

        @csrf

            <x-input titulo="Name" type="text" nombre="email"/>



           <x-input titulo="Email" type="text" nombre="email"/>



           <x-input titulo="Password" type="password" nombre="password"/>



           <x-input titulo="Birthday" type="birthday" nombre="birthday"/>


        <button type="submit">Submit</button>

    </form>
</x-layout>




