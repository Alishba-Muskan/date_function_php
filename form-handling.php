<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Title</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form action="query.php" method="post" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="uname">Name</label>
                        <input type="text" class="form-control" name="uname" id="uname" required>
                        <div class="invalid-feedback">
                            please provide a name.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uemail">Email</label>
                        <input type="Email" class="form-control" name="uemail" id="uemail" required>
                        <div class="invalid-feedback">
                            please provide a Email.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="umsg">Feedback</label>
                        <textarea class="form-control" name="umsg" id="umsg"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.1/tinymce.min.js"></script>"
    <script> 
        tinymce.init({ selector:'textarea'});
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>