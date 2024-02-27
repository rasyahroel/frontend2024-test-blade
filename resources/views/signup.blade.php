<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign Up ASI</title>

    <style>
        body {
            background: linear-gradient(to bottom, black, white);
        }

        #submit:hover {
            background-color: blue;
        }

        .border-red {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <form class="card py-3" style="width: 20rem;" id="email-red">
            <label for="title" class="text-center">Sign Up</label>
            <div class="card-body">
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email">
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock"
                        placeholder="Create your password">
                </div>
                <div>
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm-password" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Confirm your password">
                </div>
                <div class="text-center pt-5">
                    <button id="submit" type="submit" class="btn btn-secondary py-2 px-4 my-2 border-0">Sign
                        Up</button>
                    <p>Already registered? <a href="#" class="text-decoration-none text-black">Sign in</a></p>
                </div>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <script>
            $(document).ready(function() {
                $('#email-red').submit(function(e) {
                    e.preventDefault();

                    var email = $('#email').val();
                    if (emailValidate(email)) {
                        alert('Email valid')
                    } else {
                        $('#email').addClass('border-red')
                        alert('Email wrong')
                    }
                })

                function emailValidate(email) {
                    var regex = /\S+@\S+\.\S+/;
                    return regex.test(email)
                }

                $('#email').focus(function() {
                    $(this).removeClass('border-red');
                })
            })
        </script>
</body>

</html>
