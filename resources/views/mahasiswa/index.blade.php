<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - Web Tabular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            max-width: 800px;
            background-color: white;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
        <div style="background-color: #4CAF50; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
            ✅ {{ session('success') }}
        </div>
        @endif
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2>📚 Data Mahasiswa</h2>
            <a href="/mahasiswa/create" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                ➕ Tambah Baru
            </a>
        </div>
        
        @if($mahasiswa->count() > 0)
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>
                        <a href="/mahasiswa/{{ $mhs->id }}/edit" style="background-color: #2196F3; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; margin-right: 5px;">
                            ✏️ Edit
                        </a>
                        <form action="/mahasiswa/{{ $mhs->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus data {{ $mhs->nama }}?')" style="background-color: #f44336; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">
                                🗑️ Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p style="margin-top: 20px; color: #666;">
            Total: <strong>{{ $mahasiswa->count() }}</strong> mahasiswa
        </p>
        @else
        <p style="color: #999;">Belum ada data mahasiswa. Silakan tambahkan data di database.</p>
        @endif
    </div>
</body>
</html>
