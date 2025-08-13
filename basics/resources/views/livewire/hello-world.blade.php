<div>
  <h1 class="text-4xl font-bold">Hello Internet!</h1>
  <div class="flex gap-4 items-center mt-4">
    <p class="text-2xl font-medium">
      The current time is {{ time() }}
    </p>

    <button
      wire:click="$refresh"
      class="bg-blue-500 text-white px-4 py-2 rounded cursor-pointer"
    >
      Refresh
    </button>
  </div>
</div>
