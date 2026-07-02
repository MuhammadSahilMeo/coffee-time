<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel testing app</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-slate-50 text-slate-900">
    <div class="min-h-screen px-6 py-12 mx-auto max-w-7xl">
        <header class="mb-12 text-center">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-600">Static demo page</p>
            <h1 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">Tailwind-powered landing page</h1>
            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-600">A simple static layout with dummy data for a Laravel app. This example uses Tailwind CSS utility classes for spacing, typography, and responsive structure.</p>
        </header>

        <section class="grid gap-6 lg:grid-cols-3">
            <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                <div class="inline-flex rounded-full bg-cyan-50 p-3 text-cyan-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2 4h.01M12 6.5v1m0 2v6" />
                    </svg>
                </div>
                <h2 class="mt-6 text-2xl font-semibold">Product overview</h2>
                <p class="mt-3 text-slate-600">Build beautiful interfaces with simple utility classes. Use this section to describe a key product feature or a value proposition.</p>
                <ul class="mt-6 space-y-3 text-slate-600">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-cyan-500"></span>
                        Fast setup and clean design
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-cyan-500"></span>
                        Responsive layout across devices
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 h-2.5 w-2.5 rounded-full bg-cyan-500"></span>
                        Static content with no backend data required
                    </li>
                </ul>
            </article>

            <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                <div class="inline-flex rounded-full bg-slate-100 p-3 text-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6-6 6m9-12l6 6-6 6" />
                    </svg>
                </div>
                <h2 class="mt-6 text-2xl font-semibold">Team highlights</h2>
                <p class="mt-3 text-slate-600">Showcase a small group of team members or service cards with simple text and icons.</p>
                <div class="mt-6 space-y-4">
                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="font-semibold">Design leader</p>
                        <p class="text-sm text-slate-500">Anna has led the product design and interface strategy across every release.</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="font-semibold">Engineering lead</p>
                        <p class="text-sm text-slate-500">Marco manages the backend and development workflows for this project.</p>
                    </div>
                </div>
            </article>

            <article class="rounded-3xl border border-slate-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                <div class="inline-flex rounded-full bg-amber-50 p-3 text-amber-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3 1.343 3 3v6H9v-6c0-1.657 1.343-3 3-3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h2 class="mt-6 text-2xl font-semibold">Metrics snapshot</h2>
                <p class="mt-3 text-slate-600">Static KPI cards can help visualize support, growth, or performance without real-time data.</p>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-3xl font-bold text-slate-900">120k</p>
                        <p class="mt-1 text-sm text-slate-500">Monthly users</p>
                    </div>
                    <div class="rounded-2xl bg-slate-50 p-4">
                        <p class="text-3xl font-bold text-slate-900">4.8/5</p>
                        <p class="mt-1 text-sm text-slate-500">Average rating</p>
                    </div>
                </div>
            </article>
        </section>

        <section class="mt-12 rounded-3xl border border-slate-200 bg-white p-8 shadow-sm">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cyan-600">Quick start</p>
                    <h2 class="mt-4 text-3xl font-semibold">Ready to use this layout in your Laravel app?</h2>
                    <p class="mt-3 max-w-2xl text-slate-600">You can use this static page as a starting point for a dashboard, landing page, or project showcase. Tailwind CSS utilities make it easy to customize spacing, typography, and colors.</p>
                </div>
                <div class="flex flex-col gap-3 sm:flex-row">
                    <a href="#" class="inline-flex items-center justify-center rounded-2xl bg-cyan-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-cyan-700">Get started</a>
                    <a href="#" class="inline-flex items-center justify-center rounded-2xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">View docs</a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>