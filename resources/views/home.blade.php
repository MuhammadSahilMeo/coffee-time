@extends('layout.app')

@section('title', 'Home')

@section('content')

{{-- ─── Hero Section ─────────────────────────────────────────────────────── --}}
<section class="relative bg-gradient-to-br from-indigo-700 via-indigo-600 to-violet-600 text-white overflow-hidden">
    {{-- Decorative circles --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/5 rounded-full pointer-events-none"></div>
    <div class="absolute -bottom-16 -left-16 w-72 h-72 bg-white/5 rounded-full pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-6 py-24 md:py-32 flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1 text-center md:text-left">
            <span class="inline-block bg-white/15 text-white text-xs font-semibold px-3 py-1 rounded-full mb-4 tracking-wide uppercase">
                Employee Management
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                Manage your team<br>
                <span class="text-indigo-200">with confidence.</span>
            </h1>
            <p class="mt-5 text-lg text-indigo-100 max-w-xl md:mx-0 mx-auto">
                StaffHub gives you a clean, centralised place to add, view, and organise your employees — so you can focus on what really matters.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                <a href="#add-employee"
                   class="inline-flex items-center justify-center gap-2 bg-white text-indigo-700 font-bold px-6 py-3 rounded-xl shadow hover:bg-indigo-50 transition text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add an Employee
                </a>
                <a href="{{ route('about') }}"
                   class="inline-flex items-center justify-center gap-2 border border-white/40 text-white font-semibold px-6 py-3 rounded-xl hover:bg-white/10 transition text-sm">
                    Learn More
                </a>
            </div>
        </div>

        {{-- Stats panel --}}
        <div class="flex-shrink-0 w-full md:w-80 grid grid-cols-2 gap-4">
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 text-center">
                <p class="text-3xl font-extrabold">240+</p>
                <p class="text-indigo-200 text-sm mt-1">Employees tracked</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 text-center">
                <p class="text-3xl font-extrabold">12</p>
                <p class="text-indigo-200 text-sm mt-1">Departments</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 text-center col-span-2">
                <p class="text-3xl font-extrabold">99.9%</p>
                <p class="text-indigo-200 text-sm mt-1">Uptime & reliability</p>
            </div>
        </div>
    </div>
</section>

{{-- ─── Features Row ──────────────────────────────────────────────────────── --}}
<section class="max-w-7xl mx-auto px-6 py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-slate-900">Everything you need</h2>
        <p class="mt-2 text-slate-500">A suite of tools built for modern HR workflows.</p>
    </div>

    <div class="grid sm:grid-cols-3 gap-6">
        {{-- Feature card --}}
        <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition group">
            <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center mb-4 group-hover:bg-indigo-100 transition">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
            <h3 class="font-semibold text-slate-800 text-lg">Employee Profiles</h3>
            <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                Store names, roles, and contact details in one tidy place. Find anyone in seconds.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition group">
            <div class="w-12 h-12 rounded-xl bg-violet-50 flex items-center justify-center mb-4 group-hover:bg-violet-100 transition">
                <svg class="w-6 h-6 text-violet-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h2a4 4 0 014 4v2M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <h3 class="font-semibold text-slate-800 text-lg">Role Management</h3>
            <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                Assign and update roles as your organisation grows, with clear hierarchy tracking.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition group">
            <div class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center mb-4 group-hover:bg-emerald-100 transition">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h3 class="font-semibold text-slate-800 text-lg">Quick Onboarding</h3>
            <p class="mt-2 text-sm text-slate-500 leading-relaxed">
                Get new hires into the system in under a minute with our streamlined add form.
            </p>
        </div>
    </div>
</section>

{{-- ─── Add Employee Form ─────────────────────────────────────────────────── --}}
<section id="add-employee" class="bg-gradient-to-b from-slate-50 to-slate-100 border-t border-slate-200 py-20">
    <div class="max-w-2xl mx-auto px-6">

        {{-- Section header --}}
        <div class="text-center mb-10">
            <span class="inline-flex items-center gap-1.5 bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                New Record
            </span>
            <h2 class="text-3xl font-bold text-slate-900">Add an Employee</h2>
            <p class="mt-2 text-slate-500">Fill in the details below to register a new team member.</p>
        </div>

        {{-- Form card --}}
        <div class="bg-white rounded-3xl shadow-lg border border-slate-100 overflow-hidden">

            {{-- Coloured top bar --}}
            <div class="h-1.5 w-full bg-gradient-to-r from-indigo-500 via-violet-500 to-pink-500"></div>

            <form class="p-8 space-y-6" action="{{ url('/create-employee')}}" method="POST">
                @csrf

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-700 mb-1.5">
                        Full Name <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="e.g. Jane Doe"
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white transition"
                            required
                        >
                    </div>
                </div>

                {{-- Role --}}
                <div>
                    <label for="role" class="block text-sm font-semibold text-slate-700 mb-1.5">
                        Job Role <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="role"
                            name="role"
                            placeholder="e.g. Software Engineer"
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 bg-slate-50 text-slate-800 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 focus:bg-white transition"
                            required
                        >
                    </div>
                </div>

                {{-- Divider --}}
                <div class="border-t border-slate-100"></div>

                {{-- Submit --}}
                <div class="flex items-center justify-between gap-4">
                    <p class="text-xs text-slate-400">
                        Fields marked <span class="text-red-500 font-medium">*</span> are required.
                    </p>
                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 active:scale-95 text-white font-semibold text-sm px-6 py-3 rounded-xl shadow-md shadow-indigo-200 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                        </svg>
                        Save Employee
                    </button>
                </div>

            </form>
        </div>

        {{-- Helper note --}}
        <p class="text-center text-xs text-slate-400 mt-6">
            Data is saved securely. You can edit or remove records at any time.
        </p>

    </div>
</section>

@endsection
