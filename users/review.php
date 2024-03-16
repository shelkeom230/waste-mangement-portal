<?php 
include ('header.php');
include ('sidebar.php');
?>
<!DOCTYPE html>
<html 
lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>
</head>
<body>
    
<div class="max-w-md mx-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <!-- Nickname Input -->
        <div class="mt-3 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nickname">
                Nickname
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nickname" type="text" placeholder="Enter your nickname">
        </div>
        <!-- Review Textarea -->
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="review">
                Review
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="review" placeholder="Enter your review"></textarea>
        </div>
        <!-- Submit Button -->
        <div class="flex items-center justify-center">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Submit
            </button>
        </div>
    </form>
</div>

</body>
</html>

<?php 
include ('footer.php');
?>