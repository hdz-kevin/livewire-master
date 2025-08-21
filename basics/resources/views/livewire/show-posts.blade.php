<div>
  <h2 class="text-xl font-semibold my-5">Posts:</h2>

  {{-- quiero celdas mas grandes y/o separadas --}}
  <table class="table-auto w-5xl border-collapse border border-gray-200">
    <thead class="bg-gray-100 border-b border-gray-200">
      <tr>
        <th class="px-4 py-2">Title</th>
        <th class="px-4 py-2">Content</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
      @foreach ($posts as $post)
        {{-- Important: add wire:key to each item inside the loop --}}
        <tr wire:key="{{ $post->id }}">
          <td class="border border-gray-200 px-4 py-2">
            {{ $post->title }}
          </td>
          <td class="border border-gray-200 px-4 py-4">
            {{ str($post->content)->words(8) }}
          </td>
          <td>
            <button
              type="button"
              wire:click="delete({{ $post->id }})"
              wire:confirm="Are you sure you want to delete this post?"
              class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
              Delete
            </button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
