<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image/png" href="frome_logo.png" />

    <title>Home</title>
  <body>
    <div class="container">
      <h1 class="page-title"><u>Players results & Scores</u></h1>
      <form action="" class="result-form">
        <u>Add your results</u>
        <div class="form-inputs">
          <span class="result-name"
            >Full name <br /><input type="text" name="name" id="users-name" />
          </span>
          <br />
          <span class="result-result"
            >Result <br />
            <input type="text" name="result" id="players-result" />
          </span>
          <br />
          <select name="challenge-selection" id="" class="chal-selection">
            <span>Select challenge</span>
            <option value="">Select challenge</option>
            <option value="">challenge 1</option>
            <option value="">challenge 2</option>
            <option value="">challenge 3</option>
            <option value="">challenge 4</option>
            <option value="">challenge 5</option>
            <option value="">challenge 6</option>
          </select>
          <br />
          <button class="form-button">Submit Result</button>
        </div>
      </form>
      <!-------------------------------select box-->
      <h2 class="select-box-header">See result tables</h2>
      <div class="select-box">
        <div class="options-container">
          <div class="option" id="challenge-1">
            <input
              type="radio"
              class="radio"
              id="challenge-1"
              name="category"
            />
            <label for="challenge-1">Challenge 1</label>
          </div>
          <div class="option" id="challenge-2">
            <input
              type="radio"
              class="radio"
              id="challenge-2"
              name="category"
            />
            <label for="challenge-2">Challenge 2</label>
          </div>
          <div class="option" id="challenge-3">
            <input
              type="radio"
              class="radio"
              id="challenge-3"
              name="category"
            />
            <label for="challenge-3">Challenge 3</label>
          </div>
          <div class="option" id="challenge-4">
            <input
              type="radio"
              class="radio"
              id="challenge-4"
              name="category"
            />
            <label for="challenge-4">Challenge 4</label>
          </div>
          <div class="option" id="challenge-5">
            <input
              type="radio"
              class="radio"
              id="challenge-4"
              name="category"
            />
            <label for="challenge-5">Challenge 5</label>
          </div>
          <div class="option" id="challenge-6">
            <input
              type="radio"
              class="radio"
              id="challenge-5"
              name="category"
            />
            <label for="challenge-6">Challenge 6</label>
          </div>
        </div>
        <div class="selected">
          Select Challenge
        </div>
      </div>
      
      <!--------------------------------- Results tables ----->

      <div class="wrapper" id="results-1">
        <h2>challenge 1</h2>
        <div class="players-results">
          <h3><u>Leader Board</u></h3>
          <div>
            <ul>
              <li>1. Joe Blogs => 10 Minuets</li>
              <li>2. Joe Blogs => 9 Minuets</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="wrapper" id="results-2">
        <h2>challenge 2</h2>
        <div class="players-results">
          <div class="submit-form">
            <h4>Add Your Results:</h4>
            <div class="flex">
              <p class="name">
                <label> Full Name</label>
                <input type="text" />
              </p>
              <p class="result">
                <label for="">Result</label>
                <input type="text" />
              </p>
              <p>
                <button class="submit-result">Submit</button>
              </p>
            </div>
          </div>
          <h3><u>Leader Board</u></h3>
          <div>
            <ul>
              <li>1. Joe Blogs</li>
              <li>2. Joe Blogs</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="wrapper" id="results-3">
        <h2>challenge 3</h2>
        <div class="players-results">
          <div class="submit-form">
            <h4>Add Your Results:</h4>
            <div class="flex">
              <p class="name">
                <label> Full Name</label>
                <input type="text" />
              </p>
              <p class="result">
                <label for="">Result</label>
                <input type="text" />
              </p>
              <p>
                <button class="submit-result">Submit</button>
              </p>
            </div>
          </div>
          <h3><u>Leader Board</u></h3>
          <div>
            <ul>
              <li>1. Joe Blogs3</li>
              <li>2. Joe Blogs</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="wrapper" id="results-4">
        <h2>challenge 4</h2>
        <div class="players-results">
          <div class="submit-form">
            <h4>Add Your Results:</h4>
            <div class="flex">
              <p class="name">
                <label> Full Name</label>
                <input type="text" />
              </p>
              <p class="result">
                <label for="">Result</label>
                <input type="text" />
              </p>
              <p>
                <button class="submit-result">Submit</button>
              </p>
            </div>
          </div>
          <h3><u>Leader Board</u></h3>
          <div>
            <ul>
              <li>1. Joe Blogs</li>
              <li>2. Joe Blogs</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="wrapper" id="results-5">
        <h2>challenge 5</h2>
        <div class="players-results">
          <div class="submit-form">
            <h4>Add Your Results:</h4>
            <div class="flex">
              <p class="name">
                <label> Full Name</label>
                <input type="text" />
              </p>
              <p class="result">
                <label for="">Result</label>
                <input type="text" />
              </p>
              <p>
                <button class="submit-result">Submit</button>
              </p>
            </div>
          </div>
          <h3><u>Leader Board</u></h3>
          <div>
            <ul>
              <li>1. Joe Blogs</li>
              <li>2. Joe Blogs</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="wrapper" id="results-6">
        <h2>challenge 6</h2>
        <div class="players-results">
          <div class="submit-form">
            <h4>Add Your Results:</h4>
            <div class="flex">
              <p class="name">
                <label> Full Name</label>
                <input type="text" />
              </p>
              <p class="result">
                <label for="">Result</label>
                <input type="text" />
              </p>
              <p>
                <button class="submit-result">Submit</button>
              </p>
            </div>
          </div>
          <h3><u>Leader Board</u></h3>
          <div>
            <ul>
              <li>1. Joe Blogs</li>
              <li>2. Joe Blogs</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--^^container end^^-->
    <script src="main.js"></script>
  </body>
</html>
