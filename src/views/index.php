<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        @media (max-width: 640px) {

            /* Responsive styles for small devices */
            .form-container {
                padding: 12px;
            }

            .table-container {
                overflow-x: auto;
                /* Enable horizontal scroll on small screens */
                -webkit-overflow-scrolling: touch;
                /* Smooth scrolling on iOS */
            }
        }
    </style>
</head>

<body class="bg-gray-100 p-4 md:p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6 text-center">Data Mahasiswa</h1>
        <div class="form-container bg-white rounded shadow-md mb-6">
            <form method="POST" action="add.php" class="px-4 py-6 md:p-6">
                <div class="mb-4">
                    <input type="text" name="nim" placeholder="NIM" required class="w-full px-4 py-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <input type="text" name="nama" placeholder="Nama" required class="w-full px-4 py-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <input type="text" name="jurusan" placeholder="Jurusan" required class="w-full px-4 py-2 border border-gray-300 rounded">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:bg-blue-600">Submit</button>
            </form>
        </div>

        <div class="table-container bg-white rounded shadow-md overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">NIM</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jurusan</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr data-id="<?php echo htmlspecialchars($mhs['nim']); ?>">
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($mhs['nim']); ?></td>
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($mhs['nama']); ?></td>
                            <td class="border px-4 py-2"><?php echo htmlspecialchars($mhs['jurusan']); ?></td>
                            <td class="border px-4 py-2">
                                <form method="POST" action="delete.php" class="inline">
                                    <input type="hidden" name="nim" value="<?php echo htmlspecialchars($mhs['nim']); ?>">
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:bg-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <form method="GET" action="index.php" class="mt-6 text-center">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:bg-green-600">Refresh</button>
        </form>
    </div>

</body>

</html>