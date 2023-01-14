<html class="h-full bg-gray-100">
   <head>
      <title> F1 </title>
      <link rel="shortcut icon" href="img/f1logo.png">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>

      <style>
            img {
               border-radius: 8px;
               
            }

      </style>
   </head>
   <body class="h-full">
      <div class="min-h-full">
         <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
               <div class="flex items-center justify-between h-16">
                  <div class="flex items-center">
                     <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="img/f1logo2.png" alt="Workflow">
                     </div>
                     <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                           <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                           <a href="f1.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Início</a>
                           <a href="drivers.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Drivers</a>
                           <a href="teams.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Teams</a>
                           <a href="standings.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Standings</a>
                           <a href="calendario.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendário</a>
                        </div>
                     </div>
                  </div>
                  <div class="hidden md:block">
                     <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                           <span class="sr-only">View notifications</span>
                           <!-- Heroicon name: outline/bell -->
                           <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                           </svg>
                        </button>
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                           <div>
                              <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                              <span class="sr-only">Open user menu</span>
                              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                              </button>
                           </div>
                           <!--
                              Dropdown menu, show/hide based on menu state.
                              
                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                              -->
                        </div>
                     </div>
                  </div>
                  <div class="-mr-2 flex md:hidden">
                     <!-- Mobile menu button -->
                     <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                           Heroicon name: outline/menu
                           
                           Menu open: "hidden", Menu closed: "block"
                           -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                           Heroicon name: outline/x
                           
                           Menu open: "block", Menu closed: "hidden"
                           -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
               <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="f1.php" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Início</a>
                  <a href="drivers.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Drivers</a>
                  <a href="standings.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Standings</a>
                  <a href="teams" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Teams</a>
                  <a href="calendario.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendário</a>
               </div>
               <div class="pt-4 pb-3 border-t border-gray-700">
                  <div class="flex items-center px-5">
                     <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                     </div>
                     <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                        <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                     </div>
                     <button type="button" class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                     </button>
                  </div>
                  <div class="mt-3 px-2 space-y-1">
                     <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>
                     <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>
                     <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                  </div>
               </div>
            </div>
         </nav>
         <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
               <h1 class="text-3xl font-bold text-gray-900">Início</h1>
            </div>
         </header>
         <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
               <!-- Replace with your content -->
               <div class="px-4 py-6 sm:px-0">
                  <div >
                     <div class="flex justify-center items-center">
                        <div class="2xl:mx-auto 2xl:container py-12 px-4 sm:px-6 xl:px-20 2xl:px-0 w-full">
                           <div class="flex flex-col jusitfy-center items-center space-y-10">
                              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 md:gap-x-8 w-full">
                                 <div class="relative group flex justify-center items-center h-full w-full">
                                    <img class="object-center object-cover h-full w-full" src="https://quatrorodas.abril.com.br/wp-content/uploads/2021/07/F1-MERCEDES-2021.jpg?quality=70&strip=info&w=1024&resize=1200,800" alt="girl-image" />
                                    <button class="dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bottom-4 z-10 absolute text-base font-medium leading-none text-gray-800 py-3 w-36 bg-white" onclick="window.location.href='http://localhost/sitef1/inserir.php';">Inserir</button>
                                    <div class="absolute opacity-0 group-hover:opacity-100 transition duration-500 bottom-3 py-6 z-0 px-20 w-36 bg-white bg-opacity-50"></div>
                                 </div>
                                 <div class="flex flex-col space-y-4 md:space-y-8 mt-4 md:mt-0">
                                 </div>
                                 <div class="relative group justify-center items-center h-full w-full hidden lg:flex">
                                    <img class="object-center object-cover h-full w-full" src="https://i.eurosport.com/2022/02/23/3326230-68004868-2560-1440.jpg" alt="girl-image" />
                                    <button class="dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bottom-4 z-10 absolute text-base font-medium leading-none text-gray-800 py-3 w-36 bg-white" onclick="window.location.href='http://localhost/sitef1/eliminar.php';">Eliminar</button>
                                    <div class="absolute opacity-0 group-hover:opacity-100 transition duration-500 bottom-3 py-6 z-0 px-20 w-36 bg-white bg-opacity-50"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /End replace -->
            </div>
         </main>
      </div>
   </body>
</html>