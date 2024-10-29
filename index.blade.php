<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone">
        <button type="submit">Add Contact</button>
    </form>

    <ul>
        @foreach ($contacts as $contact)
            <li>{{ $contact->name }} - {{ $contact->email }} - {{ $contact->phone }}</li>
        @endforeach
    </ul>
</body>
</html>
