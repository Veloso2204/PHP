<html>
   <head>
      <title> F1 </title>
      <link rel="shortcut icon" href="img/f1logo.png">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body>
      <!-- This example requires Tailwind CSS v2.0+ -->
      <!--
         This example requires updating your template:
         
         ```
         <html class="h-full bg-gray-100">
         <body class="h-full">
         ```
         -->
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
               <h1 class="text-3xl font-bold text-gray-900">Drivers</h1>
            </div>
         </header>
         <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
               <!-- Replace with your content -->
        
        <div tabindex="0" aria-label="form" class="focus:outline-none w-full bg-white p-10">
         <form method="post" action="include/insert.php">
            <div class="md:flex items-center border-b pb-6 border-gray-200">
                <div  class="flex items-center md:mt-0 mt-4">
                    <div class="w-8 h-8 bg-indigo-700 rounded flex items-center justify-center">
                        <p  tabindex="0" class="focus:outline-none text-base font-medium leading-none text-white">01</p>
                    </div>
                    <p  tabindex="0" class="focus:outline-none text-base ml-3 font-medium leading-4 text-gray-800">Inserir</p>
                </div>
            </div>
            <h1 tabindex="0" role="heading" aria-label="profile information" class="focus:outline-none text-3xl font-bold text-gray-800 mt-12">Indentificações do Piloto</h1>
            <p    tabindex="0" class=" focus:outline-none text-sm font-light leading-tight text-gray-600 mt-4"> <br /></p>
            <h2  tabindex="0" class="focus:outline-none text-xl font-semibold leading-7 text-gray-800 mt-10"></h2>
            <p tabindex="0" class="focus:outline-none text-sm font-light leading-none text-gray-600 mt-0.5"></p>
            <div class="mt-8 md:flex items-center">
                <div class="flex flex-col">
                    <label class="mb-3 text-sm leading-none text-gray-800">Nome</label>
                    <input type="text" name="nomepiloto" tabindex="0" aria-label="Enter first name" class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200" value="Isaac" />
                </div>
            </div>
            <div class="mt-12 md:flex items-center">
                <div class="flex flex-col">
                    <label class="mb-3 text-sm leading-none text-gray-800">Data de Nascimento</label>
                    <input type="date" name="dataNasc" tabindex="0" aria-label="Enter email Address" class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200" value="0000-00-00" />
                </div>
                <div class="flex flex-col md:ml-12 md:mt-0 mt-8">
                    <label class="mb-3 text-sm leading-none text-gray-800">País</label>
                    <input type="text" name="pais" tabindex="0" aria-label="Enter phone number" class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200" value="Portugal" />
                </div>
            </div>
            <div class="mt-12 md:flex items-center">
                <div class="flex flex-col">
                    <label class="mb-3 text-sm leading-none text-gray-800">Podios</label>
                    <input type="text" tabindex="0" name="podios" aria-label="Enter date of birth" class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200" value="000" />
                </div>
                <div class="flex flex-col md:ml-12 md:mt-0 mt-8">
                    <label class="mb-3 text-sm leading-none text-gray-800">Local de Nascimento</label>
                    <input type="text" name="locanasc" tabindex="0" aria-label="Enter place of birth" class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200" value="Rua da Cachada, Braga" />
                </div>
            </div>
            <div class="mt-12 md:flex items-center">
            <div class="flex flex-col">
                    <label class="mb-3 text-sm leading-none text-gray-800">Campeonatos Mundiais</label>
                    <input type="text" name="campmundi" tabindex="0" aria-label="Enter date of birth" class="focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64 bg-gray-100 text-sm font-medium leading-none text-gray-800 p-3 border rounded border-gray-200" value="0" />
                </div>
            </div>
            
            

            <input type="submit" name="submit" value="Inserir" class="flex items-center justify-center py-4 px-7 focus:outline-none bg-white border rounded border-gray-400 mt-7 md:mt-14 hover:bg-gray-100  focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">

               </form>
        </div>
        <style>
            .checkbox:checked + .check-icon {
                display: flex;
            }
        </style>
    
               <!-- /End replace -->
            </div>
         </main>
      </div>
   </body>

</html>