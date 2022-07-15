//javascript validation code

const name= document.getElementByName('user_input') // first we assigned a variable to the form data user_input as we did in 
                                                   // in the backend logic controller
const form = document.getElementById('form')// we are getting the form by id

// our form id has been assigned a task if the user click the form button 
form.addEventListener('submit', (e) => {

  let messages = [] // message is an empty array for now

  if (user_input.value === '' || user_input.value.length < 1)  // we will run the code if the two conditions are false
  {
    messages.push('This field should not be empty') // if one of the condition is true we will send this message to the user

  } if (messages.length > 0)  // this condition will check if our user input value is greater than 0
  {                           // if the condition is true we will allow the user to submit the form
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})


