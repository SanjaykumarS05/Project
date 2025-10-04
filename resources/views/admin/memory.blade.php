@extends('layout.template')
@section('title', 'Memories')
@include('style.memory')
@section('header')
    <h1>My Memories</h1>
@endsection
@section('content1')
<div>
    <form action="{{ route('memory.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" >
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image[]" multiple  max="10240" required>
        </div>
        <button type="submit">Save the Memory</button>
    </form>
    <table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Images</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($memories as $memory)
            <tr>
                <td><b>{{ $memory->title }}</b></td>
                <td>
                <div class="memory-images-container">
                    @foreach(json_decode($memory->image_path, true) as $img)
                        <a href="{{ asset('storage/' . $img) }}" download class="memory-image">
                            <img src="{{ asset('storage/' . $img) }}">
                        </a>
                    @endforeach
                </div>
            </td>
                <td>
                    <button type="button" onclick="downloadAllImages({{ $memory->id }})" class="download">
                        Download All
                    </button>
                    @foreach(json_decode($memory->image_path, true) as $img)
                        <a href="{{ asset('storage/' . $img) }}" class="hidden-link-{{ $memory->id }}" download></a>
                    @endforeach
                    <a href="{{ route('memory.downloadAll', $memory->id) }}">
                        <button type="submit" class="zip-download-btn">Download All (ZIP)</button>
                    </a>
                    <a href="{{ route('memory.delete', $memory->id) }}" onclick="return confirm('Are you sure you want to delete this memory?');" class="delete">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
    <script>
    function downloadAllImages(memoryId) {
    let links = document.querySelectorAll('.hidden-link-' + memoryId);
    links.forEach(function(link) {
        let a = document.createElement('a');
        a.href = link.href;
        a.download = link.href.split('/').pop(); 
        document.body.appendChild(a);
        a.click(); 
        document.body.removeChild(a);
    });
    }
    @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif
        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
</script>
@endsection
