<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Level - 3</title>
    <style>
        html{
            background-image: url(images/ghost.jpeg);
        }
      .slideshow-items {
        width: 520px;
        height: 500px;
      }

      .slideshow-thumbnails {
        width: 100px;
        height: 100px;
      }

      #slideshow-items-container {
        display: inline-block;
        position: relative;
      }

      #lens {
        background-color: rgba(233, 233, 233, 0.4);
      }

      #lens,
      #result {
        position: absolute;
        display: none;
        z-index: 1;
      }

      .slideshow-items {
        display: none;
      }

      .slideshow-items.active {
        display: block;
      }

      .slideshow-thumbnails {
        opacity: 0.5;
      }

      .slideshow-thumbnails.active {
        opacity: 1;
      }

      #lens,
      .slideshow-items,
      .slideshow-thumbnails,
      #result {
        border: solid var(--light-grey-2) 1px;
      }

      * {
        box-sizing: border-box;
      }

      /* Float four columns side by side */
      .column {
        float: left;
        padding: 0 10px;
      }

      /* Remove extra left and right margins, due to padding */
      .row {
        margin: 0 -5px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Responsive columns */
      @media screen and (max-width: 600px) {
        .column {
          width: 100%;
          display: block;
          margin-bottom: 20px;
        }
      }

      /* Style the counter cards */
      .card1 {
        padding: 16px;
        text-align: center;
        border: none;
        height: 400px;
        width: 130px;
      }

      .card1 img {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        text-align: center;
        background-color: #f1f1f1;
      }

      .card2 {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 10px;
        text-align: center;
        background-color: #f1f1f1;
        border-radius: 30px;
        height: 530px;
        width: 1080px;
      }

      .card2 img {
        border-radius: 10px;
        text-align: center;
      }

      .container {
        border-radius: 20px;
        max-width: 100%;
        max-height: 1250px;
        margin: 0 0;
        padding: 20px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #98bec4;
        box-shadow: 0px 0px 10px #958487;
        margin-top: 10px;
        margin-bottom: 10px;
          margin-left: 10px;
        margin-right: 10px;
      }

      .header {
        border-radius: 30px;
        max-width: 100%;
        max-height: 20px;
        padding: 30px;
        padding-left: 20px;
        padding-right: 20px;
        background-color: #90b3b9;
        box-shadow: 0px 0px 10px #fff;
        margin-top: 5px;
        margin-bottom: 15px;
        display: flex;
        text-align: center;
      }

      .header h1 {
        font-size: 30px;
        text-align: center;
       padding-left: 500px;
       margin-top: -18px;
           position: absolute;
      }
.header h2 {
        text-align: center;
        margin-top: -11px;
        margin-left: 20px;
    font-size: 20px;
     position: absolute;
      }

      .header a {
        margin-top: 0px;
        position: absolute;
        right: 65px;
        top: 45px;
        padding: 10px;
        background-color: #00c853;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        box-shadow: 0px 0px 10px #fff;
      }

      .header button {
        margin-top: 0px;
        position: absolute;
        right: 155px;
        top: 45px;
        padding: 10px;
        background-color: #00c853;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: none;
        box-shadow: 0px 0px 10px #fff;
      }
.restart{
        margin-top: 20px;
    margin-left: 10px;
        right: 155px;
        top: 45px;
        padding: 10px;
        background-color: #a56326dd;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: none;
        box-shadow: 0px 0px 10px #fff;
      }

      .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1;
      }

      .content {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50%;
        height: 50%;
        background-color: #fff;
        padding: 20px;
        text-align: center;
        border-radius: 20px;
      }

      .close {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #000;
        cursor: pointer;
      }

      .quiz {
        border-radius: 30px;
        max-width: 100%;
        max-height: max-content;
        height: 300px;
        padding-top: 150px;
        padding-left: 20px;
        padding-right: 20px;
        
        margin-top: 20px;
        margin-bottom: 10px;
        display: flex;
        text-align: center;
      }

      .header p {
        text-align: center;
        margin-top: auto;
        margin-left: 20px;
      }
        

* {
  margin: 0px;
  padding: 0px;
  font: 16px 'Source Sans Pro', sans-serif;
  border: none;
  box-sizing: border-box;
}






#quiz {
  margin: 50px 50px 0px;
  
  width: calc(100% - 100px);
}

