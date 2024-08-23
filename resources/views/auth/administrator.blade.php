@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CosmoConnect|Administrator</title>
    <link rel="stylesheet" href="{{ asset('../../css/administrator.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('../../js/administrator.js') }}" defer></script>
</head>
<body>
    <!-- USER SECTION -->
    <section id="users">
        <div class="users">
            <p>M O D E R A T O R I</p>
            <table id="moderators-table" class="horizontal-table">
                <tr>
                    <th>ID</th>
                    <th>Tip korisnika</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Mesto rođenja</th>
                    <th>Država rođenja</th>
                    <th>Datum rođenja</th>
                    <th>Pol</th>
                    <th>JMBG</th>
                    <th>Kontakt mobilni telefon</th>
                    <th>Adresa elektronske pošte</th>
                    <th>Ukloni korisnika</th>
                </tr>
                @foreach ($moderators as $moderator)
                <tr>
                    <td>{{ $moderator->id }}</td>
                    <td>{{ $moderator->type }}</td>
                    <td>{{ $moderator->first_name }}</td>
                    <td>{{ $moderator->last_name }}</td>
                    <td>{{ $moderator->place_of_birth }}</td>
                    <td>{{ $moderator->country_of_birth }}</td>
                    <td>{{ $moderator->date_of_birth }}</td>
                    <td>{{ $moderator->gender }}</td>
                    <td>{{ $moderator->jmbg }}</td>
                    <td>{{ $moderator->mobile_phone }}</td>
                    <td>{{ $moderator->email }}</td>
                    <td>
                        <form action="{{ route('destroyUser', $moderator->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('{{ $moderator->id }}')" style="background-color: transparent; border: none;"><i class="fas fa-times" style="color: rgb(137, 1, 1)"></i></button>
                        </form>         
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

        <div class="users">
            <p>K O R I S N I C I</p>
            <table id="users-table" class="horizontal-table" style="margin-bottom: 20px">
                <tr>
                    <th>ID</th>
                    <th>Tip korisnika</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Mesto rođenja</th>
                    <th>Država rođenja</th>
                    <th>Datum rođenja</th>
                    <th>Pol</th>
                    <th>JMBG</th>
                    <th>Kontakt mobilni telefon</th>
                    <th>Adresa elektronske pošte</th>
                    <th>Ukloni korisnika</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->place_of_birth }}</td>
                    <td>{{ $user->country_of_birth }}</td>
                    <td>{{ $user->date_of_birth }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->jmbg }}</td>
                    <td>{{ $user->mobile_phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('destroyUser', $user->id) }}" method="POST"  style="color: #444;">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('{{ $user->id }}')" style="background-color: transparent; border: none;"><i class="fas fa-times" style="color: rgb(137, 1, 1); background-color: #444;"></i></button>
                        </form>          
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>

    <script src="js/app.js"></script>
    <script src="js/ps.js"></script>
</body>
</html>
@endsection