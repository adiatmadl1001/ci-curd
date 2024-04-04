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
        /* Custom styles */
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
            <h1 class="text-white text-xl font-bold mt-1">Employee Table</h1>
        </div>
        <form action="<?= base_url('/employees-form') ?>" method="get">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                <span><i class="fas fa-plus-circle mr-2"></i> Add New Employee</span>
            </button>
        </form>
    </header>
    <!-- Employee Table -->
    <div class="container mx-auto py-8">
        <?php if (session()->getFlashdata('successdel')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-2 mb-2" role="alert">
                <?= session()->getFlashdata('successdel') ?>
            </div>
        <?php endif; ?>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr class="border-b">
                    <!-- <th class="text-left p-3 px-5">No.</th> -->
                    <th class="text-left p-3 px-5">No.</th>
                    <th class="text-left p-3 px-5">ID</th>
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Role</th>
                    <th class="text-left p-3 px-5">Address</th>
                    <th class="text-left p-3 px-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; 
                foreach ($getEmployees as $employees) { ?>
                <tr class="border-b hover:bg-gray-100">
                    <!-- <td class="p-3 px-5">1</td> -->
                    <td class="p-3 px-5"><?= $no; ?></td>
                    <td class="p-3 px-5"><?= $employees['id']; ?></td>
                    <td class="p-3 px-5"><?= $employees['name']; ?></td>
                    <td class="p-3 px-5"><?= $employees['email']; ?></td>
                    <td class="p-3 px-5"><?= $employees['role']; ?></td>
                    <td class="p-3 px-5"><?= $employees['address']; ?></td>
                    <td class="flex p-3 px-5 space-x-2">
                        <form action="<?= base_url("employees/edit/". $employees['id']); ?>" method="get">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                <i class="fas fa-edit"></i>Edit
                            </button>
                        </form>
                        <form action="<?= base_url("employees/delete/".$employees['id']); ?>" method="get">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full ml-2">
                                <i class="fas fa-trash-alt"></i>Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php $no++;
                } ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>
</html>