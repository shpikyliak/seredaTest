<!DOCTYPE html>
<html>
<head>
    <title>Sereda Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form name="create-certificate" id="create-certificate-form" method="post" action="{{route("generate")}}">
                @csrf
                <div class="form-group">
                    <label for="number">Номер сертифіката</label>
                    <input type="text" id="number" name="number" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="title">Назва курсу</label>
                    <input type="text" id="title" name="title" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="student_name">Ім'я учня</label>
                    <input type="text" id="student_name" name="student_name" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="finish_date">Дата завершення курсу</label>
                    <input type="date" id="finish_date" name="finish_date" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Отримати сертифікат</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
