<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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

                        <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Exercice 2</a>
                    </div>
                    <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                    </div>
                </nav>
            </div>

        </div>

        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Exercice 2</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Test JQuery
                </p>
            </div>
        </main>
    </div>
</div>


<!-- Consignes -->
<div class="bg-indigo-700">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-white">
            Consigne
        </h2>
        <div class="mt-6 border-t border-indigo-300 border-opacity-25 pt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:gap-x-8 md:gap-y-12">
                <div>
                    <dt class="text-lg leading-6 font-medium text-white">
                        <b>En Jquery</b>, merci d'effectuer les taches ci-dessous. Le code à faire se trouve dans une fonction qui est appelée lorsque l'on clique sur le bouton "Execute".
                        <br><br>
                        <ul class="list-disc ml-16">
                            <li>Remplacer le contenu de la div ayant pour id "replaceContent", par la phrase "Le contenu a bien été remplacé"</li>
                            <li>Cacher la div ayant pour id "divToHide"</li>
                            <li>Afficher la div avec comme id "divToShow", si possible avec un effet, n'importe lequel</li>
                        </ul>

                    </dt>
                </div>

            </dl>
        </div>
    </div>
</div>

<!-- Affichage résultat -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 divide-y-2 divide-gray-200 sm:py-24 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900">
            Résultat
        </h2>


        <div class="mt-6 pt-10">

            <div class="rounded-md bg-blue-50 p-4 mb-5">
                <div class="flex">
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p id="replaceContent" class="text-sm text-blue-700">
                            Ce texte est à remplacer.
                        </p>
                    </div>
                </div>
            </div>

            <div id="divToHide" class="rounded-md bg-yellow-50 border-yellow-400 p-4 mb-5">
                <div class="flex">
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p class="text-sm text-yellow-700">
                            Je ne veux plus voir cette div.
                        </p>
                    </div>
                </div>
            </div>

            <div id="divToShow" class="rounded-md bg-green-50 p-4 mb-5 hidden">
                <div class="flex">
                    <div class="ml-3 flex-1 md:flex md:justify-between">
                        <p class="text-sm text-green-700">
                            Je veux voir cette div.
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <button type="button" id="clickButton" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Execute
                </button>
            </div>
        </div>

    </div>
</div>


<script>

    $( "#clickButton" ).click(function() {
        console.log("Le script s'execute");

        /*
         * DEBUT DU CODE
         */
            $('#replaceContent').replaceWith('Le contenu a bien été remplacé');
            $('#divToHide').hide();
            $('#divToShow').show("slow");
        /*
         * FIN DU CODE
         */
    });

</script>

</body>
</html>