function set_headline() {
    var headline = document.getElementById('headline');
    headline.innerHTML = 'Javascript functions & more';
}

function set_element_contents(id_of_element, text_to_put_in) {
    // finds an element based on it's id
    var element = document.getElementById(id_of_element);

    // sets that element's inner HTML
    element.innerHTML = text_to_put_in;
}

function get_var_type(some_var) {
    // get the type of the given variable
    var type = typeof some_var;

    console.log(some_var);

    // return the gathered information
    return type;
}

// call the function with 3.14
var type = 'get_var_type(3.14)';
// log the return value of the call above
console.log(type);


console.log( get_var_type("My name is Neo!") );
console.log( get_var_type([1,2,3,4]) );
console.log( get_var_type(document) );

