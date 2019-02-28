<div class="blog-column small">
    <form enctype="multipart/form-data" class="blog-form" method="POST" action="{{ route('admin.blog.post') }}">
      @csrf
      <div class="input-container">
          <label for="file">Картинка поста</label>
          <input enctype="multipart/form-data" type="file" accept=".jpg, .jpeg, .png" id="blog-image" name="blog-image">
      </div>
      @include(
        'includes.forms.items-set', [ 'items' => [
          [
              'name' => 'subject',
              'type' => 'text',
              'label' => 'Тема поста',
              'required' => true
          ],
          [
              'name' => 'text',
              'type' => 'textarea',
              'label' => 'Тело поста',
              'required' => true
          ]
        ]]
      )
      <input type="submit" value="Отправить">
      <input type="reset" value="Отчистить">
    </form>
    <form enctype="multipart/form-data" class="blog-form" method="POST" action="{{ route('admin.blog.upload') }}">
        @csrf
        <div class="input-container">
            <label for="file">Загрузить блог (из CSV)</label>
            <input enctype="multipart/form-data" type="file" accept=".csv" id="blogs-file" name="blogs-file">
        </div>
        <input type="submit" value="Отправить">
    </form>
</div>