<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andrianjaka — Paiement</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-[var(--background)]">
    <header class="flex flex-col">
        <div class="bg-white py-[2.2vh] px-[7.23vw]">
            <img src="{{ asset('/images/logo.png') }}" alt="logo" class="h-10 w-auto object-cover" />
        </div>
        <div class="bg-white text-[var(--text-blue)] py-[2.2vh] px-[7.23vw] font-bold shadow-lg">
            <h3 class="text-lg">Test psychotechnique pour permis de conduire à Montgeron</h3>
        </div>
    </header>

    <main class="px-[7.23vw] py-8 pb-40">
        <h1 class="text-lg font-bold">Complétez votre réservation</h1>
        <div class="mt-[5vh] grid grid-cols-1 md:grid-cols-3 gap-[3.8vw]">
            <article class="rounded-2xl h-full pb-[2vh] overflow-hidden bg-white shadow-sm ring-1 ring-[#7070702B] flex flex-col">
                <div class="w-full py-[1.2vh] flex flex-col items-center bg-[#F2F3F5]">
                    <h3 class="mx-auto text-center text-[#353535] text-[1.45vw] font-bold">Basic</h3>
                    <p class="mx-auto text-center ext-[#383838]/70">Votre test psychotechnique simple</p>
                </div>
                <div class="mx-auto text-4xl mt-[5vh] font-semibold text-[#353535] text-[3vw]">+ 0€</div>
                <button class="w-fit mx-auto mt-[4vh] flex items-center gap-2 px-4 py-2 rounded-lg bg-[#F2F3F5] text-[#353535] text-sm font-semibold shadow-sm ring-1 ring-[#70707040]">
                    <span class="bg-white h-3 w-3 rounded-full"></span>
                    <span>Sélectionner</span>
                </button>
                <div class="border-t mt-[2vh] border-[#F2F3F5]"></div>
                <ul class="px-6 py-4 space-y-3 text-sm text-[#383838]">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-icon lucide-hand"><path d="M18 11V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2"/><path d="M14 10V4a2 2 0 0 0-2-2a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2v8"/><path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/></svg>
                        Entraînement illimité et gratuit
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        Annulation jusqu'à 48 heures
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check"><path d="M16 5H3"/><path d="M16 12H3"/><path d="M11 19H3"/><path d="m15 18 2 2 4-4"/></svg>
                        Recevez votre test le jour j
                    </li>
                </ul>
            </article>
            <article class="rounded-2xl h-full pb-[2vh] overflow-hidden bg-white shadow-sm ring-1 ring-[#0DBC0D] flex flex-col">
                <div class="w-full py-[1.2vh] flex flex-col items-center bg-[#0DBC0D] text-white">
                    <h3 class="mx-auto text-center text-[1.45vw] font-bold">Assurance</h3>
                    <p class="mx-auto text-center ext-[#383838]/70">Votre test psychotechnique sans stress</p>
                </div>
                <div class="mx-auto text-4xl mt-[5vh] font-semibold text-[#353535] text-[3vw]">+ 40€</div>
                <div class="mx-auto text-center mt-1 text-[#383838] text-xs">À peine le prix d'un restau</div>
                <button class="w-fit mx-auto mt-[2vh] flex items-center gap-2 px-4 py-2 rounded-lg bg-[#0DBC0D] text-white text-sm font-semibold shadow-sm ring-1 ring-[#70707040]">
                    <span class="bg-white h-3 w-3 rounded-full"></span>
                    <span>Sélectionner</span>
                </button>
                <div class="border-t mt-[2vh] border-[#F2F3F5]"></div>
                <ul class="px-6 py-4 space-y-3 text-sm text-[#383838]">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#008400] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-icon lucide-hand"><path d="M18 11V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2"/><path d="M14 10V4a2 2 0 0 0-2-2a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2v8"/><path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/></svg>
                        Entraînement illimité et gratuit
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#008400] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        Annulation jusqu'à 48 heures
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#008400] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-repeat2-icon lucide-repeat-2"><path d="m2 9 3-3 3 3"/><path d="M13 18H7a2 2 0 0 1-2-2V6"/><path d="m22 15-3 3-3-3"/><path d="M11 6h6a2 2 0 0 1 2 2v10"/></svg>
                        Repassez votre test pour 0€ (si test échoué)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#008400] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check"><path d="M16 5H3"/><path d="M16 12H3"/><path d="M11 19H3"/><path d="m15 18 2 2 4-4"/></svg>
                        Recevez votre test le jour j
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#008400] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open-icon lucide-book-open"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
                        Livret de préparation au test psychotechnique
                    </li>
                </ul>
            </article>
            <article class="rounded-2xl h-full pb-[2vh] overflow-hidden bg-white shadow-sm ring-1 ring-[#36578A] flex flex-col">
                <div class="w-full py-[1.2vh] flex flex-col items-center bg-[#36578A] text-white">
                    <h3 class="mx-auto text-center text-[1.45vw] font-bold">Assurance</h3>
                    <p class="mx-auto text-center ext-[#383838]/70">Votre test psychotechnique sans stress</p>
                </div>
                <div class="mx-auto text-4xl mt-[5vh] font-semibold text-[#353535] text-[3vw]">+ 60€</div>
                <div class="mx-auto text-center mt-1 text-[#383838] text-xs">À peine le prix d'un restau</div>
                <button class="w-fit mx-auto mt-[2vh] flex items-center gap-2 px-4 py-2 rounded-lg bg-[#36578A] text-white text-sm font-semibold shadow-sm ring-1 ring-[#70707040]">
                    <span class="bg-white h-3 w-3 rounded-full"></span>
                    <span>Sélectionner</span>
                </button>
                <div class="border-t mt-[2vh] border-[#F2F3F5]"></div>
                <ul class="px-6 py-4 space-y-3 text-sm text-[#383838]">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#36578A] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-icon lucide-hand"><path d="M18 11V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2"/><path d="M14 10V4a2 2 0 0 0-2-2a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2a2 2 0 0 0-2 2v8"/><path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/></svg>
                        Entraînement illimité et gratuit
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#36578A] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        Annulation jusqu'à 48 heures
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#36578A] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-repeat2-icon lucide-repeat-2"><path d="m2 9 3-3 3 3"/><path d="M13 18H7a2 2 0 0 1-2-2V6"/><path d="m22 15-3 3-3-3"/><path d="M11 6h6a2 2 0 0 1 2 2v10"/></svg>
                        Repassez votre test pour 0€ (si test échoué)
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#36578A] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check"><path d="M16 5H3"/><path d="M16 12H3"/><path d="M11 19H3"/><path d="m15 18 2 2 4-4"/></svg>
                        Recevez votre test le jour j
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#36578A] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open-icon lucide-book-open"><path d="M12 7v14"/><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/></svg>
                        Livret de préparation au test psychotechnique
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#36578A] flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download-icon lucide-download"><path d="M12 15V3"/><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="m7 10 5 5 5-5"/></svg>
                        Téléchargez vos résultats en illimité
                    </li>
                </ul>
            </article>
        </div>
    </main>
    
    <div class="fixed px-[7.23vw] py-[2.5vh] inset-x-0 bg-[#383838] bottom-0 z-30">
        <div class="bg-[#383838] ring-1 ring-black/10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="w-[30vw]">
                    <div class="bg-white rounded-lg px-4 py-3 shadow-md ring-1 ring-[#00000029] flex items-center gap-3">
                        <svg class="text-[#BF2A6B]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                        <div>
                            <div class="text-[#36578A] font-semibold text-[1.25vw]">Test psychotechnique le 28 mars à 14:00</div>
                            <div class="text-[1vw] text-[#36578A]/70">15 rue de la république Montgeron 91230</div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-auto flex flex-col gap-2 justify-end text-white">
                    <div class="text-right flex items-center justify-between">
                        <div class="text-sm mt-1">Total</div>
                        <div class="text-2xl font-semibold">135€</div>
                    </div>
                    <button class="inline-flex items-center gap-2 px-10 py-3 rounded-lg bg-[#BF2A6B] text-white font-semibold shadow-md">
                        Suivant
                        <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 11-1.414-1.414L12.586 11H3a1 1 0 110-2h9.586L7.293 4.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>

