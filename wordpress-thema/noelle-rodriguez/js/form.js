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
