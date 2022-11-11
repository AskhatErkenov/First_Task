
// Функция priority позволяет получить
// значение приоритета для оператора.
// Возможные операторы: +, -, *, /.
function priority(operation) {
    if (operation == '+' || operation == '-'){
        return 1;
    } else {
        return 2;
    }
}

//Проверка является ли строка str числом
function isNumeric(str) {
    return /^\d+(.\d){0,1}$/.test(str);
}

//Проверка является ли строка str цифрой
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

//Проверка является ли строка str оператором
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.
function tokenize(str) {
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        if (isDigit(char) || char == '.'){
            lastNumber += char;
        } else {
            if (lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        }
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        }
    }
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }
    return tokens;
}

// Функция compile принимает один аргумент -- строку
// с арифметическим выражением, записанным в инфиксной
// нотации, и преобразует это выражение в обратную
// польскую нотацию (ОПН). Возвращаемое значение --
// результат преобразования в виде строки, в которой
// операторы и операнды отделены друг от друга пробелами.
// Выражение может включать действительные числа, операторы
// +, -, *, /, а также скобки. Все операторы бинарны и левоассоциативны.
// Функция реализует алгоритм сортировочной станции
// (https://ru.wikipedia.org/wiki/Алгоритм_сортировочной_станции).
function compile(str) {
    let out = [];
    let stack = [];
    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)){
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length - 1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }
    while (stack.length > 0) {
        out.push(stack.pop());
    }
    return out.join(' ');
}

// Функция evaluate принимает один аргумент -- строку
// с арифметическим выражением, записанным в обратной
// польской нотации. Возвращаемое значение -- результат
// вычисления выражения. Выражение может включать
// действительные числа и операторы +, -, *, /.
function evaluate(str) {
    let stack = [];
    let lastNumber = ''
    for (char of compile(str)) {
        if (isDigit(char) || char == '.'){
            lastNumber += char;
        } else {
            if (lastNumber.length > 0) {
                stack.push(lastNumber);
                lastNumber = '';
            }
        }
        if (isOperation(char)) {
            if (char == '+'){
                let num2 = stack.pop();
                let num1 = stack.pop();
                let sum = parseFloat(num1) + parseFloat(num2);
                stack.push(sum)
            }
            if (char == '-'){
                let num2 = stack.pop();
                let num1 = stack.pop();
                let rus = parseFloat(num1) - parseFloat(num2);
                stack.push(rus)
            }
            if (char == '*'){
                let num2 = stack.pop();
                let num1 = stack.pop();
                let pr = parseFloat(num1) * parseFloat(num2);
                stack.push(pr)
            }
            if (char == '/') {
                let num2 = stack.pop();
                let num1 = stack.pop();
                let del = parseFloat(num1) / parseFloat(num2);
                stack.push(del)
            }
        }
    }
    return stack.pop();
}

// Функция clickHandler предназначена для обработки
// событий клика по кнопкам калькулятора.
// По нажатию на кнопки с классами digit, operation и bracket
// на экране (элемент с классом screen) должны появляться
// соответствующие нажатой кнопке символы.
// По нажатию на кнопку с классом clear содержимое экрана
// должно очищаться.
// По нажатию на кнопку с классом result на экране
// должен появиться результат вычисления введённого выражения
// с точностью до двух знаков после десятичного разделителя (точки).
function clickHandler(event) {
    num = event.target.textContent;
    document.screen_calc.calc.value = document.screen_calc.calc.value + num;
}

function clean() {
    document.screen_calc.calc.value = "";
}

function result() {
    let str = document.screen_calc.calc.value;
    document.screen_calc.calc.value = evaluate(str);
}

document.querySelector('.container').onclick = (event) => {
    if (!event.target.classList.contains('key')){
        return;
    }
    if (event.target.classList.contains('clear')) {
        return;
    }
    if (event.target.classList.contains('result')) {
        return;
    }
    clickHandler(event);
}

document.querySelector('.clear').onclick = clean;

document.querySelector('.result').onclick = result;
