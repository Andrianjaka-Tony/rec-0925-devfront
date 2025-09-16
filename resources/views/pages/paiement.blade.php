<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andrianjaka — Paiement</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen">
    <header class="flex flex-col">
        <div class="bg-white py-[2.2vh] px-[7.23vw]">
            <img src="{{ asset('/images/logo.png') }}" alt="logo" class="h-10 w-auto object-cover" />
        </div>
        <div class="bg-white text-[var(--text-blue)] py-[2.2vh] px-[7.23vw] font-bold shadow-lg">
            <h3 class="text-lg">Test psychotechnique pour permis de conduire à Montgeron</h3>
        </div>
    </header>

    <main class="px-[7.23vw] py-10 relative grid grid-cols-2">
      <div class="flex flex-col">
        <div class="flex flex-col gap-5 pr-16">
          <h2 class="text-xl font-bold">Confirmer et payer</h2>
          <div class="p-4 px-6 flex items-center gap-4 border border-[#00000029] rounded-lg">
            <svg class="text-[#BF2A6B] w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-spline-icon lucide-chart-spline"><path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="M7 16c.5-2 1.5-7 4-7 2 0 2 3 4 3 2.5 0 4.5-5 5-7"/></svg>
            <div>
              <p>Date de résérvation en forte demande</p>
              <p>Les réservations sont fréquentes pour le centre</p>
            </div>
          </div>
          <div>
            <h2 class="text-xl font-bold">Vos informatioons personnelles</h2>
            <div class="mt-3 flex flex-col gap-2">
              <input class="px-3 h-10 text-sm bg-[#00000029]/20 rounded outline-none" placeholder="Nom Prénom" />
              <input class="px-3 h-10 text-sm bg-[#00000029]/20 rounded outline-none" placeholder="Email" />
              <input class="px-3 h-10 text-sm bg-[#00000029]/20 rounded outline-none" placeholder="Numéro de téléphone" />
            </div>
          </div>
          <div class="bg-[#00000029] w-full h-[1px]"></div>
        </div>
  
  
        <div class="mt-8">
          <h2 class="text-xl font-bold">Votre test psychotechnique</h2>
          <div class="mt-4 flex flex-col gap-3">
            <div class="flex items-center gap-3">
              <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              <div>
                <p class="font-semibold">Date</p>
                <p class="-mt-0.5">12 mai 2025</p>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              <div>
                <p class="font-semibold">Horaire</p>
                <p class="-mt-0.5">12:30</p>
              </div>
            </div>
            <div class="flex items-center gap-3">
              <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
              <div>
                <p class="font-semibold">Adresse</p>
                <p class="-mt-0.5">39 Rue Emile Steiner, 27200 vernon</p>
              </div>
            </div>
          </div>
          <div class="bg-[#00000029] w-full h-[1px] mt-9"></div>
        </div>

        <div class="mt-8">
          <h2 class="text-xl font-bold">Choisissez votre moyen de paiement</h2>
          <p class="text-sm mt-1 uppercase">100% sécurisé</p>
          <div class="mt-8 flex flex-col">
            <div class="border-b border-[#00000029] flex items-center px-6 py-5 gap-6">
              <span class="h-4 w-4 border border-[#00000029] rounded-full"></span>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSPZ80yI0XZQblyg1i7xNXIG-RMcnRoeW17A&s" class="w-16 h-auto object-cover" />
              <p>MasterCard</p>
            </div>
            <div class="border-b border-[#00000029] flex items-center px-6 py-5 gap-6">
              <span class="h-4 w-4 border border-[#00000029] rounded-full"></span>
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Apple_Pay_logo.svg/2560px-Apple_Pay_logo.svg.png" class="w-16 h-auto object-cover" />
              <p>Apple Pay</p>
            </div>
            <div class="border-b border-[#00000029] flex items-center px-6 py-5 gap-6">
              <span class="h-4 w-4 border border-[#00000029] rounded-full"></span>
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PayPal.svg/2560px-PayPal.svg.png" class="w-16 h-auto object-cover" />
              <p>Paypal</p>
            </div>
            <div class="border-b border-[#00000029] flex items-center px-6 py-5 gap-6">
              <span class="h-4 w-4 border border-[#00000029] rounded-full"></span>
              <img src="https://www.vandenberg.be/upload/Alma_orange(1).png" class="w-16 h-auto object-cover" />
              <p>Alma</p>
            </div>
          </div>
        </div>

        <button class="mt-8 inline-flex justify-center items-center gap-2 px-10 py-3 rounded-lg bg-[#BF2A6B] text-white font-semibold shadow-md">
          Je réserve mon test psychotechnique
          <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 11-1.414-1.414L12.586 11H3a1 1 0 110-2h9.586L7.293 4.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
        </button>
      </div>
      
      <div class="flex flex-col pl-16">
        <div class="p-6 px-8 border border-[#00000029] rounded-lg">
          <h3 class="text-[#BF2A6B] font-semibold">Récapitulatif de votre test psychotechnique</h3>
          <p class="mt-6 text-sm">Total à payer : <span class="font-bold">130.00€</span></p>
          <p class="mt-4 text-sm opacity-60">En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP. Veuillez consulter notre politique de protection des données.</p>
        </div>

        <div class="w-full mt-8 flex justify-evenly">
          <div class="flex flex-col items-center gap-2">
            <div class="h-16 w-16 flex items-center justify-center rounded-full shadow">
              <svg class="text-[#0DBC0D]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-grab-icon lucide-hand-grab"><path d="M18 11.5V9a2 2 0 0 0-2-2a2 2 0 0 0-2 2v1.4"/><path d="M14 10V8a2 2 0 0 0-2-2a2 2 0 0 0-2 2v2"/><path d="M10 9.9V9a2 2 0 0 0-2-2a2 2 0 0 0-2 2v5"/><path d="M6 14a2 2 0 0 0-2-2a2 2 0 0 0-2 2"/><path d="M18 11a2 2 0 1 1 4 0v3a8 8 0 0 1-8 8h-4a8 8 0 0 1-8-8 2 2 0 1 1 4 0"/></svg>
            </div>
            <div class="mt-2 text-sm flex flex-col">
              <span class="font-semibold text-center">Entraînement</span>
              <span class="text-center">Gratuit illimité</span>
            </div>
          </div>
          <div class="flex flex-col items-center gap-2">
            <div class="h-16 w-16 flex items-center justify-center rounded-full shadow">
              <svg class="text-[#0DBC0D]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-check-icon lucide-list-check"><path d="M16 5H3"/><path d="M16 12H3"/><path d="M11 19H3"/><path d="m15 18 2 2 4-4"/></svg>
            </div>
            <div class="mt-2 text-sm flex flex-col">
              <span class="font-semibold text-center">Résultats</span>
              <span class="text-center">Le jour même</span>
            </div>
          </div>
          <div class="flex flex-col items-center gap-2">
            <div class="h-16 w-16 flex items-center justify-center rounded-full shadow">
              <svg class="text-[#0DBC0D]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
            </div>
            <div class="mt-2 text-sm flex flex-col">
              <span class="font-semibold text-center">Annulation</span>
              <span class="text-center">Gratuite jusqu'à 48h</span>
            </div>
          </div>
        </div>
      </div>
    </main>
    @vite('resources/js/app.js')
</body>
</html>

