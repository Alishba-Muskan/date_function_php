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


    <div class="conatiner mx-5 my-4" >
        <div class="row">
            <div class="col-md-12">
                <table class="table table table-striped" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if (isset($_REQUEST['uname']) && isset($_REQUEST['uemail']) && isset($_REQUEST['umsg'])): ?>
                                <td> <?php echo $_REQUEST['uname'] ?> </td>
                                <td> <?php echo $_REQUEST['uemail'] ?> </td>
                                <td> <?php echo $_REQUEST['umsg'] ?> </td>
                            <?php else: header("location:form-handling.php"); ?>
                                <!-- <td colspan="3" align="center">No data found</td> -->
                            <?php endif ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>