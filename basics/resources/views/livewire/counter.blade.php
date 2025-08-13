<div class="text-2xl font-medium flex flex-col gap-6">
  Count: {{ $count }}

  <div class="flex justify-between items-center gap-4">
    <button
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded"
      wire:click="increment(10)"
    >
      +
    </button>

    <button
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded"
      wire:click="decrement"
    >
      -
    </button>
  </div>
</div>
