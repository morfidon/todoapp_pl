@extends("layouts.app")
@section("title", "To-Do List")

@section("content")
<h1>To-Do List</h1>

<form>
  <div>
    <input type="text" placeholder="Enter a to-do item" required>
    <input type="submit" value="Add">
  </div>
</form>
@endsection
