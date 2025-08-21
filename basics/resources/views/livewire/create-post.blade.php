<div>
  <h2 class="text-xl font-semibold my-5">Posts:</h2>

  <form wire:submit="save" class="space-y-4">
    <div>
			<label>Title:</label>
			<input
				type="text"
				wire:model="title"
				class="border border-gray-300 rounded px-3 py-2 w-full"
			>
			@error('title')
				<span class="text-red-500 text-sm">{{ $message }}</span>
			@enderror
    </div>
    <div>
			<label>Content:</label>
			<textarea
				wire:model="content"
				class="border border-gray-300 rounded px-3 py-2 w-full">
			</textarea>
			@error('content')
				<span class="text-red-500 text-sm">{{ $message }}</span>
			@enderror
    </div>

		<button
			type="submit"
			class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
		>
			Save
		</button>
  </form>
</div>
