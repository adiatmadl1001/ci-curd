<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="armada.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>PT. Mekar Armada Jaya</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #EFEFEF;
        }
    </style>
</head>
<body>
    <!-- Header with logo -->
    <header class="flex justify-between items-center bg-blue-600 p-4">
        <div class="flex space-x-2">
            <div>
                <img src="<?=base_url('img/ico.png')?>" alt="PT Mekar Armada Jaya" class="header-logo w-10">
            </div>
            <h1 class="text-white text-xl font-bold mt-1"><a href="<?=base_url('/')?>">Employee Table</a></h1>
        </div>
        <form action="<?= base_url('/row-form') ?>" method="get">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                <span><i class="fas fa-plus-circle mr-2"></i> Add New Employee</span>
            </button>
        </form>
    </header>
    <div class="container mx-auto py-8">
        <table class="mt-4 min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">No.</th>
                    <th class="text-left p-3 px-5">Dropbox ID</th>
                    <th class="text-left p-3 px-5">Invoicing ID</th>
                    <th class="text-left p-3 px-5">Invoice Number</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; 
                foreach ($dropbox as $row) { ?>
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3 px-5"><?= $no; ?></td>
                    <td class="p-3 px-5"><?= $row['dropbox_id']; ?></td>
                    <td class="p-3 px-5"><?= $row['invoicing_id']; ?></td>
                    <td class="p-3 px-5"><?= $row['no_invoice']; ?></td>
                    <td class="flex p-3 px-5 space-x-2">
                        <button type="button" class="info-btn inline-flex items-center px-2 py-1 border border-transparent text-xs font-semibold rounded-md text-blue-600 bg-blue-200 hover:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2" data-index="" data-bs-toggle="modal" data-bs-target="#infoModal">
                            Info
                        </button>
                    </td>
                </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>