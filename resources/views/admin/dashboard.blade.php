<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #1c1e26; /* Dark background */
            color: #fff; /* Text color for better contrast */
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 25%;
            background-color: #2c2e3e; /* Dark gray sidebar */
            padding: 20px;
            color: #fff;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-image {
            width: 80px;
            height: auto;
            border-radius: 50%;
        }

        .sidebar-nav ul {
            list-style-type: none;
        }

        .sidebar-nav ul li {
            margin: 15px 0;
        }

        .sidebar-nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            display: block;
            padding: 10px;
            background-color: #323544; /* Darker background for each nav item */
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .sidebar-nav ul li a:hover {
            background-color: #5a5c7c; /* Hover effect */
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        /* Header */
        header {
            text-align: center;
            margin-bottom: 20px;
            background-color: #b4a76b; /* Gold-like color for the header */
            padding: 20px;
        }

        header h1 {
            font-size: 36px;
            color: #1c1e26; /* Dark color for the text in header */
        }

        /* Navbar (top navigation) */
        .top-nav {
            background-color: #2c2e3e; /* Match sidebar background */
            padding: 10px 0;
        }

        .top-nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
        }

        .top-nav ul li {
            margin: 0 15px;
        }

        .top-nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 8px;
            background-color: #323544; /* Slightly darker navbar items */
            border: none;
            transition: background-color 0.3s ease;
        }

        .top-nav ul li a:hover {
            background-color: #5a5c7c; /* Hover effect */
        }

        /* Content Area */
        .content-area {
            background-color: #1c1e26; /* Match body background */
            padding: 20px;
            border: 1px solid #444;
            border-radius: 10px;
            color: #fff; /* Light text color for better readability */
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('img/geng.jpeg') }}" alt="Logo" class="logo-image">
                <p>Bozzz</p>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.sidebar.artikel.index') }}">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.sidebar.event.index') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.sidebar.galeri.index') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.sidebar.klien.index') }}">Client</a>
                    </li>
                    <li>
                        @if (Route::has('login'))
                        <nav class="d-flex">
                            @auth
                                {{-- <a href="{{ url('/') }}" class="btn btn-secondary me-2">Dashboard</a> --}}
                                <a><li class="nav-item">
                                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Log Out</button>
                                    </form>
                                </li></a>
                                
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary me-2">Log In</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                                @endif
                            @endauth
                        </nav>
                        @endif
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header>
                <h1>Geng Motor Bozzz</h1>
            </header>

            <!-- Navbar -->
            <nav class="top-nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.navbar.profil') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.navbar.visimisi') }}">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.navbar.produk.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.navbar.about') }}">About</a>
                    </li>
                </ul>
            </nav>

            <!-- Content Area -->
            <br>
            <section class="content-area">
                <h1>Welcome to the company profile of Bozzz. This is where the content for the selected page will go.</h1>
            </section>
            <br>
            <div class="logo">
                <img src="{{ asset('img/mtr.png') }}" alt="Logo" class="logo-image" style="width: 350px; height: auto;">
                <p>Bozzz</p>
            </div>
        </main>
    </div>
</body>
</html>
