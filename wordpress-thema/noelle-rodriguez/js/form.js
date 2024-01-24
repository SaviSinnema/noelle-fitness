const our_ajax_url = '/wp-admin/admin-ajax.php'; // Adjust the path accordingly

let currentStep = 1;
addEventListener(currentStep);

function addEventListener(currentStep) {
    let nextStepButton = document.getElementById(`next-${currentStep}`);

    if (document.body.contains(nextStepButton)) {
        nextStepButton.addEventListener("click", nextStep);
    }

    let previousStepButton = document.getElementById(`previous-${currentStep}`);

    if (document.body.contains(previousStepButton)) {
        previousStepButton.addEventListener("click", prevStep);
    }
}

function showStep(currentStep) {
    document.querySelectorAll('.form-step').forEach((el) => {
        el.style.display = 'none';
    });

    document.getElementById(`step-${currentStep}`).style.display = 'flex';

    addEventListener(currentStep);
}

function nextStep() {
    if (currentStep < 8) {
        currentStep++;
        showStep(currentStep);
    }
}

function prevStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

function submitForm() {
    const goal = document.querySelector('input[name=goal]:checked').value;
    const gender = document.querySelector('input[name=gender]:checked').value;
    const age = document.querySelector('input[name=age]:checked').value;
    const motivation = document.getElementById('motivation').value;
    const whyme = document.getElementById('whyme').value;
    const best_outcome = document.getElementById('best_outcome').value;

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const instagram = document.getElementById('instagram').value;
    console.table(goal, gender, age, motivation, whyme, best_outcome, name, email, phone, instagram);   

    const formData = new FormData();
    formData.append('action', 'submit_form');

    formData.append('Doel: ', goal);
    formData.append('Geslacht: ', gender);
    formData.append('Leeftijd: ', age);
    formData.append('Motivatie: ', motivation);
    formData.append('Waarom mij?: ', whyme);
    formData.append('Gewenst resultaat: ', best_outcome);

    formData.append('Naam: ', name);
    formData.append('E-mail: ', email);
    formData.append('Telefoon: ', phone);
    formData.append('Instagram: ', instagram);

    // fetch(our_ajax_url, {
    //     method: 'POST',
    //     body: formData,
    // })
    //     .then(response => response.json())
    //     .then(data => {
    //         if (data.success) {
    //             document.getElementById('success').textContent = 'Thank you for your application, I will personally contact you when open spots are available!';

    //             document.getElementById('success').style.display = 'block';
    //         } else {
    //             document.getElementById('error').textContent = 'Error submitting the form. Please try again.';
    //             document.getElementById('success').style.display = 'error';
    //         }
    //     })
    //     .catch(error => {
    //         console.error('Error:', error);
    //  });
}

document.querySelector('.get-started-form form').addEventListener('submit', function (e) {
    // e.preventDefault(); // Prevents the default form submission
    submitForm(); // Your AJAX form submission logic
});
