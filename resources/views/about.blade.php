@extends('layout.app')


@section('title', 'about us');


@section('content')

	<style> /* small utility to keep images uniform */  
		.photo { height: 220px; object-fit: cover; width: 100%; border-radius: 0.75rem }
	</style>
     
	<main class="min-h-screen max-w-6xl mx-auto p-6">            
		<header class="text-center mb-8">
			<h1 class="text-3xl font-extrabold">About Us</h1>
			<p class="mt-2 text-slate-600">A small static about page with images as placeholders.</p>     
		</header>

		<section class="grid gap-6 lg:grid-cols-3">
			<div class="col-span-2 rounded-2xl bg-white p-6 shadow-sm border border-slate-100">
				<img src="https://picsum.photos/seed/about1/1200/600" alt="Team" class="photo">
				<h2 class="mt-4 text-2xl font-semibold">Our Story</h2>
				<p class="mt-3 text-slate-600">We craft simple, useful examples to help you get started. This page uses images to represent team and product visuals without needing actual assets.</p>
			</div>

			<aside class="rounded-2xl bg-white p-6 shadow-sm border border-slate-100">
				<h3 class="text-xl font-semibold">Quick facts</h3>
				<ul class="mt-3 space-y-2 text-slate-600">
					<li>Founded: 2024</li>
					<li>Employees: 12</li>
					<li>Offices: Remote</li>
				</ul>
				<div class="mt-6 grid gap-3">
					<img src="https://picsum.photos/seed/about2/600/400" alt="office" class="photo">
					<img src="https://picsum.photos/seed/about3/600/400" alt="product" class="photo">
				</div>
			</aside>
		</section>
	</main>


	@sectionend