#quiz button {
  float: center;
  margin: 8px 0px 0px 8px;
  padding: 4px 8px;
         outline: none;
        background-color: #fc8f00b6;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: none;
        box-shadow: 0px 0px 10px #fff;
}



#quiz button:disabled {
  opacity: 0.5;
  background-color: #2f2b2b;
   color: #fff;
  cursor: default;
}

#question {
  color: black;
  padding: 20px;
  background-color: #66625c;
  opacity: 0.9;
  text-align: center;
}

#question h2 {   
  color: #000;
  margin-bottom: 16px;
  font-weight: 600;
  font-size: 20px;
}

#question input[type=radio] {
  display: none;
}

#question label {
  display: inline-block;
  margin: 4px;
  padding: 8px;
  background: #FAE3BB;
  color: #4C3000;
  width: calc(50% - 8px);
  min-width: 50px;
  cursor: pointer;
}

#question label:hover {
  background: #edc161;
}

#question input[type=radio]:checked + label {
  background:  #edc161;
  color: #FAFAFA;
}

#quiz-results {
        margin-top: 148px;
        position: absolute;
        right: 102px;
        top: 504px;
        padding: 10px;
        background-color: #00c853;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: none;
      }
      
      #quiz-results{
      align-content: center;
        position: absolute;
        top: 300px;
        padding: 10px;
        background-color: #00c853;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: none;
      }

#quiz-results-message {
  display: block;
  color: #00403C;
  font-size: 20px;
  font-weight: bold;
}

#quiz-results-score {
  display: block;
  color: #31706c;
  font-size: 20px;
}

#quiz-results-score b {
  color: #00403C;
  font-weight: 600;
  font-size: 20px;
}

#quiz-retry-button {

  float: left;
  margin: 8px 0px 0px 8px;
  padding: 4px 8px;
  background: #9ACFCC;
  color: #00403C;
  font-size: 14px;
  cursor: pointer;
  outline: none;
  
}
      
        
        .timer {
  display: flex;
           
  justify-content: center;
  align-items: center;
  font-size: 24px;
  font-weight: bold;
  color: #ffffff;
  background-color: #333333;
  padding: 10px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
  animation: timer-anim 1s linear infinite;
height: 60px;
            width: 90px;
           
}

@keyframes timer-anim {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}

 
    </style>
  </head>
  <body onload="startTimer()">
    <div >
      <div>
                  <h2> <?php
    // check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        // display the user's name
        echo "Welcome, " . $_SESSION['user_name'] . "!";
    } else {
        // redirect to the login page
        header('Location: ../login/signin.php');
        exit();
    }
    ?> </h2>
              <span id="timer" class="timer">00:00</span>
              <button id="restartBtn" onclick="restart()" class="restart">Restart</button>
           <button id="next" onclick="location.href='leaderboard.php'" class="restart" style="border-left:800px;">Submit</button>
          </div>
        
      </div>
      <div class="quiz">
        <div id="quiz">
  <h1 id="quiz-name"></h1>
            <button id="prev-question-button">Previous</button>
  <button id="submit-button" onclick="submitTime()">Submit Answers</button>
  <button id="next-question-button">Next Question</button>
  

   
    <div id="quiz-results">
            <p id="quiz-results-score"></p>
          </div>
   
</div>
      
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script>
          // Array of all the questions and choices to populate the questions. This might be saved in some JSON file or a database and we would have to read the data in.
var all_questions = [{
  question_string: "I am light as a feather, yet the strongest man cannot hold me for much more than a minute. What am I?",
  choices: {
    correct: "Breath",
    wrong: ["Feather", "Bird", "Smoke"]
  }
}, {
  question_string: "The more you take, the more you leave behind. What am I?",
  choices: {
    correct: "Footsteps",
    wrong: ["Memories", "Time", "Love"]
  }
}, {
  question_string: "I am taken from a mine and shut up in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?",
  choices: {
    correct: "A pencil lead",
    wrong: ["A can of paint", " A piece of coal", "A matchstick"]
  }
}, {
  question_string: 'I am full of holes, but I can hold water. What am I?',
  choices: {
    correct: "A sponge",
    wrong: ["A net", "A bucket", " A colandert"]
  }
}];

