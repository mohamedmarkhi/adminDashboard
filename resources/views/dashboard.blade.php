<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <nav style="background:black;color:white;padding:10px;">
        Navbar - My App
    </nav>

    <div style="display:flex;">
        
        <aside style="width:200px;background:#eee;height:100vh;">
            Sidebar
        </aside>

        <main style="padding:20px;">
            @yield('content')
        </main>

    </div>

</body>
</html>