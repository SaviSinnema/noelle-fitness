    let currentStep = 1;
    addEventListener(currentStep);

    function addEventListener(currentStep) {
        let nextStepButton = document.getElementById(`next-${currentStep}`);

    if (document.body.contains(nextStepButton)) {
        nextStepButton.addEventListener("click", function () {
            handleNextButtonClick(currentStep);
        });
        }

    let previousStepButton = document.getElementById(`previous-${currentStep}`);

    if (document.body.contains(previousStepButton)) {
        previousStepButton.addEventListener("click", function () {
            prevStep(currentStep);
        });
        }
    }

    function showStep(currentStep) {
        document.querySelectorAll('.form-step').forEach((el) => {
            el.style.display = 'none';
        });

    document.getElementById(`step-${currentStep}`).style.display = 'flex';

    addEventListener(currentStep);
    }

    function handleNextButtonClick(currentStep) {
        // Define radio button groups for the first three steps
        const radioGroups = {
        1: 'goal',
    2: 'gender',
    3: 'age'
        };

    // Define textarea steps
    const textareaSteps = [4, 5, 6];

    // If the current step has a radio button group, check if at least one option is selected
    const radioGroupName = radioGroups[currentStep];
    if (radioGroupName && !isRadioButtonSelected(radioGroupName)) {
        alert('Please select an option before proceeding.');
    return;
        }

    // If the current step has a textarea, check if it is not empty
    if (textareaSteps.includes(currentStep) && !isTextareaFilled(currentStep)) {
        alert('Please fill in the textarea before proceeding.');
    return;
        }

    // Proceed to the next step
    if (currentStep < 8) {
        currentStep++;
    showStep(currentStep);
        }
    }

    function prevStep(currentStep) {
        if (currentStep > 1) {
        currentStep--;
    showStep(currentStep);
        }
    }

    function isRadioButtonSelected(radioGroupName) {
        const radioButtons = document.querySelectorAll(`input[name="${radioGroupName}"]:checked`);
        return radioButtons.length > 0;
    }

function isTextareaFilled(currentStep) {
    if (currentStep = 4) {
        let textarea = document.getElementById(`motivation`); 
        return textarea.value.trim() !== '';
    } 
    if (currentStep = 5) {
        let textarea = document.getElementById(`whyme`); 
        return textarea.value.trim() !== '';
    } 
    if (currentStep = 4) {
        let textarea = document.getElementById(`best_outcome`); 
        return textarea.value.trim() !== '';
    } 
    
}
