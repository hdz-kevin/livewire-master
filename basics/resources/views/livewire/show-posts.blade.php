<div>
  <h2 class="text-xl font-semibold my-5">Posts:</h2>

  {{-- quiero celdas mas grandes y/o separadas --}}
  <table class="table-auto w-5xl border-collapse border border-gray-200">
    <thead class="bg-gray-100 border-b border-gray-200">
      <tr>
        <th class="px-4 py-2">Title</th>
        <th class="px-4 py-2">Content</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
      @foreach ($posts as $post)
        {{-- Important: add wire:key to each individual item any time you are using a loop --}}
        <tr wire:key="{{ $post->id }}">
          <td class="border border-gray-200 px-4 py-2">{{ $post->title }}</td>
          <td class="border border-gray-200 px-4 py-2">{{ $post->content }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
