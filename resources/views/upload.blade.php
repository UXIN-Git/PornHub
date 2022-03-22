<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../sass/app.scss" type="text/scss">
    <title>Document</title>
    <style>
        @media (max-width: 575.98px) {}

        @media (max-width: 767.98px) {}

        @media (max-width: 991.98px) {}

        @media (max-width: 1199.98px) {}

        @media (max-width: 430px) {
            {
                font-size: 33px;
            }
        }

        h1 {
            text-align: center;
            margin-top: 35px;
        }

        .btn {
            margin: 10px;
            right: 0;
            position: absolute;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="title m-b-md">
            <img src="../storage/image/190503_loading.gif" style="width: 300px; margin: 35px auto; display: block;">
            <h1 class='H1'>全台最速的轉小網網站</h1>

        </div>
        <div class="row no-gutters">
            <div class="col">
                請將轉小網html檔上傳至此 <font color="red">(檔名請以英文、底線命名)</font>
                <div class="form-group">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control" required />
                        <input type="submit" class="btn btn-primary" role="button" aria-pressed="true" />
                    </form>
                </div>
            </div>
            </div>
            <div class="row no-gutters mt-5">
            <div class="col">
                <h4>小網URL：{{ $adxFile }}</h4>
                
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>