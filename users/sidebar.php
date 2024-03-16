<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar users</title>
</head>

<link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      #sidebardata,span{
         background-color: #68D391;
         color:#fff;
         font-weight:bold;
         text-align:center;
      }
      
    </style>
<body>
    

<button id="sidebar-toggle" data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="bg-success inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Toggle Sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800" id="sidebardata">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="raise_complaint.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
                  
               
            <span class="flex-1 ms-3 whitespace-nowrap">raise complaint</span>
            </a>
         </li>
         
         <li>
            <a href="dumping_areas.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
                 
              
            <span class="flex-1 ms-3 whitespace-nowrap">spot dumping areas</span>
            </a>
         </li>
         
         <li>
            <a href="review.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               
                  
               <span class="flex-1 ms-3 whitespace-nowrap">add a review</span>
              
            </a>
         </li>
         <li>
            <a href="chat.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
               <span class="flex-1 ms-3 whitespace-nowrap">chat</span>
             
            </a>
         </li>
         <li>
            <a href="updates.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
               <span class="flex-1 ms-3 whitespace-nowrap">get updates</span>
            </a>
         </li> 
         <li>
            <a href="account.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
               <span class="flex-1 ms-3 whitespace-nowrap">user account</span>
            </a>
         </li> 
         <li>
            <a href="login.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              
               <span class="flex-1 ms-3 whitespace-nowrap">logout</span>
            </a>
         </li>
         
      </ul>
   </div>
</aside>



</body>
</html>