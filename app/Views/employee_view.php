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
            <h1 class="text-white text-xl font-bold mt-1"><a href="<?=base_url('/')?>">Employee Table</a></h1>
        </div>
        <form action="<?= base_url('/employees-form') ?>" method="get">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                <span><i class="fas fa-plus-circle mr-2"></i> Add New Employee</span>
            </button>
        </form>
    </header>
    <!-- Employee Table -->
    <div class="container mx-auto py-8">
        <div class="flex justify-between">
            <div class="flex items-center mb-2">
                <form action="">
                    <input name="q" type="text" placeholder="Search..." class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500">
                    <button type="submit" class="ml-0.5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fas fa-search" style="color: #ffffff;"></i>
                    </button>
                </form>
            </div>
            <div class="relative">
                <form action="">
                    <select class="border border-gray-300 focus:outline-none focus:border-blue-500 rounded-lg py-2 pl-4 pr-10 block appearance-none leading-normal">
                        <option value="" disabled selected>Select Role</option>
                        <option value="Developer">Developer</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="Designer">Designer</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-5-5 1.5-1.5L10 9l3.5-3.5L15 7z"/></svg>
                    </div>
                </form>
            </div>
        </div>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold"><?= session()->getFlashdata('success') ?></strong>
            </div>
        <?php elseif (session()->getFlashdata('update')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold"><?= session()->getFlashdata('update') ?></strong>
            </div>
        <?php elseif (session()->getFlashdata('delete')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold"><?= session()->getFlashdata('delete') ?></strong>
            </div>
        <?php endif; ?>
        <table class="mt-4 min-w-full bg-white shadow-md rounded">
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