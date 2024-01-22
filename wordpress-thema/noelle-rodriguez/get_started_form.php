
<!-- Step 1 -->
<div class="form-step" id="step-1">
    <h2>Step 1: Personal Information</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" required>

    <button onclick="nextStep()">Next</button>
</div>

<!-- Step 2 -->
<div class="form-step" id="step-2">
    <h2>Step 2: Additional Information</h2>
    <label for="age">Age:</label>
    <input type="number" id="age" required>

    <label for="country">Country:</label>
    <input type="text" id="country" required>

    <button onclick="prevStep()">Previous</button>
    <button onclick="nextStep()">Next</button>
</div>

<!-- Step 3 -->
<div class="form-step" id="step-3">
    <h2>Step 3: Confirmation</h2>
    <p>Review your information:</p>
    <p><strong>Name:</strong> <span id="review-name"></span></p>
    <p><strong>Email:</strong> <span id="review-email"></span></p>
    <p><strong>Age:</strong> <span id="review-age"></span></p>
    <p><strong>Country:</strong> <span id="review-country"></span></p>

    <button onclick="prevStep()">Previous</button>
    <button onclick="submitForm()">Submit</button>
</div>
