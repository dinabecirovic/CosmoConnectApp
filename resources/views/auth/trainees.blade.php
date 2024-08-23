@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CosmoConnect</title>
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/moderator.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('../../js/dom.js') }}" defer></script>
</head>
<body>
    
    <div class="trainees">
        @foreach ($topics as $topic)
            @if (isset($usersPerTopic[$topic->id]) && count($usersPerTopic[$topic->id]) > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Tema</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Ukloni korisnika</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersPerTopic[$topic->id] as $user)
                            <tr>
                                <td>{{ $topic->topic_title }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('removeUserFromTopic', ['user_id' => $user->id, 'topic_id' => $topic->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background-color: transparent; border: none;"><i class="fas fa-times" style="color: rgb(137, 1, 1)"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                
            @endif
        @endforeach
    </div>
</body>
</html>
@endsection
