<div class="blog-post">
  @isset($deleteable)
    <a class="blog--delete-button" href="{{ route('admin.blog.delete', $blog->id) }}">X</a>
  @endisset
  @if (isset($blog->path_to_image))
    <img src="{{ $blog->path_to_image }}">
  @endif
  <h2 class="post-subject">{{ $blog->subject }}</h2>
  <p class="post-body">{{ $blog->text }}</p>
  @isset ($editing)
    <div class="blog-editor">
      <button class="btn edit-blog">Редактировать пост</button>
      <form data-blog-id="{{ $blog->id }}"  target="iframe-sender" class="editor" method="PUT" action="{{ route('admin.blog.update', $blog->id) }}">
        <input type="hidden" name="blogID" value="{{ $blog->id }}">
        <label>Тема:</label>
        <input required name="subject" value="{{ $blog->subject }}">
        <label>Тело:</label>
        <textarea required name="text">{{ $blog->text }}</textarea>
        <button type="submit" class="btn update-post">Сохранить изменения</button>
      </form>
    </div>
  @endisset
</div>