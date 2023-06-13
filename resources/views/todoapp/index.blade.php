@extends("layouts.app")
@section("title", "To-Do List")

@section("content")
<form method="POST">
  @csrf
  <div>
    <input type="text" name="content" placeholder="Enter a to-do item" required>
    <input type="submit" value="Add">
  </div>
</form>
@endsection
