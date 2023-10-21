@extends('layouts.app')
<style> 
body, h1, p, ul, li, a, button, input {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
}

.form-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    max-width: 500px;
    margin: 30px auto;
    padding: 30px;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
}

a {
    text-decoration: none;
    color: #333;
    margin-top: 10px;
}

form {
    display: flex;
    flex-direction: column;
    width: 100%;
}

label {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

textarea {
    resize: none;
    height: 100px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
</style>


@section('content')
    <div class="form-container">
        <h1>Create Task</h1>
        <a href="{{ route('tasks.index') }}">Back to Task List</a>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required></textarea>
            <br>
            <button type="submit">Create Task</button>
        </form>
    </div>
@endsection