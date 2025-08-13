<div>
  <form wire:submit="add">
    <div class="flex gap-4 mb-6">
      <input
        class="border border-gray-300 rounded px-4 py-2"
        type="text"
        placeholder="Add a new todo"

        {{-- wire:model is a directive that binds the input value to the component property --}}
        {{-- it will automatically update the component property when the input changes --}}
        {{-- it will also update the input value when the component property changes --}}
        {{-- this is a two-way data binding --}}

        {{-- send network request to update property on submit --}}
        wire:model="todo"
        {{-- send request when input is updated (real time experience) --}}
        {{-- wire:model.live="todo" --}}
        {{-- send request when input loses focus --}}
        {{-- wire:model.blur="todo" --}}
        {{-- send request when tab out --}}
        {{-- wire:model.change="todo" --}}
      />
      <button
        class="bg-blue-500 text-white rounded px-4 py-2"
        type="submit"
      >
        Add
      </button>
    </div>
  </form>

  <ul>
    @foreach ($todos as $todo)
    <li class="text-xl font-medium">- {{ $todo }}</li>
    @endforeach
  </ul>
</div>
