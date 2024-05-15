<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale-1.0" />
    <title>PRSRRIC | Admin</title>
    <link href="css/dataEntry.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form id="regForm" method="post" action="datasubmit.php" enctype="multipart/form-data">

        <img src="img/admin.png" class="admin" alt="Admin:">

        <!-- One "tab" for each step in the form: -->
        <div class="tab">College:
            <p><input type="text" placeholder="Name..." oninput="this.className = ''" required></p>
            <p><input type="text" placeholder="About Us..." oninput="this.className = ''" required></p>

            <p>
            <div class="container">
                <input type="file" oninput="this.className = ''" required>
                <div class="custom-file">
                    <h6>Please Upload College logo</h6>
                </div>
            </div>
            </p>
        </div>

        <div class="tab">Front:
            <p><input type="text" placeholder="Thumbnail..." oninput="this.className = ''" required></p>
            <p>
            <div class="container">
                <input type="file" oninput="this.className = ''">
                <div class="custom-file">
                    <h6>Please Upload College Picture</h6>
                </div>
            </div>
            </p>
        </div>

        <div class="tab">Our Statistic:
            <p><input type="text" class="statics" placeholder="Number of class rooms..." onkeyup="numbersOnly(this)"
                    oninput="this.className = ''" required></p>
            <p><input type="text" class="statics" placeholder="Number of students..." onkeyup="numbersOnly(this)"
                    oninput="this.className = ''" required></p>
            <p><input type="text" class="statics" placeholder="Number of vehicle..." onkeyup="numbersOnly(this)"
                    oninput="this.className = ''" required></p>
            <p><input type="text" class="statics" placeholder="Number of staff..." onkeyup="numbersOnly(this)"
                    oninput="this.className = ''" required></p>
        </div>

        <div class="tab">Contact Info:
            <p><input type="text" placeholder="Help line number..." onkeyup="numbersOnly(this)"
                    oninput="this.className = ''" required></p>
            <p><input type="email" placeholder="Email ID..." oninput="this.className = ''" required></p>
        </div>

        <div class="tab">Facility:
            <p>
            <div class="container" id="field1">
                <i id="btn1">+</i>
                <input type="file" oninput="this.className = ''" required>
                <input class="legend" type="text" placeholder="Picture Name" oninput="this.className = ''" required>
                <div class="custom-file">
                    <h6>Please Upload Facility Pic</h6>
                </div>
            </div>
            </p>
            <i id="btnA">-</i>
            <hr />
            <i id="btnB">-</i>
            <p>
            <div class="container" id="field2">
                <i id="btn2">+</i>
                <input type="file" oninput="this.className = ''" required>
                <input class="legend" type="text" placeholder="Picture Name" oninput="this.className = ''" required>
                <div class="custom-file">
                    <h6>Please Upload College Teacher Pic</h6>
                </div>
            </div>
            </p>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form>
    <script type="text/javascript" src="js/step.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#btn1").click(function () {
                $("#field1").append("<p><div class='container' id='div1'><input type='file' oninput='this.className = '''  required><input class='legend' type='text' placeholder='Picture Name' oninput='this.className = ''' required><div class='custom-file'><h6>Please Upload Facility Pic</h6></div></div></p>");
            });

            $("#btn2").click(function () {
                $("#field2").append("<p><div class='container' id='div2' ><input type='file' oninput='this.className = ''' required><input class='legend' type='text' placeholder='Picture Name' oninput='this.className = ''' required><div class='custom-file'><h6>Please Upload College Teacher Pic</h6></div></div></p>");
            });

            $("#btnA").click(function () {
                $("#div1").remove();
            });
            $("#btnB").click(function () {
                $("#div2").remove();
            });
        });
    </script>
</body>

</html>