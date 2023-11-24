const myForm = document.getElementById("form");

// e = event.
myForm.addEventListener("submit", function (e) {
    // prevent page from reloading/navigating away on submit. Instead, we're gonna use fetch to send through that data.
    e.preventDefault();

    //first method: multi part/form data. We need a form data object. Based on *this* form. It's a collection of key value pairs. We need to pass this into the API
    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    // first = key, second = value
    for (const pair of formData) {
        searchParams.append(pair[0], pair[1], pair[2], pair[3]);
    }

    fetch("ajax.php", {
        method: "post",
        // we can pass through the form data here and fetch is gonna set the content type of the request to be multi part/form data.
        body: searchParams
    })
        .then(response => response.json())
        .then(responseObject => {

            console.log(responseObject.status)

            if (responseObject.status === "error") {

                let allFields = document.querySelectorAll("form .form-field");

                allFields.forEach(formField => {
                    let theField = formField.querySelector('.field'),
                        fieldError = formField.querySelector('.field-error');

                    // Remove the error message, due to the following check below
                    if(fieldError) { fieldError.remove(); }

                    // If the looped field is in the errors object, create error message
                    if(theField.name in responseObject.errors) {

                        let fieldError = document.createElement('div');
                            fieldError.className = 'field-error';
                            fieldError.innerText = responseObject.errors[theField.name];

                        formField.appendChild(fieldError);
                    }
                });

            } else {
                myForm.submit();
                console.log("Het is gelukt!");
            }
        });
});


// fetch("ajax.php", {
//     headers: {
//         "Content-Type": "application/x-www-form-urlencoded",
//     },
//     method: "post"})
//     .then((response) => response.json())
//     .then((data) => console.log(data));
//
// console.log('ajax?')