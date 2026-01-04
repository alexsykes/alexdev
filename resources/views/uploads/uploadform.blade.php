<x-app-layout>
    <form action="/upload/file" method="post" enctype="multipart/form-data">
        @csrf

        <label for="uploadFile">Select file:</label>
        <input type="file" name="file" id="file" />
    <label for="title">Title:</label>
        <input type="text" name="title" id="title" />

    <label for="description">Description:</label>
        <input type="text" name="description" id="description" />

    <p>Category</p>
    <input type="radio" id="general" name="category" value="General">
    <label for="general">General</label><br>
    <input type="radio" id="landscape" name="category" value="Landscape">
    <label for="landscape">Landscape</label><br>
    <input type="radio" id="people" name="category" value="People">
    <label for="people">People</label>
        <button type="submit">Upload</button>
    </form>
</x-app-layout>