
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Basic HTML Template</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
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
    @yield('styles')
</head>

<body>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/aboutus">About Us</a></li>
            <li><a href="/contactus">Contact Us</a></li>
            <li><a href="/services">Services</a></li>
        </ul>
    </nav>


    <!-- Main Container -->
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Sidebar</h2>

            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </aside>
           

        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>

    </div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2026 My Website. All rights reserved.</p>
    </footer>


    @yield('scripts')

</body>
</html>
