<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="armada.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>PT. Mekar Armada Jaya</title>
</head>
<body>
    <header class="flex space-x-2 items-center bg-blue-600 p-4">
        <div>
            <img src="<?= base_url('img\ico.png') ?>" alt="PT Mekar Armada Jaya" class="header-logo w-10">
        </div>
        <h1 class="text-white text-xl font-bold"><a href="<?=base_url('/')?>">Form Employee</a></h1>
    </header>
    <div class="flex">
        <div class="w-1/2">
            <div class="container mx-10 mt-7">
                <h1 class="text-3xl font-semibold mb-4">Register</h1>
                <form action="<?= base_url('/employees-form') ?>" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required >
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required >
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                        <select id="role" name="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required >
                            <option value="" disabled selected>Select Position</option>
                            <option value="Developer">Developer</option>
                            <option value="Project Manager">Project Manager</option>
                            <option value="Designer">Designer</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                        <input type="text" id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required >
                    </div>
                    <div class="flex items-center space-x-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>  
        <!-- Bagian kanan untuk logo perusahaan -->
        <div class="flex justify-center items-center w-1/2">
            <img src="<?= base_url('img\ico.png') ?>" alt="Company Logo" class="w-fit">
        </div>
    </div>
</body>
</html>