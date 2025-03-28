{{-- Struktur header untuk blade templating --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - {{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ secure_asset('img/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('vendors/toastify/toastify.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ secure_asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendors/datatable/dataTables.bootstrap5.min.css') }}">

    <link href="{{ secure_asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ secure_asset('vendors/flatpickr/flatpickr.min.css') }}">
</head>