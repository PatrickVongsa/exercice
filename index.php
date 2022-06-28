<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <h1 id="title">ArtZine Survey List</h1>
            <p id="description">Thank you for taking the time to help us improve the platform</p>
        </header>
        <form id="survey-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required />
            </div>
            <div class="form-group">
                <label for="age">
                    Age
                    <span class="hint">(optional)</span>
                </label>
                <input type="number" min="1" name="age" id="age" class="form-control" placeholder="Enter your age" />
            </div>
            <div class="form-group">
                <label for="email">Which option best describes your current role?</label>
                <select id="dropdown" name="role" class="form-control" required>
                    <option disabled selected value>Select your current role</option>
                    <option value="student">Student</option>
                    <option value="artist">Artist</option>
                    <option value="graphic_designer">Graphic Designer</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <p>Would you recommend Artzine to your friend?</p>
                <label>
                    <input name="user-recommend" value="definitely" type="radio" class="input-radio" checked />
                    Definitely
                </label>
                <label>
                    <input name="user-recommend" value="maybe" type="radio" class="input-radio" />
                    Maybe
                </label>
                <label>
                    <input name="user-recommend" value="no" type="radio" class="input-radio" />
                    No
                </label>
            </div>

            <div class="form-group">
                <p>
                    What can we improve for this zine? <span class="clue">(Check all that apply)</span>
                </p>
                <label>
                    <input name="prefer" value="layouts-are-boring" type="checkbox" class="input-checkbox" /> Layouts are boring
                </label>
                <label>
                    <input name="prefer" value="editorial-sucks" type="checkbox" class="input-checkbox" /> The editorial sucks
                </label>
                <label>
                    <input name="prefer" value="need-new-ideas" type="checkbox" class="input-checkbox" /> Need new ideas
                </label>
                <label>
                    <input name="prefer" value="the-website-kinda-old" type="checkbox" class="input-checkbox" /> The website kinda old
                </label>
                <label>
                    <input name="prefer" value="add-new-section-to-interact-more-with-users" type="checkbox" class="input-checkbox" /> Add new section to interact more with users
                </label>
                <label>
                    <input name="prefer" value="the-forum-need-improvement" type="checkbox" class="input-checkbox" /> The forum need improvement
                </label>
            </div>

            <div class="form-group">
                <label for="comment">Your comments or suggestion for us</label>
                <textarea id="comment" class="input-textarea" name="comment" placeholder="Enter your comment here..."></textarea>
            </div>

            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>