<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroClima Kabupaten Garut</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f7f6; 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh;
        }
        header { background-color: #1e7e34; color: white; padding: 20px; text-align: center; }
        
        footer { 
            background-color: #1e7e34; 
            color: white; 
            text-align: center; 
            padding: 15px; 
            font-size: 0.9em; 
            margin-top: auto;
        }
        
        .container { padding: 30px; max-width: 900px; margin: auto; background: white; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-top: 30px; margin-bottom: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #28a745; color: white; }
        input, select { width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; border-radius: 4px; border: 1px solid #ccc; box-sizing: border-box;}
        button { background-color: #28a745; color: white; border: none; cursor: pointer; font-weight: bold; padding: 12px 20px; border-radius: 4px; width: 100%;}
        button:hover { background-color: #218838; }
    </style>
</head>
<body>
    <header>
        <h1>AgroClima Kabupaten Garut</h1>
    </header>

    {{-- Memanggil Partial Navbar --}}
    @include('partials.navbar')

    <div class="container">
        {{-- Area Konten Dinamis --}}
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 AgroClima Kelompok Tani Makmur Kabupaten Garut</p>
    </footer>
</body>
</html>