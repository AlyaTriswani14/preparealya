<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary {
            background-color: #2196F3;
            color: white;
        }
        .btn-secondary {
            background-color: #999;
            color: white;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>✏️ Edit Mahasiswa</h2>
        
        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>
            
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" value="{{ $mahasiswa->nim }}" required>
            </div>
            
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">💾 Update</button>
            <a href="/mahasiswa" class="btn btn-secondary">❌ Batal</a>
        </form>
    </div>
</body>
</html>
