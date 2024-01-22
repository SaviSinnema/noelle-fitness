function submitForm() {
    // let currentStep = 1;

    // function showStep(step) {
    //     document.querySelectorAll('.form-step').forEach((el) => {
    //         el.style.display = 'none';
    //     });

    //     document.getElementById(`step-${step}`).style.display = 'block';
    // }

    // function nextStep() {
    //     if (currentStep < 3) {
    //         currentStep++;
    //         showStep(currentStep);
    //     }
    // }

    // function prevStep() {
    //     if (currentStep > 1) {
    //         currentStep--;
    //         showStep(currentStep);
    //     }
    // }

    // Get form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const age = document.getElementById('age').value;
    const country = document.getElementById('country').value;

    // Prepare data for review
    document.getElementById('review-name').textContent = name;
    document.getElementById('review-email').textContent = email;
    document.getElementById('review-age').textContent = age;
    document.getElementById('review-country').textContent = country;

    // AJAX call to submit the form
    const formData = new FormData();
    formData.append('action', 'submit_form');
    formData.append('name', name);
    formData.append('email', email);
    formData.append('age', age);
    formData.append('country', country);

    fetch(your_ajax_url, {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Form submitted successfully!');
            } else {
                alert('Error submitting the form. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
