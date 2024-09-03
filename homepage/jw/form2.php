<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amazon Application</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
  <style>
    body {
      font-family: 'Playfair Display', serif;
      margin: 20px;
      background-color: #000; /* Black */
      color: #fff; /* White text on black background */
    }
    form {
      max-width: 600px;
      margin: auto;
      background-color: #1a1a1a; /* Dark Gray */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1); /* White shadow on dark gray */
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #fff; /* White */
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 14px;
    }
    button {
      background-color: #ff9900; /* Amazon Orange */
      color: #fff; /* White */
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #cc7a00; /* Darker shade for hover effect */
    }
    .error-message {
      color: #ff0000;
      margin-top: 5px;
      font-size: 12px;
      img {
      max-width: 100%;
      margin-bottom: 20px;
    }
    }
  </style>
</head>
<body>
<!-- Amazon Logo -->
<img src="https://imgs.search.brave.com/xif2DbXAHhGWBmUDNAvs5sf2HLxEwOFoTFFe-pNQmNE/rs:fit:500:0:0/g:
ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC93cDc3NzEx/NTcuanBn" alt="Amazon Logo" style="max-width: 100%; margin-bottom: 20px;">
<div class="centered-form">

  <form action="/submit" method="post" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="First-Middle-Last" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required> 

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="+91 XXXXXXXXXX" required>
    <span id="phoneError" class="error-message"></span>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" min="18" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="" disabled selected>Select gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="resume">Resume (PDF):</label>
    <input type="file" id="resume" name="resume" accept=".pdf" required>

    <label for="position">Position Applying For:</label>
    <select id="position" name="position" required>
      <option value="" disabled selected>Select a position</option>
      <option value="software">Software Developer</option>
      <option value="business">Business Analyst</option>
      <option value="marketing">Marketing Specialist</option>
    </select>

    <div>
      <label>Education:</label>
      <input type="text" name="education" placeholder="Your highest qualification" required>
    </div>

    <label for="experience">Years of Experience:</label>
    <input type="number" id="experience" name="experience" min="0" required>

    <label for="comments">Have you worked earlier at Amazon?</label>
    <textarea id="comments" name="comments" rows="4" required></textarea>

    <button type="submit">Submit Application</button>
  </form>

  <script>
    function validateForm() {
      var phoneInput = document.getElementById('phone');
      var phoneError = document.getElementById('phoneError');
      var phoneRegex = /^\+91[0-9]{10}$/;

      if (!phoneRegex.test(phoneInput.value)) {
        phoneError.textContent = 'Please enter a valid phone number in the format +91XXXXXXXXXX';
        return false;
      } else {
        phoneError.textContent = '';
      }

      return true;
    }
  </script>
</body>
</html>