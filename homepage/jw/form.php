<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Form</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 20px;
      background-color: #f5f5f5;
    }
    form {
      max-width: 600px;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 700;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
    .checkbox-container {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
    }
    #experience {
      margin-right: 8px;
    }
  </style>
</head>
<body>

  <form action="/submit" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890" required>

    <label for="address">Address:</label>
    <textarea id="address" name="address" rows="4" required></textarea>

    <label for="resume">Resume (PDF):</label>
    <input type="file" id="resume" name="resume" accept=".pdf" required>

    <label for="position">Field of Interest:</label>
    <select id="position" name="position" required>
      <option value="" disabled selected>Select a position</option>
      <option value="developer">Software Developer</option>
      <option value="designer">Cybersecurity Developer</option>
      <option value="manager">Data Analyst</option>
    </select>

    <div class="checkbox-container">
      <label for="experience">Have you completed any internship?</label>
      <input type="checkbox" id="experience" name="experience">
    </div>

    <label for="comments">Tell something about yourself?</label>
    <textarea id="comments" name="comments" rows="4"></textarea>

    <button type="submit">Submit Application</button>
  </form>

</body>
</html>