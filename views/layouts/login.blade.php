<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required autofocus />
    </div>

    <div>
        <label for="password">