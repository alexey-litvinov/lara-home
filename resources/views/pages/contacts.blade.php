<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
@include('parts.mainmenu')


    <div class="container mx-auto px-4">
        {!! Form::open(['route' => 'forms.contact']) !!}

        <!-- Sender Field -->
            <div class="mb-4">
                {!! Form::label('sender', 'ИМЯ:') !!}
                {!! Form::text('sender', null, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
            </div>

            <!-- Email Field -->
            <div class="mb-8">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
            </div>

            <!-- Message Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('message', 'Сообщение:') !!}
                {!! Form::textarea('message', null, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline']) !!}
            </div>



            <!-- Submit Field -->
            <div class="mb-10">
                {!! Form::submit('Отправить', ['class' => 'cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full']) !!}
            </div>

        {!! Form::close() !!}
    </div>
</div>
</body>
</html>
