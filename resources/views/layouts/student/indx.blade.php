<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @extends ('layouts.app')
@section('head')
<title>student</title>
@endsection
</head>


@section('style')
 <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        background: #005bb5;
        overflow: hidden;
        display: flex;
        justify-content: center;
    }

    nav ul li {
        padding: 14px 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
    }

    .container {
        display: flex;
        flex: 1;
    }

    .sidebar {
        width: 250px;
        background: #aa8f8f;
        padding: 15px;
    }

    .main-content {
        flex: 1;
        padding: 20px;
    }

    footer {
        background: #004080;
        color: white;
        text-align: center;
        padding: 10px;
        position: relative;
        bottom: 0;
        width: 100%;
    }
</style>
@endsection

@section('content')
<section>
    <h2>
        student
    </h2>
    <div class="search">
        <input type="text" placeholder="search">
        <button>serach</button>
    </div>
    <table>
        <thaed>
            <tr>
             <th>id</th>
            </tr>
            
        </thead>
    </teble>

    