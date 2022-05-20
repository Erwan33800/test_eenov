<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- ... -->
</head>
<body>

<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
        <div class="relative h-full max-w-7xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative pt-6 pb-16 sm:pb-24">
        <div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
                    <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="./">
                                <img class="h-8 w-auto sm:h-10" src="./img/logo-eenov.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:flex md:space-x-10">
                        <a href="./exercice-1.php" class="font-medium text-gray-500 hover:text-gray-900">Exercice 1</a>

                        <a href="./exercice-2.php" class="font-medium text-gray-500 hover:text-gray-900">Exercice 2</a>
                    </div>
                    <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    </div>
                </nav>
            </div>

        </div>

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Test</span>
                    <span class="block text-indigo-600 xl:inline">EEnov Studio</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Test de compétence en PHP et JS pour l'intégration de l'équipe EEnov Studio
                </p>
            </div>
        </main>
    </div>
</div>


<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Consignes
                </h2>
                <p class="mt-4 text-lg text-gray-500">Si tu as une question, n'hésites pas à revenir vers nous.</p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <dl class="space-y-12">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Combien de temps prends le test ?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Environ 30 minutes.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Ou coder ?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Dans les sections indiquées directement sur les fichiers commencant par "Début du code" et "Fin du code". Elles se trouvent dans le fichier du même nom que l'exercice en question.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Puis-je faire des recherches sur internet ?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Biensur.
                        </dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Et si je bloque ?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Si tu n'arrives pas à tout faire c'est pas grave, le but est de comprendre ta facon de travailler et ce que tu as essayé de faire.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>



</body>
</html>