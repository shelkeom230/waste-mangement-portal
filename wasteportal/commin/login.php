<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>commissioner login</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
  body{
    background: url('../images/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 1;
    overflow: hidden;
  }
</style>
</head>
  <body class="flex items-center justify-center h-screen">
<div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
  <h2 class="text-3xl font-semibold text-center mb-6">Welcome Administrator</h2>
  <form id="loginForm" class="space-y-4">
    <div>
      <label for="username" class="block text-gray-700">Username:</label>
      <input type="text" id="username" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required placeholder="Your username here">
    </div>
    <div>
      <label for="password" class="block text-gray-700">Password:</label>
      <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required placeholder="Your password here">
    </div>
    <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 transition duration-200">Login</button>
  </form>
</div>
</body>
</html>