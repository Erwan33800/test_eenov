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
                    <span class="block xl:inline">Exercice 1</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Test PHP
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
                        Faire une fonction qui affiche à la suite les mots se trouvant dans une liste donnée. Attention l'avant dernier mot de la liste ne doit pas être affiché.<br>
                        Merci d'utiliser la fonction "echo".
                    </dt>
                    <dd class="mt-2 text-base text-indigo-200">
                        Exemple :
                        <br><br>
                        <div class="ml-8">
                            Entrant : ["pomme", "poire", "tomate", "citron", "banane"]
                            <br>
                            Résultat : pomme poire tomate banane
                        </div>
                        <br>
                        <div class="ml-8">
                            Entrant : ["ceci", "est", "un", "test", "de", "carton", "programmation"]
                            <br>
                            Résultat : ceci est un test de programmation
                        </div>
                    </dd>
                </div>

            </dl>
        </div>
    </div>
</div>

<!-- Exercice -->
<?php

    function affichageListeSansAvantDernierMot($tableauEntrant) {

        /*
         * DEBUT DU CODE
         */
            unset($tableauEntrant[count($tableauEntrant)-2]);
            echo implode( " ", $tableauEntrant);
         /*
          * FIN DU CODE
          */

    }

?>

<!-- Affichage résultat -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 divide-y-2 divide-gray-200 sm:py-24 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900">
            Résultat
        </h2>
        <div class="mt-6 pt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12">
                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                        ["Il", "ouvre", "son", "petit", "frigo"]
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Résultat : <?php affichageListeSansAvantDernierMot(["Il", "ouvre", "son", "petit", "frigo"]); ?>
                    </dd>
                </div>

                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                        ["Cela", "ne", "nous", "regarde", "vraiment", "pas"]
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Résultat : <?php affichageListeSansAvantDernierMot(["Cela", "ne", "nous", "regarde", "vraiment", "pas"]); ?>
                    </dd>
                </div>

                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                        ["Petit", "test"]
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Résultat : <?php affichageListeSansAvantDernierMot(["Petit", "test"]); ?>
                    </dd>
                </div>

                <div>
                    <dt class="text-lg leading-6 font-medium text-gray-900">
                        ["Ca", "marche", "pas", "?"]
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">
                        Résultat : <?php affichageListeSansAvantDernierMot(["Ca", "marche", "pas", "?"]); ?>
                    </dd>
                </div>

            </dl>
        </div>
    </div>
</div>


</body>
</html>