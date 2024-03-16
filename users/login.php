<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users Login</title>
    <!-- Include Tailwind CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* Prevents scrolling */
}

#video-bg {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
}
#signup{
  text-align:center;
  margin-top:5px;
}


  </style>

  <body class="flex items-center justify-center h-screen">
  <video autoplay muted loop id="video-bg">
        <source src="../images/bguser.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
<div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
  <h2 class="text-3xl font-semibold text-center mb-6">Welcome Nature <br> Lover</h2>
  <form id="loginForm" class="space-y-4">
    <div>
      <label for="username" class="block text-gray-700">Nickname:</label>
      <input type="text" id="username" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required placeholder="Your nickname here">
    </div>
    <div>
      <label for="password" class="block text-gray-700">Password:</label>
      <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" required placeholder="Your password here">
    </div>
    <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 transition duration-200">Login</button>
  </form>
  <p id="signup">Dont have an account ? <a href="signup.php" target="_blank">Signup</a>
</div>
</body>
</html>
