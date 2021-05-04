<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="text-gray-600 font-body">
    <div>
        <div>
            <nav>
                <div>
                    <h1 class="font-bold uppercase p-4"><a href="#">Food Ninja</a></h1>
                </div>
                <ul>
                    <li class="text-gray-700 font-bold"><a href="#"><span>Home</span></a></li>
                    <li><a href="#"><span>About</span></a></li>
                    <li><a href="#"><span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
        <main class="px-16 py-6 bg-gray-100">
            <div class="flex justify-center md:justify-end">
                <a href="#" class="text-red-400">Log in</a>
                <a href="#" class="text-red-400 ml-2">Sign up</a>
            </div>
            <header>
                <h2 class="text-gray-700 text-6xl font-semibold">Recipes</h2>
                <h3 class="text-2xl font-semibold">For Ninjas</h3>
            </header>
            <div>
                <h4 class="font-bold mt-12 pb-2">Latest Recipes</h4>
                <div class="mt-8">
                    <!-- cards go here -->
                    <div class="bg-white rounded overflow-hidden shadow-md relative">
                        <img src="{{asset('images/2.jpg')}}" alt="music" class="w-full h-32 sm:h-64 object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 Bean Chilli Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                        </div>
                        <div class="bg-gray-100 text-gray-400 uppercase font-bold rounded-full p-2 text-xs absolute top-0 ml-2 mt-2">
                            <span>25 min</span>
                        </div>
                    </div>
                </div>

                <h4 class="font-bold mt-12 pb-2">Most Popular</h4>
                
                <div class="mt-8">
                    <!-- cards go here -->
                </div>
                <div class="flex justify-center">
                   <span class="bg-gray-200 text-gray-400">Load more</span>
                </div>
            </div>
        </main>
    </div>
</body>
</html>