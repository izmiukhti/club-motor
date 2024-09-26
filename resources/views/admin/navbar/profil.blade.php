<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Geng Motor Bozzz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            width: 15%;
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

        .top-nav {
            display: flex; /* Horizontal layout */
            justify-content: center; /* Center elements in navbar */
            background-color: #2c2e3e; /* Navbar background */
            padding: 10px 0; /* Top and bottom padding */
        }

        .top-nav ul {
            list-style-type: none; /* Remove bullet points */
            display: flex; /* Horizontal layout */
            padding: 0; /* Remove default padding */
        }

        .top-nav ul li {
            margin: 0 15px; /* Space between items */
        }

        .top-nav ul li a {
            text-decoration: none; /* Remove underline from links */
            color: #fff; /* Text color */
            font-size: 18px; /* Font size */
            padding: 8px 12px; /* Padding for links */
            border-radius: 8px; /* Round corners for links */
            background-color: #323544; /* Default link color */
            transition: background-color 0.3s ease; /* Smooth transition for color */
        }

        /* Active button color */
        .top-nav ul li a.active {
            background-color: #5a5c7c; /* Active button color */
        }

        /* Content Area */
        .content-area {
            background-color: #1c1e26; /* Match body background */
            padding: 20px;
            border: 1px solid #444;
            border-radius: 10px;
            color: #fff; /* Light text color for better readability */
        }

        .header-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: #C0B283;
        }

        .member-list {
            list-style-type: none; /* Remove bullet points */
            padding: 0;
        }

        .member-list li {
            background-color: #f8f9fa;
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            color: #1c1e26; /* Dark text for better contrast */
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
                    <li><a href="#">Home</a></li>
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
                                    <a>
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Log Out</button>
                                            </form>
                                        </li>
                                    </a>
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
                <ul class="nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/navbar/profil') ? 'active' : '' }}" href="{{ route('admin.navbar.profil') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/navbar/visimisi') ? 'active' : '' }}" href="{{ route('admin.navbar.visimisi') }}">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/navbar/produk') ? 'active' : '' }}" href="{{ route('admin.navbar.produk.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/navbar/about') ? 'active' : '' }}" href="{{ route('admin.navbar.about') }}">About</a>
                    </li>
                </ul>
            </nav>

            <!-- Content Area -->
            <br>
            <section class="content-area">
                <h1 class="header-title">Profil Geng Motor Bozzz</h1>
                <br>
                <h3>Nama Geng: Geng Motor Bozzz</h3>
                <p>Deskripsi: Geng Motor Bozzz adalah komunitas pecinta sepeda motor yang berdedikasi untuk berkendara dengan aman, saling mendukung, dan berbagi pengalaman di jalan.</p>
                <br>
                <h3>Anggota</h3>
                <ul class="member-list">
                    <li>1. Izmi - Ketua</li>
                    <li>2. Boy - Wakil Ketua</li>
                    <li>3. Muti - Sekretaris</li>
                    <li>4. Dedi - Bendahara</li>
                    <li>5. Eko - Anggota</li>
                </ul>
                <br>
                <h3>Kontak</h3>
                <p>Email: <a href="mailto:gengbozzz@example.com" style="color: #C0B283;">gengbozzz@example.com</a></p>
                <p>Telepon: +62 812 3456 7890</p>

                <h3>Sosial Media</h3>
                <p>Instagram: <a href="https://instagram.com/gengmotor_bozzz" target="_blank" style="color: #C0B283;">@gengmotor_bozzz</a></p>
            </section>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
