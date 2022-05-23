<div class="border border-gray-300 rounded-lg">
    @forelse ($posts as $post)
        @include ('_post')
    @empty
        <p class="p-4">No posts yet.</p>
    @endforelse
    {{ $posts->links() }}
</div>
