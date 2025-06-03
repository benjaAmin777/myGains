<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Styles -->
        
        @vite('resources/css/app.css')
    </head>
    <body>
        <header>

        </header>
        <nav class="flex justify-between items-center border-b-2 ">
            <h1 class="p-2 font-extrabold text-5xl">
                MY GAINS
            </h1>
            <ul class="flex gap-4 justify-end p-2 font-bold  ">
                <li class="p-2 rounded-lg">
                    <a href="">
                        Iniciar Sesión
                    </a>
                </li>
                <li class="bg-gray-500 p-2 rounded-lg">
                    <a href="">
                        Registrate
                    </a>
                </li>
            </ul>
        </nav>
        <main class="relative">
            <h1 class="absolute top-4 left-4 text-white  font-extrabold text-6xl pr-[200px]  drop-shadow-[2px_2px_0px_black]">
                "Your body can stand almost anything. It´s your mind
                that you have to convince."
            </h1>
            
            <img class="w-full "
            src="https://s24806.pcdn.co/wp-content/uploads/2024/03/Amped_Fitness_Gym-970x464-1.jpeg" alt="">
            
        </main>
    </body>
</html>
