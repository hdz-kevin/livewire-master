<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>{{ $title ?? 'Default Title' }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
	</head>

	<body>

		<div class="flex">
			<nav class="bg-gray-800 text-white h-screen w-60 inline-block pl-4 pt-6">
				<a @class(['block mb-3', 'font-bold' => request()->is('/')]) href="/">Todos</a>
				<a @class(['block mb-3', 'font-bold' => request()->is('counter')]) href="/counter">Counter</a>
				<a @class(['block mb-3', 'font-bold' => request()->is('posts')]) href="/posts">Posts</a>
				<a @class(['block mb-3', 'font-bold' => request()->is('posts/create')]) href="/posts/create">Create Post</a>
			</nav>

			<div class="p-10">
				{{ $slot }}
			</div>
		</div>
	</body>
</html>
