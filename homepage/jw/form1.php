<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flipkart Job Application</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 20px;
      background-color: #ffffcc; /* Light Yellow */
    }
    form {
      max-width: 600px;
      margin: auto;
      background-color: #e6e6ff; /* Light Blue */
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
      background-color: #4285f4;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #357ae8;
    }
    .error-message {
      color: #ff0000;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <form action="/submit" method="post" onsubmit="return validateForm()">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" placeholder="First-Middle-Last" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="xyz@gmail.com" required> 

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="+91" required>
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

    <label for="comments">Why do you want to work at Flipkart?</label>
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