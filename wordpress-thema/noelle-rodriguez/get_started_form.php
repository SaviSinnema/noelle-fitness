<form id="get-started" action="<?php echo esc_url(get_permalink()); ?>" method="post">

<fieldset class="form-step" id="step-1">
    <legend>
        What do you want to achieve?
    </legend>

    <label>
        <input type="radio" name="goal" value="Weight loss"> Weight loss
    </label>

    <label>
        <input type="radio" name="goal" value="Building muscle"> Building muscle/strength
    </label>

    <label>
        <input type="radio" name="goal" value="Body recomposition"> Body recomposition
    </label>

    <label>
        <input type="radio" name="goal" value="Healthier lifestyle"> Healthier lifestyle 
    </label>

    <br /><button type="button" id="next-1">Next</button>
</fieldset>

<!-- Step 2 -->
<fieldset class="form-step" id="step-2">
    <legend>
        What is your gender?
    </legend>

    <label>
        <input type="radio" name="gender" value="Male"> Male
    </label>

    <label>
        <input type="radio" name="gender" value="Female"> Female
    </label>

    <br /><button type="button" id="previous-2">Previous</button>
    <br /><button type="button" id="next-2">Next</button>  
</fieldset>

<!-- Step 3 -->
<fieldset class="form-step" id="step-3">
    <legend>
        What is your age?
    </legend>

    <label>
        <input type="radio" name="age" value="Under 18"> Under 18
    </label>

    <label>
        <input type="radio" name="age" value="Between 18 and 25"> Between 18 and 25
    </label>

    <label>
        <input type="radio" name="age" value="Between 25 and 30"> Between 25 and 30
    </label>

    <label>
        <input type="radio" name="age" value="Over 30"> Over 30 
    </label>

    <br /><button type="button" id="previous-3">Previous</button>
    <br /><button type="button" id="next-3">Next</button>  
</fieldset>
    
<!-- Step 4 -->
<fieldset class="form-step" id="step-4">
    <legend>
        Motivation
    </legend>

    <label for="motivation">
        What is your motivation to start now?
    </label>

    <textarea name="motivation" id="motivation"></textarea>

    <br /><button type="button" id="previous-4">Previous</button>
    <br /><button type="button" id="next-4">Next</button>
</fieldset>

<!-- Step 5 -->
<fieldset class="form-step" id="step-5">
    <legend>
        Why me?
    </legend>

    <label for="whyme">
        Why do want to work with me?
    </label>

    <textarea name="whyme" id="whyme"></textarea>

    <br /><button type="button" id="previous-5">Previous</button>
    <br /><button type="button" id="next-5">Next</button>
</fieldset>

<!-- Step 6 -->
<fieldset class="form-step" id="step-6">
    <legend>
        Outcome
    </legend>
    
    <label for="best_outcome">
        What would be the best possible outcome if we were to work together?
    </label>

    <textarea name="best_outcome" id="best_outcome"></textarea>

    <br /><button type="button" id="previous-6">Previous</button>
    <br /><button type="button" id="next-6">Next</button>
</fieldset>

<!-- Step 7 -->
<fieldset class="form-step" id="step-7">
    <legend>
        Your details
    </legend>

    <label for="name">Full name:</label>
    <input type="text" id="name" name="name">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"> 

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone"> 

    <label for="instagram">Instagram:</label>
    <input type="text" id="instagram" name="instagram"> 

    <br /><button type="button" id="previous-7">Previous</button>
    <br /><button type="submit">Submit</button>
</fieldset>

<div id="success"></div>

<div id="error"></div>

</form>
