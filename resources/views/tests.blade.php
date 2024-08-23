
@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CosmoConnect | Anketa</title>
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
<!-- SECTION -->
    <section id="services">
    @if (auth()->user()->type == 'moderator')
        <div id="ctn1">
            <button class="button3" style="width:100%; padding:10px" onclick="togglePollForm()">Kreiraj anketu</button>
        </div>
    @endif
        @if ($polls->isEmpty())
            <div hidden id="pollForm">
                <div class="test-form">
                <form action="{{ route('storePoll') }}" method="post">
                    @csrf
                    <input type="hidden" name="topic_id" value="{{$topic_id}}">

                    <label for="pollQuestion">Unesi pitanje:</label>
                    <input type="text" id="pollQuestion" name="pollQuestion" required>

                    <label for="pollOption1">Unesi prvi odgovor:</label>
                    <input type="text" id="pollOption1" name="pollOption1" required>

                    <label for="pollOption2">Unesi drugi odgovor:</label>
                    <input type="text" id="pollOption2" name="pollOption2" required>

                    <label for="pollOption3">Unesi treći odgovor:</label>
                    <input type="text" id="pollOption3" name="pollOption3" required>

                    <button type="submit" class="button1">Kreiraj anketu</button>
                </form>
                </div>
            </div>
        @else
            <div id="additionalPolls">
                @if ($message = Session::get('success'))
                    <div>
                        <h6>{{ $message }}</h6>
                    </div>
                @endif

                @foreach ($polls as $poll)
                    <div class="poll-entry">
                        <h4>{{ $poll->question }}</h4>
                        <form action="{{ route('vote', $poll->id) }}" method="post">
                            @csrf
                            <button type="submit" name="option" value="0">{{ $poll->options[0] }}</button>
                            <button type="submit" name="option" value="1">{{ $poll->options[1] }}</button>
                            <button type="submit" name="option" value="2">{{ $poll->options[2] }}</button>
                        </form>
                        <p>Rezultati: {{ implode(', ', $poll->votes) }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
    
    <script>
        function togglePollForm() {
            document.getElementById('pollForm').hidden = !document.getElementById('pollForm').hidden;
        }
    </script>
<!-- SECTION END -->
</body>
</html>

@endsection