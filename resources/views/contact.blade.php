<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact — Laravel testing app</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-900">
	<div class="min-h-screen max-w-4xl mx-auto p-6">
		<header class="text-center mb-8">
			<h1 class="text-3xl font-extrabold">Contact</h1>
			<p class="mt-2 text-slate-600">Reach out to us — this page shows images as visual placeholders.</p>
		</header>

		<section class="grid gap-6 lg:grid-cols-2 items-start">
			<div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-100">
				<form class="space-y-4">
					<div>
						<label class="block text-sm font-medium text-slate-700">Name</label>
						<input class="mt-1 block w-full rounded-lg border border-slate-200 p-2" placeholder="Your name">
					</div>
					<div>
						<label class="block text-sm font-medium text-slate-700">Email</label>
						<input class="mt-1 block w-full rounded-lg border border-slate-200 p-2" placeholder="you@example.com">
					</div>
					<div>
						<label class="block text-sm font-medium text-slate-700">Message</label>
						<textarea class="mt-1 block w-full rounded-lg border border-slate-200 p-2" rows="4" placeholder="Write a short message"></textarea>
					</div>
					<div>
						<button class="rounded-lg bg-cyan-600 px-4 py-2 text-white font-semibold">Send message</button>
					</div>
				</form>
			</div>

			<div class="rounded-2xl bg-white p-6 shadow-sm border border-slate-100">
				<h3 class="text-xl font-semibold">Our location</h3>
				<p class="mt-2 text-slate-600">We are distributed and work remotely. Here's a placeholder map and office image.</p>
				<img src="https://picsum.photos/seed/contact-map/800/400" alt="map" class="mt-4 w-full rounded-lg">
				<img src="https://picsum.photos/seed/contact-office/800/400" alt="office" class="mt-4 w-full rounded-lg">
			</div>
		</section>
	</div>
</body>
</html>
