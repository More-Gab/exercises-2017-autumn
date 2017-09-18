console.log('Good morning!');

var value;
var type;

value = '123'; // assign a new value into the 'value' variable
console.log(value); // log the current value of 'value' variable
type = typeof value; // assign the type of the 'value' variable into 'type'
// previous line is equivalent to (in this case):
// type = 'string';
console.log(type); // log the current value of 'type' variable

value = 123;
console.log(value);
type = typeof value;
console.log(type);

value = '123 Times Square';
console.log(value);
type = typeof value;
console.log(type);

value = 12.3;
console.log(value);
type = typeof value;
console.log(type);

value = true;
console.log(value);
type = typeof value;
console.log(type);

value = 'true';
console.log(value);
type = typeof value;
console.log(type);

value = [1, 2, 3];
console.log(value);
type = typeof value;
console.log(type);

value = { foo: 'bar' };
console.log(value);
type = typeof value;
console.log(type);

value = document;
console.log(value);
type = typeof value;
console.log(type);


type = typeof value2;
console.log(type);


var message_element = document.getElementById('message');
console.log(message_element);
console.log(typeof message_element);

var text_within_message = message_element.innerHTML; // reading the HTML
console.log(text_within_message); // logging it
message_element.innerHTML = 'A new message!'; // writing the HTML
console.log(text_within_message); // logs the original message
console.log(message_element.innerHTML);

// function declaration:
// this function changes the innerHTML of element id="message"
// to 'A new message!'
function change_message() {
    // change the contents of the message element (id="message")
    var message_element = document.getElementById('message');
    message_element.innerHTML = 'Message set by a function!';
}

// function call:
change_message();