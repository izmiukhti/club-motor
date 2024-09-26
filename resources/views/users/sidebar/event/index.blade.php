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

        .sidebar-nav ul li a.active {
            background-color: #5a5c7c; /* Active button color */
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
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users.dashboard') ? 'active' : '' }}" href="{{ route('users.dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users/sidebar/artikel*') ? 'active' : '' }}" href="{{ route('users.sidebar.artikel.index') }}">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users/sidebar/event*') ? 'active' : '' }}" href="{{ route('users.sidebar.event.index') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users/sidebar/galeri*') ? 'active' : '' }}" href="{{ route('users.sidebar.galeri.index') }}">Gallery</a>
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
                        <a class="nav-link {{ request()->is('users/navbar/profil') ? 'active' : '' }}" href="{{ route('users.navbar.profil') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users/navbar/visimisi') ? 'active' : '' }}" href="{{ route('users.navbar.visimisi') }}">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users/navbar/produk/index') ? 'active' : '' }}" href="{{ route('users.navbar.produk.index') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users/navbar/about') ? 'active' : '' }}" href="{{ route('users.navbar.about') }}">About</a>
                    </li>
                </ul>
            </nav>

            <!-- Content Area -->
            <br>
            <section class="content-area">
                <h1 class="header-title">Upcoming Events Geng Motor Bozzz</h1>
                <br>
            
                <div class="card mb-4" style="width: 100%;">
                    <img src="{{ asset('img/event-ride.jpg') }}" class="card-img-top" alt="Charity Ride Event">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1c1e26;">Charity Ride for Local Community</h5>
                        <p class="card-text" style="color: #1c1e26;">
                            Ikuti perjalanan amal bersama Geng Motor Bozzz untuk mendukung komunitas lokal. Acara ini akan diadakan pada 
                            <strong>Sabtu, 12 Oktober 2024</strong>, dimulai dari pusat kota hingga pedesaan. Seluruh dana yang terkumpul 
                            akan disumbangkan untuk program pendidikan anak-anak kurang mampu. Yuk, berikan kontribusi sekaligus berkendara seru!
                        </p>
                        <a href="#" class="btn btn-primary">Detail Event</a>
                    </div>
                </div>
            
                <div class="card mb-4" style="width: 100%;">
                    <img src="{{ asset('img/event-meeting.jpg') }}" class="card-img-top" alt="Monthly Meeting Event">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1c1e26;">Monthly Gathering & Ride</h5>
                        <p class="card-text" style="color: #1c1e26;">
                            Geng Motor Bozzz mengadakan pertemuan bulanan dan tur malam yang akan berlangsung pada 
                            <strong>Jumat, 25 September 2024</strong>. Acara ini adalah kesempatan yang sempurna untuk para anggota berkumpul, 
                            berdiskusi mengenai event mendatang, dan tentunya menikmati perjalanan bersama.
                        </p>
                        <a href="#" class="btn btn-primary">Join Now</a>
                    </div>
                </div>
            
                <div class="card mb-4" style="width: 100%;">
                    <img src="{{ asset('img/') }}" class="card-img-top" alt="Motorcycle Race Event">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #1c1e26;">Annual Motorcycle Race</h5>
                        <p class="card-text" style="color: #1c1e26;">
                            Persiapkan diri Anda untuk mengikuti kompetisi balap motor tahunan yang akan digelar oleh Geng Motor Bozzz. 
                            Acara ini akan berlangsung pada <strong>Minggu, 5 November 2024</strong> di sirkuit lokal. Tunjukkan keahlian 
                            mengendarai Anda dan menangkan hadiah menarik!
                        </p>
                        <a href="#" class="btn btn-primary">Sign Up</a>
                    </div>
                </div>
            
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><h4>Tambah Event</h4></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
