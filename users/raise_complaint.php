<?php
include ("header.php");
include ('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raise complaint</title>

</head>
<link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
<body>
<div class="max-w-lg mx-auto mt-8">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <!-- Nickname Input -->
        <div>
            <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="mt-1 block w-full border-dark-300 rounded-md shadow-sm focus:border-black-400 focus:ring focus:ring-green-400 focus:ring-opacity-50" placeholder="your nickname here">
        </div>
        <br>
        <!-- Address Inputs (Dropdowns) -->
        <div class="grid grid-cols-3 gap-4">
            <!-- City Dropdown -->
            <div>
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <select id="city" name="city" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-400 focus:ring focus:ring-green-400 focus:ring-opacity-50">
                    <option value="">Select City</option>
                    <option value="amravati">Amravati</option>
                    <!-- Add city options here -->
                </select>
            </div>
            
            <!-- State Dropdown -->
            <div>
                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                <select id="state" name="state" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-400 focus:ring focus:ring-green-400 focus:ring-opacity-50">
                    <option value="">Select State</option>
                    <!-- Add state options here -->
                </select>
            </div>
            
            <!-- Country Dropdown -->
            <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <select id="country" name="country" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-400 focus:ring focus:ring-green-400 focus:ring-opacity-50">
                    <option value="">Select Country</option>
                    <!-- Add country options here -->
                </select>
            </div>
        </div>
        <br>
        
        <!-- Pictures (File Upload) Input -->
        <div>
            <label for="pictures" class="block text-sm font-medium text-gray-700">upload image</label>
            <input type="file" id="pictures" name="pictures" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-400 focus:ring focus:ring-green-400 focus:ring-opacity-50">
        </div>
        
        <br>
        <!-- Complaint Description (Textarea) -->
        <div>
            <label for="complaint-description" class="block text-sm font-medium text-gray-700">Complaint Description</label>
            <textarea id="complaint-description" name="complaint-description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-400 focus:ring focus:ring-green-400 focus:ring-opacity-50" placeholder="write in short what is your problem ?"></textarea>
        </div>
        <br>
        <!-- Submit Button -->
        <div>
            <button type="submit" class="bg-green-400 hover: text-white font-bold py-2 px-4 rounded align-items-center">Submit</button>
        </div>
    </form>
</div>


</body>
</html>

<?php
include ('footer.php');
?>