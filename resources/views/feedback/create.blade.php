<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
  <style>
    body {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #add8e6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .feedback-form {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .feedback-form h2 {
      text-align: center;
    }

    input[type="text"], input[type="email"], textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="feedback-form">
    <h2>Feedback Form</h2>
    @if(session('success'))
      <div>
        {{ session('success') }}
      </div>
    @endif
    <form action="/feedback" method="POST">
      @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="project">Project Name:</label>
      <input type="text" id="project" name="project" placeholder="Enter project" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" placeholder="Enter message" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