// An object for a Quiz, which will contain Question objects.
var Quiz = function(quiz_name) {
  // Private fields for an instance of a Quiz object.
  this.quiz_name = quiz_name;
  
  // This one will contain an array of Question objects in the order that the questions will be presented.
  this.questions = [];
}

// A function that you can enact on an instance of a quiz object. This function is called add_question() and takes in a Question object which it will add to the questions field.
Quiz.prototype.add_question = function(question) {
  // Randomly choose where to add question
  var index_to_add_question = Math.floor(Math.random() * this.questions.length);
  this.questions.splice(index_to_add_question, 0, question);
}

// A function that you can enact on an instance of a quiz object. This function is called render() and takes in a variable called the container, which is the <div> that I will render the quiz in.
Quiz.prototype.render = function(container) {
  // For when we're out of scope
  var self = this;
  
  // Hide the quiz results modal
  $('#quiz-results').hide();
  
  // Write the name of the quiz
  $('#quiz-name').text(this.quiz_name);
  
  // Create a container for questions
  var question_container = $('<div>').attr('id', 'question').insertAfter('#quiz-name');
  
  // Helper function for changing the question and updating the buttons
  function change_question() {
    self.questions[current_question_index].render(question_container);
    $('#prev-question-button').prop('disabled', current_question_index === 0);
    $('#next-question-button').prop('disabled', current_question_index === self.questions.length - 1);
   
    
    // Determine if all questions have been answered
    var all_questions_answered = true;
    for (var i = 0; i < self.questions.length; i++) {
      if (self.questions[i].user_choice_index === null) {
        all_questions_answered = false;
        break;
      }
    }
    $('#submit-button').prop('disabled', !all_questions_answered);
  }
  
  // Render the first question
  var current_question_index = 0;
  change_question();
  
  // Add listener for the previous question button
  $('#prev-question-button').click(function() {
    if (current_question_index > 0) {
      current_question_index--;
      change_question();
    }
  });
  
  // Add listener for the next question button
  $('#next-question-button').click(function() {
    if (current_question_index < self.questions.length - 1) {
      current_question_index++;
      change_question();
    }
  });
 
  // Add listener for the submit answers button
  $('#submit-button').click(function() {
    // Determine how many questions the user got right
    var score = 0;
    for (var i = 0; i < self.questions.length; i++) {
      if (self.questions[i].user_choice_index === self.questions[i].correct_choice_index) {
        score++;
      }
   $('#quiz-retry-button').click(function(reset) {
      quiz.render(quiz_container);
   });
    
    }
    
   
    
    // Display the score with the appropriate message
    var percentage = score / self.questions.length;
    console.log(percentage);
    var message;
    if (percentage === 1) {
      message = 'Great job!'
    } else if (percentage >= .75) {
      message = 'You did alright.'
    } else if (percentage >= .5) {
      message = 'Better luck next time.'
    } else {
      message = 'Maybe you should try a little harder.'
    }
      let xhr = new XMLHttpRequest();
xhr.open("POST", "level3_score.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    console.log(xhr.responseText);
  }
};
xhr.send("score=" + score*100);
$('#quiz-results-message').text(message);
    $('#quiz-results-score').html('Your Accuracy : <b>' + (score*100)/self.questions.length  + '</b> %');
    $('#quiz-results').slideDown();
    $('#submit-button').slideUp();
    $('#next-question-button').slideUp();
    $('#prev-question-button').slideUp();
    if(((score*100)/self.questions.length)==100){
      $('#next').slidedown();
    }
  });
  
  // Add a listener on the questions container to listen for user select changes. This is for determining whether we can submit answers or not.
  question_container.bind('user-select-change', function() {
    var all_questions_answered = true;
    for (var i = 0; i < self.questions.length; i++) {
      if (self.questions[i].user_choice_index === null) {
        all_questions_answered = false;
        break;
      }
    }
    $('#submit-button').prop('disabled', !all_questions_answered);
  });
}

