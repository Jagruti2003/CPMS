<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Careers Application</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif; 
      margin: 20px;
      background-color: #4285f4; /* Google Blue */
      color: black; /* Text color changed to black */
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
      font-weight: 600;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px; /* Rounded corners */
    }
    button {
      background-color: #ffd700; /* Dark Yellow */
      color: black; /* Text color changed to black */
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #b29600; /* Darker shade for hover effect */
    }
    .error-message {
      color: #ff0000;
      margin-top: 5px;
    }
    .cover-page {
      background-color: #4285f4;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 8px 8px 0 0;
    }
  </style>
</head>
<body>

  <div class="cover-page">
    <h1 style="color: #ffd700;">Google Careers </h1> 
    <p></p>
  </div>

  <form action="/submit" method="post" onsubmit="return validateForm()">
    <h1 style="color: #ff0000;"> Hiring Form</h1> 
    <label for="legalName">Name</label>
    <input type="text" id="legalName" name="legalName" placeholder="Enter your name" required>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="your@example.com" required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
      <option value="" disabled selected>Select your country</option>
      <option value="usa">United States</option>
      <option value="canada">Canada</option>
      <option value="uk">United Kingdom</option>
      <option value="india">India</option>
      <option value="others">Others</option>
      <!-- Add more countries as needed -->
    </select>

    <label for="phone">Contact Number</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
    <span id="phoneError" class="error-message"></span>

    <label for="cv">CV</label>
    <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx" required>

    <label for="coverpage">Coverpage</label> <!-- Fixed typo in label -->
    <input type="file" id="coverpage" name="coverpage" accept=".pdf, .doc, .docx" required>

    <label for="experience">Experience</label>
    <textarea id="experience" name="experience" rows="4" placeholder="Enter your experience"></textarea>

    <label for="training">Training</label> <!-- Added Training -->
    <textarea id="training" name="training" rows="4" placeholder="Enter your training"></textarea>

    <label for="skills">Skills</label> <!-- Added Skills -->
    <textarea id="skills" name="skills" rows="4" placeholder="Enter your skills"></textarea>

    <label for="cgpa">CGPA</label>
    <input type="text" id="cgpa" name="cgpa" placeholder="Enter your CGPA">

    <button type="submit">Submit Application</button>
  </form>

  <script>
    function validateForm() {
      var phoneInput = document.getElementById('phone');
      var phoneError = document.getElementById('phoneError');
      var phoneRegex = /^[0-9]{10}$/;

      if (!phoneRegex.test(phoneInput.value)) {
        phoneError.textContent = 'Please enter a valid 10-digit phone number';
        return false;
      } else {
        phoneError.textContent = '';
      }

      return true;
    }
  </script>
</body>
</html>