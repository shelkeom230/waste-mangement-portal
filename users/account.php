<?php 

include ('header.php');
include ('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user account</title>
</head>
<body>
<form class="max-w-md mx-auto">
    <!-- Disabled Text Field for Nickname -->
    <div class="mb-4">
        <label for="nickname" class="block text-gray-700 text-sm font-bold mb-2">Nickname</label>
        <input id="nickname" type="text" value="UserNickname" disabled class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Old Password Input -->
    <div class="mb-4">
        <label for="old-password" class="block text-gray-700 text-sm font-bold mb-2">Old Password</label>
        <input id="old-password" type="password" placeholder="Enter old password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- New Password Input -->
    <div class="mb-4">
        <label for="new-password" class="block text-gray-700 text-sm font-bold mb-2">New Password</label>
        <input id="new-password" type="password" placeholder="Enter new password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Retype Password Input -->
    <div class="mb-4">
        <label for="retype-password" class="block text-gray-700 text-sm font-bold mb-2">Retype Password</label>
        <input id="retype-password" type="password" placeholder="Retype new password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <!-- Change Password Button -->
    <div class="flex justify-center">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Change Password</button>
    </div>
</form>

</body>
</html>

<?php 
include ('footer.php');
?>