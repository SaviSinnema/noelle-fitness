<div class="form-wrapper">
    <div id="success">
        <h2>Thank you for your application.</h2>
        <p>I will personally contact you when open spots are available!</p>
        <a href="/" class="cta">Go back</a>
    </div>

    <form id="get-started" method="post" action="<?php echo esc_url(get_permalink()); ?>#success">
        <fieldset class="form-step" id="step-1">
            <legend class="step-name">
                What do you want to achieve? <span class="required-field" aria-label="(required)">*</span>
            </legend>

            <div class="field">
                <input type="radio" name="goal" id="weight" value="Weight loss" required>
                <label for="weight">Weight loss</label>
            </div>
            <div class="field">
                <input type="radio" name="goal" id="muscle" value="Building muscle">
                <label for="muscle">Building muscle/strength
                </label>
            </div>
            <div class="field">
                <input type="radio" name="goal" id="recomp" value="Body recomposition">
                <label for="recomp">Body recomposition</label>
            </div>
            <div class="field">
                <input type="radio" name="goal" id="health" value="Healthier lifestyle">
                <label for="health">Healthier lifestyle </label>
            </div>

            <div class="formfooter">
                <button type="button" id="next-1" aria-label="Next step" aria-label="Next step"><span>Next</span></button>
            </div>
        </fieldset>

        <!-- Step 2 -->
        <fieldset class="form-step" id="step-2">
            <legend class="step-name">
                What is your gender? <span class="required-field" aria-label="(required)">*</span>
            </legend>

            <div class="field">
                <input type="radio" name="gender" value="Male" id="male" required>
                <label for="male">Male</label>
            </div>

            <div class="field">
                <input type="radio" name="gender" value="Female" id="female">
                <label for="female">Female</label>
            </div>

            <div class="formfooter">
                <button type="button" id="previous-2" aria-label="Go back a step"><span>Previous</span></button>
                <button type="button" id="next-2" aria-label="Next step"><span>Next</span></button>
            </div>

        </fieldset>

        <!-- Step 3 -->
        <fieldset class="form-step" id="step-3">
            <legend class="step-name">
                What is your age? <span class="required-field" aria-label="(required)">*</span>
            </legend>

            <div class="field">
                <input type="radio" name="age" value="Under 18" required>
                <label>Under 18 </label>
            </div>

            <div class="field">
                <input type="radio" name="age" value="Between 18 and 25">
                <label>Between 18 and 25 </label>
            </div>

            <div class="field">
                <input type="radio" name="age" value="Between 25 and 30">
                <label>Between 25 and 30 </label>
            </div>

            <div class="field">
                <input type="radio" name="age" value="Over 30">
                <label>Over 30 </label>
            </div>

            <div class="formfooter">
                <button type="button" id="previous-3" aria-label="Go back a step"><span>Previous</span></button>
                <button type="button" id="next-3" aria-label="Next step"><span>Next</span></button>
            </div>
        </fieldset>

        <!-- Step 4 -->
        <div class="form-step" id="step-4">
            <div class="field field--textarea">
                <label for="motivation" class="step-name">
                    What is your motivation to start now? <span class="required-field" aria-label="(required)">*</span>
                </label>

                <textarea name="motivation" id="motivation" required></textarea>
            </div>

            <div class="formfooter">
                <button type="button" id="previous-4" aria-label="Go back a step"><span>Previous</span></button>
                <button type="button" id="next-4" aria-label="Next step"><span>Next</span></button>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="form-step" id="step-5">
            <div class="field field--textarea">
                <label for="whyme" class="step-name">
                    Why do you want to work with me? 
                </label>

                <textarea name="whyme" id="whyme" ></textarea>
            </div>

            <div class="formfooter">
                <button type="button" id="previous-5" aria-label="Go back a step"><span>Previous</span></button>
                <button type="button" id="next-5" aria-label="Next step"><span>Next</span></button>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="form-step" id="step-6">
            <div class="field field--textarea">
                <label for="best_outcome" class="step-name">
                    What would be the best possible outcome if we were to work together? 
                </label>

                <textarea name="best_outcome" id="best_outcome"></textarea>
            </div>

            <div class="formfooter">
                <button type="button" id="previous-6" aria-label="Go back a step"><span>Previous</span></button>
                <button type="button" id="next-6" aria-label="Next step"><span>Next</span></button>
            </div>
        </div>

        <!-- Step 7 -->
        <fieldset class="form-step" id="step-7">
            <legend class="step-name">
                Your details
            </legend>

            <div class="field">
                <label for="name">Full name: <span class="required-field" aria-label="(required)">*</span></label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="field">
                <label for="email">Email: <span class="required-field" aria-label="(required)">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="field">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="field">
                <label for="instagram">Instagram:</label>
                <input type="text" id="instagram" name="instagram">
            </div>

            <input type="hidden" name="submitted" value="1">

            <div class="formfooter">
                <button type="button" id="previous-7" aria-label="Go back a step"><span>Previous</span></button>
                <button type="submit">Submit</button>
            </div>
        </fieldset>
    </form>
</div>
