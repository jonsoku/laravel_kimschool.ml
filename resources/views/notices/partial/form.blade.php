<fieldset class="board-title-form">
    <label for="board-title-form">Title</label>
    <input id="board-title-form" type="title" name="title" value="{{old('title', $notice->title)}}" >
    @if ($errors->has('title'))
        <h3 class="board-error"><i class="fas fa-exclamation-circle"></i> 타이틀을 입력해주세요!!</h3>
    @endif
</fieldset>

<fieldset class="board-content-form">
    <label for="board-content-form">Content</label>
    <textarea id="board-content-form" name="content">{{old('content', $notice->content)}}</textarea>
    @if ($errors->has('content'))
        <h3 class="board-error"><i class="fas fa-exclamation-circle"></i> 본문을 입력해주세요!!</h3>
    @endif
</fieldset>
