@extends('home.home-admin.layouts.layout')

@section('title', 'Home - Lembaga Sertifikasi Profesi UGM')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Asesor</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen bg-gray-100 p-4">
  <div class="container mx-auto max-w-lg">
    <h2 class="text-2xl font-bold mb-4 text-center">Form Tambah Asesor</h2>

    <form id="asesor-form" onsubmit="return saveAsesor(event)" class="bg-white p-6 rounded-md shadow-md">
      <input type="hidden" id="asesor-id">

      <!-- Kode Registrasi -->
      <div class="mb-4">
        <label for="kode-registrasi" class="block text-gray-700">Kode Registrasi:</label>
        <input type="text" id="kode-registrasi" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Nama Asesor -->
      <div class="mb-4">
        <label for="nama-asesor" class="block text-gray-700">Nama Asesor:</label>
        <input type="text" id="nama-asesor" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- No Sertifikat -->
      <div class="mb-4">
        <label for="no-sertifikat" class="block text-gray-700">No Sertifikat:</label>
        <input type="text" id="no-sertifikat" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label for="email-asesor" class="block text-gray-700">Email:</label>
        <input type="email" id="email-asesor" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Alamat -->
      <div class="mb-4">
        <label for="alamat" class="block text-gray-700">Alamat:</label>
        <input type="text" id="alamat" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Additional Fields -->

      <!-- Nomor Telepon -->
      <div class="mb-4">
        <label for="no-telp" class="block text-gray-700">Nomor Telepon:</label>
        <input type="text" id="no-telp" class="w-full p-2 border rounded-md">
      </div>

      <!-- Nomor KTP -->
      <div class="mb-4">
        <label for="no-ktp" class="block text-gray-700">Nomor KTP:</label>
        <input type="text" id="no-ktp" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Tempat Lahir -->
      <div class="mb-4">
        <label for="tempat-lahir" class="block text-gray-700">Tempat Lahir:</label>
        <input type="text" id="tempat-lahir" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Tanggal Lahir -->
      <div class="mb-4">
        <label for="tanggal-lahir" class="block text-gray-700">Tanggal Lahir:</label>
        <input type="date" id="tanggal-lahir" class="w-full p-2 border rounded-md" required>
      </div>

      <!-- Jenis Kelamin -->
      <div class="mb-4">
        <label for="jenis-kelamin" class="block text-gray-700">Jenis Kelamin:</label>
        <select id="jenis-kelamin" class="w-full p-2 border rounded-md" required>
          <option value="">Pilih</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>

      <!-- Pendidikan Terakhir -->
      <div class="mb-4">
        <label for="pendidikan-terakhir" class="block text-gray-700">Pendidikan Terakhir:</label>
        <input type="text" id="pendidikan-terakhir" class="w-full p-2 border rounded-md">
      </div>

      <!-- Keahlian -->
      <div class="mb-4">
        <label for="keahlian" class="block text-gray-700">Keahlian:</label>
        <input type="text" id="keahlian" class="w-full p-2 border rounded-md">
      </div>

      <!-- Kebangsaan -->
      <div class="mb-4">
        <label for="kebangsaan" class="block text-gray-700">Kebangsaan:</label>
        <input type="text" id="kebangsaan" class="w-full p-2 border rounded-md">
      </div>

      <!-- Gelar Depan -->
      <div class="mb-4">
        <label for="gelar-depan" class="block text-gray-700">Gelar Depan:</label>
        <input type="text" id="gelar-depan" class="w-full p-2 border rounded-md">
      </div>

      <!-- Gelar Belakang -->
      <div class="mb-4">
        <label for="gelar-belakang" class="block text-gray-700">Gelar Belakang:</label>
        <input type="text" id="gelar-belakang" class="w-full p-2 border rounded-md">
      </div>

      <!-- Institusi Asal -->
      <div class="mb-4">
        <label for="institusi-asal" class="block text-gray-700">Institusi Asal:</label>
        <input type="text" id="institusi-asal" class="w-full p-2 border rounded-md">
      </div>

      <!-- No Telp Institusi Asal -->
      <div class="mb-4">
        <label for="no-telp-institusi-asal" class="block text-gray-700">No Telp Institusi Asal:</label>
        <input type="text" id="no-telp-institusi-asal" class="w-full p-2 border rounded-md">
      </div>

      <!-- Fax Institusi Asal -->
      <div class="mb-4">
        <label for="fax-institusi-asal" class="block text-gray-700">Fax Institusi Asal:</label>
        <input type="text" id="fax-institusi-asal" class="w-full p-2 border rounded-md">
      </div>

      <!-- Email Institusi Asal -->
      <div class="mb-4">
        <label for="email-institusi-asal" class="block text-gray-700">Email Institusi Asal:</label>
        <input type="email" id="email-institusi-asal" class="w-full p-2 border rounded-md">
      </div>

      <div class="flex justify-end mt-4">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Simpan</button>
      </div>
    </form>
  </div>
</div>

<script>
  function saveAsesor(event) {
    event.preventDefault();
    // Tambahkan logika untuk menyimpan data ke backend
    alert('Data asesor berhasil disimpan.');
  }
</script>
</body>
</html>
@endsection