// An object for a Question, which contains the question, the correct choice, and wrong choices. This block is the constructor.
var Question = function(question_string, correct_choice, wrong_choices) {
  // Private fields for an instance of a Question object.
  this.question_string = question_string;
  this.choices = [];
  this.user_choice_index = null; // Index of the user's choice selection
  
  // Random assign the correct choice an index
  this.correct_choice_index = Math.floor(Math.random(0, wrong_choices.length + 1));
  
  // Fill in this.choices with the choices
  var number_of_choices = wrong_choices.length + 1;
  for (var i = 0; i < number_of_choices; i++) {
    if (i === this.correct_choice_index) {
      this.choices[i] = correct_choice;
    } else {
      // Randomly pick a wrong choice to put in this index
      var wrong_choice_index = Math.floor(Math.random(0, wrong_choices.length));
      this.choices[i] = wrong_choices[wrong_choice_index];
      
      // Remove the wrong choice from the wrong choice array so that we don't pick it again
      wrong_choices.splice(wrong_choice_index, 1);
    }
  }
}

// A function that you can enact on an instance of a question object. This function is called render() and takes in a variable called the container, which is the <div> that I will render the question in. This question will "return" with the score when the question has been answered.
Question.prototype.render = function(container) {
  // For when we're out of scope
  var self = this;
  
  // Fill out the question label
  var question_string_h2;
  if (container.children('h2').length === 0) {
    question_string_h2 = $('<h2>').appendTo(container);
  } else {
    question_string_h2 = container.children('h2').first();
  }
  question_string_h2.text(this.question_string);
  
  // Clear any radio buttons and create new ones
  if (container.children('input[type=radio]').length > 0) {
    container.children('input[type=radio]').each(function() {
      var radio_button_id = $(this).attr('id');
      $(this).remove();
      container.children('label[for=' + radio_button_id + ']').remove();
    });
  }
  for (var i = 0; i < this.choices.length; i++) {
    // Create the radio button
    var choice_radio_button = $('<input>')
      .attr('id', 'choices-' + i)
      .attr('type', 'radio')
      .attr('name', 'choices')
      .attr('value', 'choices-' + i)
      .attr('checked', i === this.user_choice_index)
      .appendTo(container);
    
    // Create the label
    var choice_label = $('<label>')
      .text(this.choices[i])
      .attr('for', 'choices-' + i)
      .appendTo(container);
  }
  
  // Add a listener for the radio button to change which one the user has clicked on
  $('input[name=choices]').change(function(index) {
    var selected_radio_button_value = $('input[name=choices]:checked').val();
    
    // Change the user choice index
    self.user_choice_index = parseInt(selected_radio_button_value.substr(selected_radio_button_value.length - 1, 1));
    
    // Trigger a user-select-change
    container.trigger('user-select-change');
  });
}

// "Main method" which will create all the objects and render the Quiz.
$(document).ready(function() {
  // Create an instance of the Quiz object
  var quiz = new Quiz('');
  
  // Create Question objects from all_questions and add them to the Quiz object
  for (var i = 0; i < all_questions.length; i++) {
    // Create a new Question object
    var question = new Question(all_questions[i].question_string, all_questions[i].choices.correct, all_questions[i].choices.wrong);
    
    // Add the question to the instance of the Quiz object that we created previously
    quiz.add_question(question);
  }
  
  // Render the quiz
  var quiz_container = $('#quiz');
  quiz.render(quiz_container);
});
         
          
          
          </script>
      <script>
  // Get the submit button
const submitBtn = document.getElementById("submit-button");

// Get the timer element
const timerEl = document.getElementById("timer");

// Set the start time to the current time
let startTime = new Date().getTime();

// Update the timer every second
setInterval(() => {
  // Calculate the elapsed time in seconds
  let elapsedTime = Math.floor((new Date().getTime() - startTime) / 1000);

  // Calculate the minutes and seconds
  let minutes = Math.floor(elapsedTime / 60);
  let seconds = elapsedTime % 60;

  // Add leading zeros to the minutes and seconds
  minutes = String(minutes).padStart(2, "0");
  seconds = String(seconds).padStart(2, "0");

  // Update the timer element
  timerEl.innerText = `${minutes}:${seconds}`;
}, 1000);

// Add a click event listener to the submit button
submitBtn.addEventListener("click", () => {
  // Calculate the elapsed time in minutes
  let elapsedMinutes = Math.floor((new Date().getTime() - startTime) / 60000);

  // Send the elapsed time to the server using AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "level3_time.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = () => {
    console.log(xhr.responseText);
  };
  xhr.send(`time=${elapsedMinutes}`);
});
          function restart() {
  location.reload();
}


</script>

  </body>
</html>