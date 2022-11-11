<?php require('header.php'); ?>
    <body>
    <main class="main calculate_main">
        <div class="calc-container">
            <div class="container">
                <div >
                    <form class="screen" name="screen_calc">
                        <input class="inp" type="text" name="calc">
                    </form>
                </div>
                <div class="buttons">
                <button class="key digit_7">7</button>
                <button class="key digit_8">8</button>
                <button class="key digit_9">9</button>
                <button class="key operation_plus">+</button>
                <button class="key operation_minus">-</button>
                <button class="key digit_4">4</button>
                <button class="key digit_5">5</button>
                <button class="key digit_6">6</button>
                <button class="key operation_multiplication">*</button>
                <button class="key operation_division">/</button>
                <button class="key digit_1">1</button>
                <button class="key digit_2">2</button>
                <button class="key digit_3">3</button>
                <button class="key bracket_open">(</button>
                <button class="key bracket_closing">)</button>
                <button class="key digit_0">0</button>
                <button class="key digit_point">.</button>
                <button class="key" style="visibility: hidden;"></button>
                <button class="key result">=</button>
                <button class="key clear">C</button>
                </div>
            </div>
        </div>
    </main>

<?php require('footer.php'); ?>